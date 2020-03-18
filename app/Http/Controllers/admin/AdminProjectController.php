<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(5);
        return view('admin.projects',compact('projects'))
                ->with('i', (request()->input('page', 1) - 1) * 5);   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
        $convertedTitle = strtolower($request->title);
        $convertedTitle = preg_replace('/\s+/', '-', $convertedTitle);

        if ($request->hasFile('image')) {
/*          for production only   
            $path = base_path();
            $path = str_replace("coffee54", "public_html", $path);
            $destinationPath = $path . '/images/coffeequery'; */

            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();

            /* $image->move($destinationPath, $image_name); */
            $image->move(public_path('images/coffeequery'), $image_name);
        } else {
            $image_name = "no image available";
        }
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->storeAs('public', $file_name);
        } else {
            $file_name = "nofile";
        }

        $project = new Project();
        $project->title = $request->title;
        $project->subtitle = $request->subtitle;
        $project->body = $request->body;
        $project->image = $image_name;
        $project->file = $file_name;
        $project->slug = $convertedTitle;
        $project->save();
        return back()->with(["success"=>"Saved Successfully."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required'
        ]);
        $convertedTitle = strtolower($request->title);
        $convertedTitle = preg_replace('/\s+/', '-', $convertedTitle);

        if($project = Project::find($request->id)){
            if ($request->hasFile('image')) {
/*          for production only   
            $path = base_path();
            $path = str_replace("coffee54", "public_html", $path);
            $destinationPath = $path . '/images/coffeequery'; 
            $old_image_path = $destinationPath.'/'.$project->name;
            */
                $old_image_path = public_path('images/coffeequery/'.$project->image);
                if(file_exists($old_image_path)){
                    @unlink($old_image_path);
                }
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                /* $image->move($destinationPath, $image_name); */
                $image->move(public_path('images/coffeequery'), $image_name);
            } else {
                $image_name = $project->image;
            }

            if ($request->hasFile('file')) {
                foreach(Storage::files('public') as $file){
                    if($file == 'public/'.$project->file){
                        Storage::delete($file);
                    }
                }
                $file = $request->file('file');
                $file_name = $file->getClientOriginalName();
                $file->storeAs('public', $file_name);
            } else {
                $file_name = $project->file;
            }
            $project->title = $request->title;
            $project->subtitle = $request->subtitle;
            $project->body = $request->body;
            $project->image = $image_name;
            $project->file = $file_name;
            $project->slug = $convertedTitle;
            $project->save();
            return back()->with(["success"=>"Updated Successfully."]);
        }
        return back()->with(["error"=>"Data Not Found!"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($project = Project::find($id)){
/*          for producation only   
            $path = base_path();
            $path = str_replace("coffee54", "public_html", $path);
            $destinationPath = $path . '/images/coffeequery';
            $old_image_path = $destinationPath.'/'.$project->name; */

            $image_path = public_path('images/coffeequery/'.$project->image);
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            foreach(Storage::files('public') as $file){
                if($file == 'public/'.$project->file){
                   Storage::delete($file);
                }
            }
            $project->delete();
            return back()->with(["success"=>"Deleted Successfully."]);
        }
        return back()->with(["success"=>"Data Not Found!"]);
    }
}

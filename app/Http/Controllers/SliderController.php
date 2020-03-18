<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(5);
        return view('admin.sliders',compact('sliders'))
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
            'name' => 'required',
            'image' => 'required|image',
        ]);
        $slider = new Slider();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $new_name = rand(). '.'. $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
        }else{
            $new_name = "no image available";
        }
        
        $slider->name = $request->name;
        $slider->image = $new_name;
        $slider->save();
        return back()->with('success', "data added successfully");
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
            'name' => 'required',
            'image' => 'required|image',
        ]);
        $slider = Slider::find($request->id);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $new_name = rand(). '.'. $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
        }else{
            $new_name = "no image available";
        }

        $slider->name = $request->name;
        $slider->image = $new_name;
        $slider->save();
        return back()->with('success', "updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return back()->with('success', "deleted successfully");
    }
}

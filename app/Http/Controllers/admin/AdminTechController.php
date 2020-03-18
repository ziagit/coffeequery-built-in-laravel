<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tech;
use App\Year;
use App\Nouser;

class AdminTechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techs = Tech::latest()->paginate(5);
        return view('admin.techs',compact('techs'))
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
            'details' => 'required',
            'brand' => 'required',
            'logo' => 'required'
        ]);
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logo_name = $logo->getClientOriginalName();
            $logo->move(public_path('images/coffeequery'), $logo_name);
        }else{
            $logo_name = 'no logo provided';
        }

        $tech = new Tech();
        $tech->name = $request->name;
        $tech->brand = $request->brand;
        $tech->details = $request->details;
        $tech->logo = $logo_name;
        $tech->date = $request->date;
        $tech->users = $request->users;
        $tech->save();
  
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
            'name' => 'required',
            'details' => 'required',
            'brand' => 'required',
        ]);
        if($tech = Tech::find($request->id)){
            if ($request->hasFile('logo')) {
                $old_logo_path = public_path('images/coffeequery/'.$tech->logo);
                if(file_exists($old_logo_path)){
                    @unlink($old_logo_path);
                }
                $logo = $request->file('logo');
                $logo_name = $logo->getClientOriginalName();
                $logo->move(public_path('images/coffeequery'), $logo_name);
            } else {
                $logo_name = $tech->logo;
            }

            $tech->name = $request->name;
            $tech->brand = $request->brand;
            $tech->details = $request->details;
            $tech->logo = $logo_name;
            $tech->date = $request->date;
            $tech->users = $request->users;
            $tech->save();
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
        if($tech = Tech::find($id)){
            $tech->delete();

            $logo_path = public_path('images/coffeequery/'.$tech->logo);
            if(file_exists($logo_path)){
                @unlink($logo_path);
            }
            return back()->with(["success"=>"Deleted Successfully."]);
        }
        return back()->with(["error"=>"Data Not Found!"]);
    }
}

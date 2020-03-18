<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Techinfo;
use App\Tech;
class AdminTechinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techinfos = Techinfo::latest()->paginate(5);
        $techs = Tech::all('name');
        return view('admin.techinfo',compact('techinfos','techs'))
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
            'date' => 'required',
            'users' => 'required',
            'techs' => 'required'
        ]);

        $info = new Techinfo();
        $info->date = $request->date;
        $info->users = $request->users;

        $info->save();
        $info->techs()->attach(Tech::where('name', $request->techs)->first());

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($tech = Techinfo::find($id)){
            $tech->delete();
            return back()->with(["success"=>"Deleted Successfully."]);
        }
        return back()->with(["error"=>"Data Not Found!"]);
    }
}

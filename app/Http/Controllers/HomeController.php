<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tech;
use App\Company;
use \Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $value = Cache::rememberForever('techs', function(){ */
            $data = Tech::all();

            view()->share('pageTitle','Home - Coffee Query');
            view()->share('metaContent', Company::get(['slogan'])[0]->slogan);
            
            $array[] = ['Technology', 'Users'];
            foreach($data as $key => $value){
                $array[++$key] = [$value->name, $value->users];
            }
            return view('home')->with('techs', json_encode($array));
        /* }); */

    }
    public function show($id){

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Contact;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Company::with('teams')->get();
    }

    public function about(){
        $company = Company::all();

        view()->share('pageTitle','About Coffee Query');
        view()->share('metaContent',$company[0]->slogan);
        return view('about', compact('company'));
    }

    public function contact(){
        $company = Company::all();
        view()->share('pageTitle','Contact Coffee Query');
        view()->share('metaContent','Send an email to: zia@coffeequery.com');
        return view('contact', compact('company'));
    }

    public function storeContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return back()->with(["messageSent"=>"Hi back 🖐, Thanks for contacting, I'll reply you as soon as I can."]);
    }
    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required | email',
        ]);
        $contact = new Contact();
        if($contact->email == $request->email){
            return back()->with(["error"=>"You already subscribed."]);
        }
        $contact->name = $request->email;
        $contact->email = $request->email;
        $contact->message = $request->email;
        $contact->save();
        return back()->with(["subscribed"=>"Thanks for subscribing us! 👍"]);
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
        //
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
        //
    }
}

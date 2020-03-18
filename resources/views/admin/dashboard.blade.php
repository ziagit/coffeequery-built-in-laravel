@extends('layouts.new-layout')

@section('content')
<h3>Wellcome to CoffeeQuery dashboard!</h3>
<div style="margin:20px;">
    <p>You are loggedin as: <b>{{Auth::user()->name}}</b></p>

</div>
@endsection

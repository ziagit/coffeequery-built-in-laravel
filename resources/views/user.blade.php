@extends('layouts.app')

@section('content')
<!-- Titlebar
================================================== -->

  <!-- Content -->
  <div>
    <h1>Hey there ✋,</h1>
    <h3>We are very happy 😍 that you are here {{Auth::user()->name}}!</h3>
    <h3>Check bellow links if you are interested 👀</h3>
    <ul>
      <li><a href="/posts">Posts</a></li>
      <li><a href="/projects">Projects</a></li>
    </ul>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
  </div>
  <!-- Content End -->
  @endsection
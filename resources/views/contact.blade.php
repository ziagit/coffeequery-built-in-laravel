@extends('layouts.app')
@section('content')
@if($message = Session::get('messageSent'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif
<div>
  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
    <h2>Find us on map </h2>
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.427935478633!2d69.13373451461577!3d34.51738450052287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d16f2c550c3f59%3A0xa47b5d537e5b7214!2sKabul%20University!5e0!3m2!1sen!2s!4v1575880527726!5m2!1sen!2s"
    width="100%"
    height="300"
    frameborder="0"
    style="border:0;"
    allowfullscreen
    ></iframe>
  </div>

  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
  <h2>Drop us a line! 💌</h2>
    <form class="form-horizontal" method="POST" action="{{url('/contact')}}" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <div class="col-md-12">
              <input type="text" class="form-control" name="name" required placeholder="Name">
          </div>
      </div>

      <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <input type="email" class="form-control" name="email" required placeholder="Email">
        </div>
      </div>

      <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
        <div class="col-md-12">
            <textarea rows="5" id="message" class="form-control" name="message" required placeholder="Message"></textarea>
        </div>
      </div>

      <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="btn btn-success">Send</button>
          </div>
      </div>
    </form>
  </div>
</div>



  @endsection
@extends('layouts.app')

@section('content')
<div>
  <h2>{{$company[0]->name}}</h2>
  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
    <p>{!! $company[0]->details !!}</p>
  </div>
  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <img src="{{ URL::to('/') }}/images/coffeequery/{{$company[0]->teams[0]->image}}" class="image-thumbnail" width="100%">
    <p>{{$company[0]->teams[0]->details}}</p>
    <br>
    <div class="form-group">
          <div class="col-md-6 col-sm-6 col-md-6 col-lg-6">
          <a href="https://www.facebook.com/ziaakbariF"
            target="_blank" class="facebook">
            <i class="fa fa-facebook-official" style="font-size:25px;"></i>
          </a>
          </div>
          <div class="col-md-6 col-sm-6 col-md-6 col-lg-6">
          <a href="https://twitter.com/zia45336199"
            target="_blank" class="twitter">
              <i class="fa fa-twitter-square" style="font-size:25px;"></i>
          </a>
          </div>
      </div>
  </div>
</div>
  @endsection
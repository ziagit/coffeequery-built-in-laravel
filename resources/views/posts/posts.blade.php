@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        
            @foreach($posts as $post)
                <div class="row display-flex">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <img src="{{ URL::to('/') }}/images/coffeequery/{{$post->image}}" class="image-thumbnail" width="100%" height="100%">
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <h2><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h2>
                        <p>{{$post->subtitle}}</p>
                    </div>
                </div>
                <br>
            @endforeach
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    {!! $posts->links() !!}
                    </div>
                </div>
            </div>

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            @include('sidebar')
        </div>
    </div>
</div>
 
@endsection

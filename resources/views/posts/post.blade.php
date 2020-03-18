@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <img src="{{ URL::to('/') }}/images/coffeequery/{{$post->image}}" class="image-thumbnail" width="100%">
      <h1>{{$post->title}}</h1>
      <p>{!! $post->body !!}</p>

      @include('share', ['url' => request()->fullUrl()])

      <hr>
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addComment">Comments</button>
      <div class="comment">
          @foreach($post->comments as $comment)
          <p><span class="label label-warning">{{$comment->user_name}}</span> {{$comment->created_at}}</p>
          <p>{{ $comment->comment }}</p>
          @endforeach
      </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    @include('sidebar')
    </div>
  </div>
</div>


<div class="modal fade" id="addComment">
    <div class="modal-dialog" style="">
      <div class="modal-content">
        <div class="modal-body" style="padding:0; height:100px;">
              <div class="row">
                  <div class="c">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <form action="{{url('create/post/comment')}}" method="POST" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="postId" value="{{$post->id}}">
                                  <div class="form-group">
                                      <label for="name">Name</label>
                                      <input class="form-control" id="name" name="name" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="comment">Comment</label>
                                      <span class="emoji">Copy ✋ 👍 👎 👌	😅 😄 😍</span>
                                      <textarea class="form-control" id="comment" name="comment" rows="5" required></textarea>
                                  </div>
                                  <div class="form-group">
                                      <div class="">
                                          <button type="submit" class="btn btn-success">Add</button>
                                      </div>
                                  </div>
                              </form>   
                          </div>
                      </div>
                  </div>
              </div>
            </div>
      </div>
    </div>
  </div>

@endsection

<div class="labtop-ads">
<a href="https://www.bluehost.com/track/zia/coffee1" target="_blank"> <img border="0" src="https://bluehost-cdn.com/media/partner/images/zia/300x250/300x250BW.png"> </a>
</div>
<div class="mobile-ads">
<a href="https://www.bluehost.com/track/zia/coffee2" target="_blank"> <img border="0" src="https://bluehost-cdn.com/media/partner/images/zia/728x90/728x90BW.png"> </a>
</div>

<h3>Projects</h3>
  @foreach($sharedProjects as $project)
    <div class="side-list">
    <img src="{{ URL::to('/') }}/images/coffeequery/{{$project->image}}" class="image-thumbnail" width="50">
    <a href="/projects/{{$project->slug}}"> {{$project->title}}</a>
    </div>
    <br>
  @endforeach

<h3>Latest Posts</h3>
  @foreach($sharedPosts as $post)
    <div class="side-list">
      <img src="{{ URL::to('/') }}/images/coffeequery/{{$post->image}}" class="image-thumbnail" width="50">
      <a href="/posts/{{$post->slug}}"> {{$post->title}}</a>
    </div>
    <br>
  @endforeach

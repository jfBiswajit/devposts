@extends('layout')
@section('content')
    <div class="posts-container">
      @foreach ($posts as $post)
         <div class="post-item">
        <div class="post-thubnail">
          <img src="{{ asset('storage/post_thumbnail/' . $post->image) }}">
        </div>
        <div class="post-description">
          <a href="#" class='post-title'>
          <h3><a href="{{URL::to('/post_details?id=' . $post->id)}}" style="color: black">{{$post->title}}</a></h3>
          </a>
          <ul class="post-activity">
          <li>{{$timesAgo($post->created_at)}}</li>
            <li>{{round(str_word_count($post->details) / 250)}} min to read</li>
            <li><a href="#">{{$post->category_id}}</a></li>
            <li>Created By: <a href="#" style="font-weight: bold; color: #0ca678;">Admin</a></li>
          </ul>
          <div class="post-intro">
            {{substr($post->details, 0, 230) . '...'}}
          </div>
          <a href="{{URL::to('/post_details?id=' . $post->id)}}" class="read-more">Read More</a>
        </div>
      </div> 
      @endforeach

      <div class="next-btn">
        <a href="#">Next</a>
      </div>
    </div>
@endsection
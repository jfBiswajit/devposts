@extends('layout')

@section('content')
    <div class="posts-container">
      <div class="posts" style="margin: 1rem 0">
        <h1>{{$post->title}}</h1>
        <div class="cover">
          <img src="{{ asset('storage/post_thumbnail/' . $post->image) }}" style="width: 300px; height: 300px">
        </div>
        <div class="details">
          {{$post->details}}
        </div>
      </div>
      <div class="btn-group" style="display: flex; justify-content: space-between">
        <a href="javascript:history.go(-1)"><button class="new-post-btn btn-yellow"> <-Go Back</button></a>
        
      <a href="{{URL::to('/post_details?id=' . ($post->id + 1))}}"><button class="new-post-btn btn-green"> Go Next-></button></a>
      </div>
    </div>
@endsection
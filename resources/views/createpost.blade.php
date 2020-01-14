@extends('layout')
@section('content')
    <div class="posts-container">
      <div class="btn-group">
        <a href="{{URL::to('/create_category')}}"><button class="new-post-btn btn-green">Add New Category</button></a>
        <a href="#"><button class="new-post-btn btn-yellow">Show All Category</button></a>
      </div>
    <form method="POST" action="{{URL::to('/post_successfully_added')}}" class="create-post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Post Title" size="40">
        <select name="category">
          <option>--SELECT--</option>
          @foreach ($allCategories as $category)
            <option value="{{$category->name}}">{{$category->name}}</option>
          @endforeach
        </select>
        <input type="file" name="image">
        <textarea name="details" cols="40" rows="2"></textarea>
        <button type="submit">Create</button>
      </form>
    </div>
@endsection
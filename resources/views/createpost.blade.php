@extends('layout')
@section('content')
    <div class="posts-container">
      <div class="btn-group">
        <a href="{{URL::to('/create_category')}}"><button class="new-post-btn btn-green">Add New Category</button></a>
        <a href="#"><button class="new-post-btn btn-yellow">Show All Category</button></a>
      </div>
      <form action="" class="create-post" enctype="multipart/form-data">
        <input type="text" name="" id="" placeholder="Post Title" size="40">
        <select name="" id="">
          <option value="">HTML</option>
          <option value="">CSS</option>
          <option value="">javascript</option>
          <option value="">PHP</option>
          <option value="">Laravel</option>
        </select>
        <input type="file" name="" id="">
        <textarea name="" id="" cols="40" rows="2"></textarea>
        <button type="submit">Create</button>
      </form>
    </div>
@endsection
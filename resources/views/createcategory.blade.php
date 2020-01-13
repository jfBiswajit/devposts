@extends('layout')
@section('content')
    <div class="posts-container">
      <div class="btn-group">
        <a href="#"><button class="new-post-btn btn-yellow">Show All Category</button></a>
      </div>
    <form action="{{URL::to('/create_category_success')}}" class="create-post" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="text" name="category" placeholder="Category name" size="40">
        <input type="text" name="slug" placeholder="Slug" size="40">
        <button type="submit" id="category-extra-margin-bottom">Create</button>
      </form>
    </div>
@endsection
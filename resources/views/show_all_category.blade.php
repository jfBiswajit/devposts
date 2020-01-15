@extends('layout');
@section('content')
    <div class="posts-container">
      <div class="btn-group">
        <a href="{{URL::to('/create_category')}}"><button class="new-post-btn btn-green">Add New Category</button></a>
      </div>

      <ul style="margin: 1rem 0">
        @foreach ($allCategories as $category)
          <li>{{$category->name}}</li>
        @endforeach
      </ul>
    </div>
@endsection
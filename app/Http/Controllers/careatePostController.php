<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Str;

class careatePostController extends Controller
{
    public function show() {
      $allCategories = DB::table('categories')->get();
      return view('createpost', ['allCategories' => $allCategories]);
    }

    public function newpostadded(Request $request) {
      $img = $request->file('image');
      $path = 'post_thumbnail';
      $img_name = strtolower(Str::random(4) . '.' .  $img->getClientOriginalExtension());
      
      $img->storeAs($path, $img_name);
      $img_path = $img->storeAs($path, $img_name);

      $data = array('category_id' => $request->get('category'), 'title' =>$request->get('title'), 'details' =>$request->get('details'), 'image' => $img_path);

      if (DB::table('posts')->insert($data)) {
        echo "Post successfully created.";
      } else {
        echo "Try again! Post not created";
      }
    }
}

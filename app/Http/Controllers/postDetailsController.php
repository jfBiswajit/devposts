<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class postDetailsController extends Controller
{
    public function show(Request $request) {
      $id = $request->get('id');
      $post = DB::table('posts')->where('id', $id)->first(); 
      return view('postdetails', ['post' => $post]);
    }
}

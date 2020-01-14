<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class indexController extends Controller
{
    public function show() {
      $posts = DB::table('posts')->get();
      return view('index', ['posts' => $posts]);
    }
}

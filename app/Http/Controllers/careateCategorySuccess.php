<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class careateCategorySuccess extends Controller
{
    public function show(Request $request) {
      $data = array('name' => $request->get('category'),  'slug' =>$request->get('slug'));
      $check =  DB::table('categories')->where('name', 'php')->get();

      

      echo "<pre>";
      print_r($check);
    }
}

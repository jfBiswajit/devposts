<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class careateCategorySuccess extends Controller
{
    public function show(Request $request) {
      $data = array('name' => $request->get('category'),  'slug' =>$request->get('slug'));
      $check =  DB::table('categories')->where('name', $request->get('category'))->get();
      
      if (!isset($check[0])) {
        $category = DB::table('categories')->insert($data);
        echo $request->get('category') . ' Successfully added as category.';
      } else {
        echo "Sorry! Category allready exist.";
      }
    }
}

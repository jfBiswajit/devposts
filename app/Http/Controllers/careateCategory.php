<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class careateCategory extends Controller
{
    public function show() {
      return view('createcategory');
    }

    public function showCategory() {
      $allCategories = DB::table('categories')->get();
      return view('show_all_category', ['allCategories' => $allCategories]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class careatePostController extends Controller
{
    public function show() {
      return view('createpost');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tester extends Controller
{
    public function test() {
      echo true ? 'true' : 'false';
    }
}

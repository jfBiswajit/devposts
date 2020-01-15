<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;

class indexController extends Controller
{
    public function show() {
      $timesAgo = function($createdAt) {
        date_default_timezone_set("Asia/dhaka");
        $today = new DateTime();
        $timeDiff = $today->diff(new DateTime($createdAt));

        //  Year-month-day array
        $ymdArr = array('year' => $timeDiff->y, 'month' => $timeDiff->m, 'day' => $timeDiff->d);
        //  Hour:min:sec array
        $hisArr = array('hour' => $timeDiff->h, 'min' => $timeDiff->i, 'sec' => $timeDiff->s);
        //  If year, month, day exist the doesn't check for time
        if (!empty($ymdArr['year'])) {
          return $ymdArr['year'] . ' Year\'s Ago';
        } elseif (!empty($ymdArr['month'])) {
          return $ymdArr['month'] . ' Month Ago'; 
        } elseif ($ymdArr['day'] > 0) {
          return $ymdArr['day'] . ' Day\'s Ago'; 
        } else {
          //  If year, month, day doesn't exist then check for time
          if (!empty($hisArr['hour'])) {
            return $hisArr['hour'] . ' Hour\'s Ago';
          } elseif (!empty($hisArr['min'])) {
            return $hisArr['min'] . ' Min\'s Ago';
          } elseif (!empty($hisArr['sec'] < 60)) {
            return 'Just Now';
          }
        }
      };

      $posts = DB::table('posts')->get();  
      return view('index', ['posts' => $posts, 'timesAgo' => $timesAgo]);
    }
}

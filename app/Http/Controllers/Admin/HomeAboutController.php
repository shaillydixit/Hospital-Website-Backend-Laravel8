<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use Illuminate\Http\Request;

class HomeAboutController extends Controller
{
   public function HomeAbout(){
       $result = HomeAbout::all();
       return $result;
   }
}

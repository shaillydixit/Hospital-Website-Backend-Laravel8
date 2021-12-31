<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
   public function GallaryInfo(){
       $result = Gallary::limit(9)->get();
       return $result;
   }
}

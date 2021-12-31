<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutService;
use Illuminate\Http\Request;

class AboutServiceController extends Controller
{
   public function AboutService(){
       $result = AboutService::limit(6)->get();
       return $result;
   }
}

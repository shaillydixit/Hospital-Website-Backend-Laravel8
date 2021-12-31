<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUsInfo;
use Illuminate\Http\Request;

class AboutUsInfoController extends Controller
{
    public function AboutUsInfo(){
        $result = AboutUsInfo::all();
        return $result;
    }
}

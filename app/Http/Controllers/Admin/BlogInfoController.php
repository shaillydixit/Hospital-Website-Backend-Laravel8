<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogInfo;
use Illuminate\Http\Request;

class BlogInfoController extends Controller
{
    public function BlogInfo(){
        $result = BlogInfo::get();
        return $result;
    }
}

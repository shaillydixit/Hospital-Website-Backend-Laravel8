<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    public function WhatWeDoInfo(){
        $result = WhatWeDo::all();
        return $result;
    }
}

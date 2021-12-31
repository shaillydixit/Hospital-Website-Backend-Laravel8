<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PeopleBelieve;
use Illuminate\Http\Request;

class PeopleBelieveController extends Controller
{
    public function PeopleBelieve(){
        $result = PeopleBelieve::all();
        return $result;
    }
}

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

    public function WhatWeDo(){
        $data = WhatWeDo::all();
        return view('home.whatwedo.what_we_do', compact('data'));
    }

    public function CreateWhatWeDo(Request $request){
        $validate = $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        WhatWeDo::insert([
            'icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->back();
    }

    public function EditWhatWeDo($id){
        $editdata = WhatWeDo::findOrFail($id);
        return view('home.whatwedo.edit_whatwedo', compact('editdata'));
    }

    public function UpdateWhatWeDo(Request $request, $id){
        WhatWeDo::findOrFail($id)->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('whatwedo');
    }

    public function DeleteWhatWeDo($id){
        WhatWeDo::findOrFail($id)->delete();
        return redirect()->back();
    }
}

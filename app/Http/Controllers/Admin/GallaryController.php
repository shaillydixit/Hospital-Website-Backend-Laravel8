<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GallaryController extends Controller
{
   public function GallaryInfo(){
       $result = Gallary::limit(9)->get();
       return $result;
   }

   public function Gallary(){
       $data = Gallary::all();
       return view('about.gallary.gallary', compact('data'));
   }

   public function CreateGallary(Request $request){
       $validate = $request->validate([
        'gallary_image' => 'required'
       ]);

       $image = $request->file('gallary_image');
       $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize(80,80)->save('upload/gallary/'.$name_gen);
       $save_url = 'upload/gallary/'.$name_gen;
       Gallary::insert([
        'gallary_image' => $save_url,
       ]);
       return redirect()->back();
   }

   public function EditGallary($id){
       $editdata = Gallary::findOrFail($id);
       return view('about.gallary.edit_gallary', compact('editdata'));
   }

   public function UpdateGallary(Request $request, $id){
    $old_img = $request->old_image;
    unlink($old_img);
    $image = $request->file('gallary_image');
    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(80,80)->save('upload/gallary/'.$name_gen);
    $save_url = 'upload/gallary/'.$name_gen;

    Gallary::findOrFail($id)->update([
        'gallary_image' => $save_url,
    ]);

    return redirect()->route('gallary');
}

    public function DeleteGallary($id){
        $data = Gallary::findOrFail($id);
        $img = $data->gallary_image;
        unlink($img);

        Gallary::findOrFail($id)->delete();
        return redirect()->back();
    }
}

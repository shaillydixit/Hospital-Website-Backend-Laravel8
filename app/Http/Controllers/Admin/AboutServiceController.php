<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutService;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class AboutServiceController extends Controller
{
   public function AboutService(){
       $result = AboutService::limit(6)->get();
       return $result;
   }

   public function OurServices(){
       $data = AboutService::all();
       return view('about.ourservices.our_services', compact('data'));
   }

   public function CreateOurServices(Request $request){
       $validate = $request->validate([
            'service_image' => 'required',
            'service_name' => 'required',
            'service_link' => 'required',
       ]);

       $image = $request->file('service_image');
       $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
       Image::make($image)->resize(80,80)->save('upload/aboutservices/'.$name_gen);
       $save_url = 'upload/aboutservices/'.$name_gen;

       AboutService::insert([
        'service_image' => $save_url,
        'service_name' => $request->service_name,
        'service_link' => $request->service_link,
       ]);
       return redirect()->back();
   }

   public function EditOurServices($id){
       $editdata = AboutService::findOrFail($id);
       return view('about.ourservices.edit_ourservices', compact('editdata'));
   }

   public function UpdateOurServices(Request $request, $id){
       $old_img = $request->old_image;
       if ($request->file('service_image')) {
           unlink($old_img);
           $image = $request->file('service_image');
           $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(80, 80)->save('upload/aboutservices/'.$name_gen);
           $save_url = 'upload/aboutservices/'.$name_gen;

           AboutService::findOrFail($id)->update([
            'service_image' => $save_url,
            'service_name' => $request->service_name,
            'service_link' => $request->service_link,
           ]);
           return redirect()->route('our.services');
       }else{
        AboutService::findOrFail($id)->update([
            'service_name' => $request->service_name,
            'service_link' => $request->service_link,
           ]);
           return redirect()->route('our.services');
       }
   }

   public function DeleteOurServices($id){
       $data = AboutService::findOrFail($id);
       $image = $data->service_image;
       unlink($image);

       AboutService::findOrFail($id)->delete();
       return redirect()->back();
   }
}

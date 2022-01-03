<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function TestimonialInfo(){
        $result = Testimonial::get();
        return $result;
    }

    public function Testimonials(){
        $data = Testimonial::all();
        return view('services.client.testimonials', compact('data'));
    }

    public function CreateTestimonials(Request $request){
        $validate = $request->validate([
            'client_image' => 'required',
            'client_name' => 'required',
            'client_message' => 'required',
        ]);

        $image = $request->file('client_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(80,80)->save('upload/testimonials'.$name_gen);
        $save_url = 'upload/testimonials'.$name_gen;

        Testimonial::insert([
            'client_image' => $save_url,
            'client_name' => $request->client_name,
            'client_message' => $request->client_message,
        ]);
        return redirect()->back();
    }

    public function EditTestimonials($id){
        $editdata = Testimonial::findOrFail($id);
        return view('services.client.edit_testimonials', compact('editdata'));
    }

    public function UpdateTestimonials(Request $request, $id){
        $old_img = $request->old_image;
        if ($request->file('client_image')) {
            unlink($old_img);
        
            $image = $request->file('client_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(80, 80)->save('upload/testimonials'.$name_gen);
            $save_url = 'upload/testimonials'.$name_gen;
       
            Testimonial::findOrFail($id)->update([
            'client_image' => $save_url,
            'client_name' => $request->client_name,
            'client_message' => $request->client_message,
        ]);
            return redirect()->route('testimonials');
        }else{
            Testimonial::findOrFail($id)->update([
                'client_name' => $request->client_name,
                'client_message' => $request->client_message,
            ]);
                return redirect()->route('testimonials');
        }
    }

    public function DeleteTestimonials($id){
        $data = Testimonial::findOrFail($id);
        $img = $data->client_image;
        unlink($img);

        Testimonial::findOrFail($id)->delete();
        return redirect()->back();
    }
}

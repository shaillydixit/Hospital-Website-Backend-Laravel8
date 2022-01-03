<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUsInfo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutUsInfoController extends Controller
{
    public function AboutUsInfo(){
        $result = AboutUsInfo::all();
        return $result;
    }

    public function AboutUs(){
        $data = AboutUsInfo::all();
        return view('about.aboutus.about_us', compact('data'));
    }

    public function CreateAboutUs(Request $request){
        $validate = $request->validate([
            'about_image1' => 'required',
            'about_title1' => 'required',
            'about_message1' => 'required',
            'about_image2' => 'required',
            'about_title2' => 'required',
            'about_message2' => 'required',
            'button_link' => 'required',
        ]);
        $image1 = $request->file('about_image1');
        $name_gen = hexdec(uniqid()). '.'. $image1->getClientOriginalExtension();
        Image::make($image1)->resize(80, 80)->save('upload/aboutus/'.$name_gen);
        $save_url1 = 'upload/aboutus/'.$name_gen;

        $image2 = $request->file('about_image2');
        $name_gen = hexdec(uniqid()). '.'. $image2->getClientOriginalExtension();
        Image::make($image2)->resize(80, 80)->save('upload/aboutus/'.$name_gen);
        $save_url2 = 'upload/aboutus/'.$name_gen;

        AboutUsInfo::insert([
            'about_image1' => $save_url1,
            'about_title1' => $request->about_title1,
            'about_message1' => $request->about_message1,
            'about_image2' => $save_url2,
            'about_title2' => $request->about_title2,
            'about_message2' => $request->about_message2,
            'button_link' => $request->button_link
        ]);

        return redirect()->back();
    }

    public function EditAboutUs($id){
        $editdata = AboutUsInfo::findOrFail($id);
        return view('about.aboutus.edit_aboutus', compact('editdata'));
    }

    public function UpdateAboutUs(Request $request, $id){
        $old_img1 = $request->old_image1;
        $old_img2 = $request->old_image2;

        if($request->file('about_image1')){
            unlink($old_img1);
            unlink($old_img2);
            $image1 = $request->file('about_image1');
            $name_gen = hexdec(uniqid()). '.'. $image1->getClientOriginalExtension();
            Image::make($image1)->resize(80, 80)->save('upload/aboutus/'.$name_gen);
            $save_url1 = 'upload/aboutus/'.$name_gen;

            $image2 = $request->file('about_image2');
            $name_gen = hexdec(uniqid()). '.'. $image2->getClientOriginalExtension();
            Image::make($image2)->resize(80, 80)->save('upload/aboutus/'.$name_gen);
            $save_url2 = 'upload/aboutus/'.$name_gen;

            AboutUsInfo::findOrFail($id)->update([
                'about_image1' => $save_url1,
                'about_title1' => $request->about_title1,
                'about_message1' => $request->about_message1,
                'about_image2' => $save_url2,
                'about_title2' => $request->about_title2,
                'about_message2' => $request->about_message2,
                'button_link' => $request->button_link
            ]);
            return redirect()->route('about.us');
        }else{
            AboutUsInfo::findOrFail($id)->update([
                'about_title1' => $request->about_title1,
                'about_message1' => $request->about_message1,
                'about_title2' => $request->about_title2,
                'about_message2' => $request->about_message2,
                'button_link' => $request->button_link
            ]);
            return redirect()->route('about.us');
        }
    }

    public function DeleteAboutUs($id){
        $data = AboutUsInfo::findOrFail($id);
        $img1 = $data->about_image1;
        $img2 = $data->about_image2;

        unlink($img1);
        unlink($img2);

        AboutUsInfo::findOrFail($id)->delete();
        return redirect()->back();
    }
}

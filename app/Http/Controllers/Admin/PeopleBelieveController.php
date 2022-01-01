<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PeopleBelieve;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class PeopleBelieveController extends Controller
{
    public function PeopleBelieve()
    {
        $result = PeopleBelieve::all();
        return $result;
    }

    public function MainPeopleBelieve()
    {
        $data = PeopleBelieve::all();
        return view('home.peoplebelieve.people_believe', compact('data'));
    }

    public function CreatePeopleBelieve(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'button_link' => 'required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(80, 80)->save('upload/peoplebelieve/' . $name_gen);
        $save_url = 'upload/peoplebelieve/' . $name_gen;
        PeopleBelieve::insert([
            'image' => $save_url,
            'title' => $request->title,
            'description' => $request->description,
            'button_link' => $request->button_link,
        ]);

        return redirect()->back();
    }

    public function EditPeopleBelieve($id)
    {
        $editdata = PeopleBelieve::findOrFail($id);
        return view('home.peoplebelieve.edit_people_believe', compact('editdata'));
    }

    public function UpdatePeopleBelieve(Request $request, $id)
    {
        $old_img = $request->image;
        if ($request->file('image')) {
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(80, 80)->save('upload/peoplebelieve/' . $name_gen);
            $save_url = 'upload/peoplebelieve/' . $name_gen;

            PeopleBelieve::findOrFail($id)->update([
                'image' => $save_url,
                'title' => $request->title,
                'description' => $request->description,
                'button_link' => $request->button_link,
            ]);

            return redirect()->route('people.believe');
        } else {
            PeopleBelieve::findOrFail($id)->update([
           'title' => $request->title,
            'description' => $request->description,
            'button_link' => $request->button_link,
        ]);
            return redirect()->route('people.believe');
        }
    }

    public function DeletePeopleBelieve($id){
        $pbelieve = PeopleBelieve::findOrFail($id);
        $img = $pbelieve->image;
        unlink($img);

        PeopleBelieve::findOrFail($id)->delete();

        return redirect()->back();
    }
}
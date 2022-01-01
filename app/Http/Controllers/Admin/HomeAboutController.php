<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeAboutController extends Controller
{
   public function HomeAbout(){
       $result = HomeAbout::all();
       return $result;
   }

   public function WelcomeMessage(){
       $data = HomeAbout::all();
       return view('home.welcome.welcome_message', compact('data'));
   }

   public function CreateWelcomeMessage(Request $request){
       $validate = $request->validate([
        'title' => 'required',
        'description' => 'required'
       ]);

       HomeAbout::insert([
        'title' => $request->title,
        'description' => $request->description,
        'created_at' => Carbon::now()
       ]);

       return redirect()->back();
   }

   public function EditWelcomeMessage($id){
       $editdata = HomeAbout::findOrFail($id);
       return view ('home.welcome.edit_welcome', compact('editdata'));
   }

   public function UpdateWelcomeMessage(Request $request, $id){
       HomeAbout::findOrFail($id)->update([
        'title' => $request->title,
        'description' => $request->description,
        'updated_at' => Carbon::now()
       ]);

       return redirect()->route('welcome.message');
   }

   public function DeleteWelcomeMessage($id){
       HomeAbout::findOrFail($id)->delete();
       return redirect()->back();
   }
}

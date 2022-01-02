<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TeamController extends Controller
{
    public function TeamInfo(){
        $result = Team::all();
        return $result;
    }

    public function OurTeam(){
        $data = Team::all();
        return view('home.team.our_team', compact('data'));
    }

    public function CreateOurTeam(Request $request){
        $validate = $request->validate([
            'member_image' => 'required',
            'member_name' => 'required',
            'member_info' => 'required',
            'facebook_link' => 'required',
            'twitter_link' => 'required',
            'skype_link' => 'required',
            'googleplus_link' => 'required',
        ]);
        $image = $request->file('member_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/team/'. $name_gen);
        $save_url = 'upload/team/' . $name_gen;
        Team::insert([
            'member_image' => $save_url,
            'member_name' => $request->member_name,
            'member_info' => $request->member_info,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'skype_link' => $request->skype_link,
            'googleplus_link' => $request->googleplus_link,
        ]);

        return redirect()->back();
    }

    public function EditOurTeam($id){
        $editdata = Team::findOrFail($id);
        return view('home.team.edit_our_team', compact('editdata'));
    }

    public function UpdateOurTeam(Request $request, $id){
       
       $old_img = $request->old_image;
       if($request->file('member_image')){
           unlink($old_img);
           $image = $request->file('member_image');
           $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(300,300)->save('upload/team/'. $name_gen);
           $save_url = 'upload/team/' . $name_gen;
           Team::findOrFail($id)->update([
            'member_image' => $save_url,
            'member_name' => $request->member_name,
            'member_info' => $request->member_info,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'skype_link' => $request->skype_link,
            'googleplus_link' => $request->googleplus_link,
        ]);
        return redirect()->route('our.team');

        }else{
            Team::findOrFail($id)->update([
                'member_name' => $request->member_name,
                'member_info' => $request->member_info,
                'facebook_link' => $request->facebook_link,
                'twitter_link' => $request->twitter_link,
                'skype_link' => $request->skype_link,
                'googleplus_link' => $request->googleplus_link,
            ]);
            return redirect()->route('our.team');
        }   
    }

    public function DeleteOurTeam($id){
        $data = Team::findOrFail($id);
        $image = $data->member_image;
        unlink($image);

        Team::findOrFail($id)->delete();
        return redirect()->back();
    }
}

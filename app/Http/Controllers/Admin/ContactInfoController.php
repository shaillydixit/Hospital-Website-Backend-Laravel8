<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function ContactInfo(){
        $result = ContactInfo::all();
        return $result;
    }

    public function ContactDetails(){
        $data = ContactInfo::all();
        return view('contact.contact_details',compact('data'));
    }

    public function CreateContactDetails(Request $request){
        $validate = $request->validate([
            'address_icon' => 'required',
            'address' => 'required',
            'phone_icon' => 'required',
            'phone_one' => 'required',
            'phone_two' => 'required',
            'email_icon' => 'required',
            'email_one' => 'required',
            'email_two' => 'required',
        ]);

        ContactInfo::insert([
            'address_icon' => $request->address_icon,
            'address' => $request->address,
            'phone_icon' => $request->phone_icon,
            'phone_one' => $request->phone_one,
            'phone_two' => $request->phone_two,
            'email_icon' => $request->email_icon,
            'email_one' => $request->email_one,
            'email_two' => $request->email_two,
        ]);

        return redirect()->back();
    }

    public function EditContactDetails($id){
        $editdata = ContactInfo::findOrFail($id);
        return view('contact.edit_contact', compact('editdata'));
    }

    public function UpdateContactDetails(Request $request, $id){
        ContactInfo::findOrFail($id)->update([
            'address_icon' => $request->address_icon,
            'address' => $request->address,
            'phone_icon' => $request->phone_icon,
            'phone_one' => $request->phone_one,
            'phone_two' => $request->phone_two,
            'email_icon' => $request->email_icon,
            'email_one' => $request->email_one,
            'email_two' => $request->email_two,
        ]);

        return redirect()->route('contact.details');
    }

    public function DeleteContactDetails($id){
        ContactInfo::findOrFail($id)->delete();
        return redirect()->back();
    }
}

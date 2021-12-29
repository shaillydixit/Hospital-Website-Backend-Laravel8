<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        date_default_timezone_set('Asia/Kolkata');
        $contact_date = date("d-m-Y");
        $contact_time = date("h:i:sa");

        $result = Contact::insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'contact_date' => $contact_date,
            'contact_time' => $contact_time
        ]);
        return $result;
    }
}

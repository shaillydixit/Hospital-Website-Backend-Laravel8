<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

/**
* @OA\Post(

 *  path="/api/contact",

 *  summary="Adds user's contact and personal information to the DB",
 *  @OA\RequestBody(
 *      @OA\MediaType(
 *          mediaType = "application/json",
 *          @OA\Schema(
 *              @OA\Property(
 *                  property="name",
 *                  type="string",
 *              ),
 *               @OA\Property(
 *                  property="email",
 *                  type="string",
 *              ),
 *              @OA\Property(
 *                  property="phone",
 *                  type="string",
 *              ),
 *              @OA\Property(
 *                  property="message",
 *                  type="string",
 *              ),
 *              example = {"name": "Jessica Smith", "email": "prashantdixit@gmail.com", "phone": "7905319572", "message": "hemlooooo"},
 *          )
 *      )
 *  ),
 *  @OA\Response(
 *      response=200,
 *      description="Success",
 *      @OA\JsonContent(
 *          @OA\Property(
 *              property="name",
 *              type="string",
 *              example="Jessaaa",
 *          ),
 *          @OA\Property(
 *              property="email",
 *              type="string",
 *              example="ss@g.com",
 *          ),
 *          @OA\Property(
 *              property="phone",
 *              type="string",
 *              example="321893718293",
 *          ),
 *          @OA\Property(
 *              property="message",
 *              type="string",
 *              example="Jasdasasda hasjdhkas hjasdh",
 *          ),
 *          @OA\Property(
 *              property="contact_date",
 *              type="string",
 *              example="12/12/12",
 *          ),
 *          @OA\Property(
 *              property="contact_time",
 *              type="string",
 *              example="11/12/12",
 *          ),
 *      )
 *  ),
 *  @OA\Response(
 *      response=404,
 *      description="Falure/Invalid",
 *      @OA\JsonContent(
 *          @OA\Property(
 *              property="status",
 *              type="integer",
 *              example=0,
 *          ),
 *          @OA\Property(
 *              property="msg",
 *              type="string",
 *              example="fat ke chaar",
 *          ),
 *      )
 *  )
 * )
 */

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

    public function ContactMsg(){
        $data = Contact::all();
        return view('contact.comments.contact_message', compact('data'));
    }

    public function DeleteContactMsg($id){
        Contact::findOrFail($id)->delete();
        return redirect()->back();
    }
}

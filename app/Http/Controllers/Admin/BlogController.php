<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function CommentBlog(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        date_default_timezone_set('Asia/Kolkata');
        $contact_date = date('d-m-Y');
        $contact_time = date('h:i:sa');

        $result = Blog::insert([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'contact_date' => $contact_date,
            'contact_time' => $contact_time
        ]);

        return $result;
     }

     public function BlogComments(){
         $data = Blog::all();
         return view('blog.comments.blog_comment', compact('data'));
     }

     public function DeleteBlogComments($id){
         Blog::findOrFail($id)->delete();
         return redirect()->back();
     }
}

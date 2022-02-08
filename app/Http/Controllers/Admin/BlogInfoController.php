<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogInfo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

    /**
     * Get ALL Blog DATA
     * @OA\Get (
     *     path="/api/bloginfo",
     *     tags={"Blogs"},
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *              @OA\Property(property="blog_image", type="number", example="hsjdhasdhkj"),
     *              @OA\Property(property="blog_title", type="string", example="mera naam hai blog"),
     *              @OA\Property(property="blog_description", type="string", example="kaafi saara description"),
     *              @OA\Property(property="blog_tags", type="string", example="Blog"),
     *              @OA\Property(property="author_name", type="string", example="chacha raseele")
     *         )
     *     )
     * )
     */

class BlogInfoController extends Controller
{
    public function BlogInfo(){
        $result = BlogInfo::get();
        return $result;
    }

    public function Blog(){
        $data = BlogInfo::all();
        return view('blog.blog.blog', compact('data'));
    }

    public function CreateBlog(Request $request){
        $validate = $request->validate([
            'blog_image' => 'required',
            'blog_title' => 'required',
            'blog_description' => 'required',
            'blog_tags' => 'required',
            'author_name' => 'required',
            'author_info' => 'required',
            'author_description' => 'required',
            'author_image' => 'required',
            'blog_date' => 'required',
        ]);
        $image1 = $request->file('blog_image');
        $name_gen = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
        Image::make($image1)->resize(80,80)->save('upload/blog/'.$name_gen);
        $save_url1 = 'upload/blog/'.$name_gen;

        $image2 = $request->file('author_image');
        $name_gen = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
        Image::make($image2)->resize(80,80)->save('upload/blog/'.$name_gen);
        $save_url2 = 'upload/blog/'.$name_gen;

        BlogInfo::insert([
            'blog_image' => $save_url1,
            'blog_title' => $request->blog_title,
            'blog_description' => $request->blog_description,
            'blog_tags' => $request->blog_tags,
            'author_name' => $request->author_name,
            'author_info' => $request->author_info,
            'author_description' => $request->author_description,
            'author_image' => $save_url2,
            'blog_date' => $request->blog_date,
        ]);

        return redirect()->back();
    }

    public function EditBlog($id){
        $editdata = BlogInfo::findOrFail($id);
        return view('blog.blog.blog_edit', compact('editdata'));
    }

    public function UpdateBlog(Request $request, $id){
        $old_img1 = $request->old_image1;
        $old_img2 = $request->old_image2;

    if($request->file('blog_image')){
    unlink($old_img1);
    $image1 = $request->file('blog_image');
    $name_gen = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
    Image::make($image1)->resize(80,80)->save('upload/blog/'.$name_gen);
    $save_url1 = 'upload/blog/'.$name_gen;

    $image2 = $request->file('author_image');
    $name_gen = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
    Image::make($image2)->resize(80,80)->save('upload/blog/'.$name_gen);
    $save_url2 = 'upload/blog/'.$name_gen;

    BlogInfo::findOrFail($id)->update([
        'blog_image' => $save_url1,
        'blog_title' => $request->blog_title,
        'blog_description' => $request->blog_description,
        'blog_tags' => $request->blog_tags,
        'author_name' => $request->author_name,
        'author_info' => $request->author_info,
        'author_description' => $request->author_description,
        'author_image' => $save_url2,
        'blog_date' => $request->blog_date, 
    ]);
        return redirect()->route('blog');

}else if($request->file('author_image')){
    unlink($old_img2);

    $image2 = $request->file('author_image');
    $name_gen = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
    Image::make($image2)->resize(80,80)->save('upload/blog/'.$name_gen);
    $save_url2 = 'upload/blog/'.$name_gen;

    $image1 = $request->file('blog_image');
    $name_gen = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
    Image::make($image1)->resize(80,80)->save('upload/blog/'.$name_gen);
    $save_url1 = 'upload/blog/'.$name_gen;

    BlogInfo::findOrFail($id)->update([
        'blog_image' => $save_url1,
        'blog_title' => $request->blog_title,
        'blog_description' => $request->blog_description,
        'blog_tags' => $request->blog_tags,
        'author_name' => $request->author_name,
        'author_info' => $request->author_info,
        'author_description' => $request->author_description,
        'author_image' => $save_url2,
        'blog_date' => $request->blog_date,
    ]);
    return redirect()->route('blog');           

}else{
    BlogInfo::findOrFail($id)->update([
        'blog_title' => $request->blog_title,
        'blog_description' => $request->blog_description,
        'blog_tags' => $request->blog_tags,
        'author_name' => $request->author_name,
        'author_info' => $request->author_info,
        'author_description' => $request->author_description,
        'blog_date' => $request->blog_date,
    ]);
    return redirect()->route('blog');

}
        
}
    public function DeleteBlog($id){
        $data = BlogInfo::findOrFail($id);
        $img1 = $data->blog_image;
        $img2 = $data->author_image;

        unlink($img1);
        unlink($img2);

        BlogInfo::findOrFail($id)->delete();

        return redirect()->back();
    }
}

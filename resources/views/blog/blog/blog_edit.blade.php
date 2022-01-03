@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Edit Blog Details</h3>
                    <div class="white-box">

                        <form action="{{route('update.blog', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="old_image1" value="{{$editdata->blog_image}}">
                            <input type="hidden" name="old_image2" value="{{$editdata->author_image}}">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Image</label>
                                <input type="file" name="blog_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Title</label>
                                <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1"
                                    value="{{$editdata->blog_title}}"> </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Description</label>
                                <textarea type="text" name="blog_description" class="form-control"
                                    id="exampleInputEmail1">{!!$editdata->blog_description!!}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Tags</label>
                                <input type="text" name="blog_tags" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->blog_tags}}"> </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Author Name</label>
                                <input type="text" name="author_name" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->author_name}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author Info</label>
                                <input type="text" name="author_info" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->author_info}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author Description</label>
                                <textarea type="text" name="author_description" class="form-control"
                                    id="exampleInputEmail1">{!!$editdata->author_description!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author Image</label>
                                <input type="file" name="author_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Date</label>
                                <input type="text" name="blog_date" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->blog_date}}">
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

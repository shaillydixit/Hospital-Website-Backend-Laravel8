@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Blog Details</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Blog Image</th>
                                <th>Blog Title</th>
                                <th>Blog Description</th>
                                <th>Blog Tags</th>
                                <th>Author Name</th>
                                <th>Author Info</th>
                                <th>Author Description</th>
                                <th>Author Image</th>
                                <th>Blog Date</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($data as $msg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{asset($msg->blog_image)}}" alt="" style="width:80px; height:80px;">
                                </td>
                                <td>{{$msg->blog_title}}</td>
                                <td>{{Str::limit($msg->blog_description),50}}</td>
                                <td>{{$msg->blog_tags}}</td>
                                <td>{{$msg->author_name}}</td>
                                <td>{{$msg->author_info}}</td>
                                <td>{{Str::limit($msg->author_description),50}}</td>
                                <td><img src="{{asset($msg->author_image)}}" alt="" style="width:80px; height:80px;">
                                </td>
                                <td>{{$msg->blog_date}}</td>
                                <td class="text-nowrap">
                                    <a href="{{route('edit.blog', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="{{route('delete.blog', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Delete"> <i class="fa fa-trash text-danger"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Add Blog Details</h3>
                    <div class="white-box">

                        <form action="{{route('create.blog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Image</label>
                                <input type="file" name="blog_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Title</label>
                                <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Title"> </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Description</label>
                                <textarea type="text" name="blog_description" class="form-control"
                                    id="exampleInputEmail1"> Write here....</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Tags</label>
                                <input type="text" name="blog_tags" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Tags"> </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Author Name</label>
                                <input type="text" name="author_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author Info</label>
                                <input type="text" name="author_info" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Info"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author Description</label>
                                <textarea type="text" name="author_description" class="form-control"
                                    id="exampleInputEmail1"> Write here....</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Author Image</label>
                                <input type="file" name="author_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Date</label>
                                <input type="text" name="blog_date" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Date">
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

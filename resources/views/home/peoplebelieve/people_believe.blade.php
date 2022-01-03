@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Why People Believe In Us</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Button Link</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($data as $msg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{asset($msg->image)}}" alt="img"></td>
                                <td>{{$msg->title}}</td>
                                <td>{{Str::limit($msg->description), 50}}</td>
                                <td>{{$msg->button_link}}</td>
                                <td class="text-nowrap">
                                    <a href="{{route('edit.people.believe', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="{{route('delete.people.believe', $msg->id)}}" data-toggle="tooltip"
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
                <h3 class="box-title m-b-0">Add Why People Believe In Us</h3>
                    <div class="white-box">
                        
                        <form action="{{route('create.people.believe')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Title"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Your Message"> </textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Button Link</label>
                                <input type="text" name="button_link" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Link"> </div>
                            <button type="submit"
                                class="btn btn-success waves-effect waves-light m-r-10">Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

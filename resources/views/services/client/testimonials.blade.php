@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Client Testimonials</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Client Image</th>
                                <th>Client Name</th>
                                <th>Client Message</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($data as $msg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{asset($msg->client_image)}}" alt="" style="width:80px; height:80px;">
                                </td>
                                <td>{{$msg->client_name}}</td>
                                <td>{{Str::limit($msg->client_message)}}</td>
                                <td class="text-nowrap">
                                    <a href="{{route('edit.testimonials', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="{{route('delete.testimonials', $msg->id)}}" data-toggle="tooltip"
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
                    <h3 class="box-title m-b-0">Add Client Testimonials</h3>
                    <div class="white-box">
                        <form action="{{route('create.testimonials')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Client Image</label>
                                <input type="file" name="client_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Client Name</label>
                                <input type="text" name="client_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name"> </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Client Message</label>
                                <textarea type="text" name="client_message" class="form-control"
                                    id="exampleInputEmail1"> Write here....</textarea>
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

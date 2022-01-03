@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Contact Details</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Address Icon</th>
                                <th>Address</th>
                                <th>Phone Icon</th>
                                <th>Phone One</th>
                                <th>Phone Two</th>
                                <th>Email Icon</th>
                                <th>Email One</th>
                                <th>Email Two</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($data as $msg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$msg->address_icon}}</td>
                                <td>{{Str::limit($msg->address),50}}</td>
                                <td>{{$msg->phone_icon}}</td>
                                <td>{{$msg->phone_one}}</td>
                                <td>{{$msg->phone_two}}</td>
                                <td>{{$msg->email_icon}}</td>
                                <td>{{$msg->email_one}}</td>
                                <td>{{$msg->email_two}}</td>
                                <td class="text-nowrap">
                                    <a href="{{route('edit.contact.details', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="{{route('delete.contact.details', $msg->id)}}" data-toggle="tooltip"
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
                    <h3 class="box-title m-b-0">Add Contact Details</h3>
                    <div class="white-box">
                        <form action="{{route('create.contact.details')}}" method="POST" enctype="multipart/form-data">
                            @csrf 
                           <div class="form-group">
                                <label for="exampleInputEmail1">Address Icon</label>
                                <input type="text" name="address_icon" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Icon"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <textarea type="text" name="address" class="form-control"
                                    id="exampleInputEmail1"> Write here....</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Icon</label>
                                <input type="text" name="phone_icon" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Icon"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Phone One</label>
                                <input type="text" name="phone_one" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Phone Number"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Phone Two</label>
                                <input type="text" name="phone_two" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Phone Number"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Email Icon</label>
                                <input type="text" name="email_icon" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Icon"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Email One</label>
                                <input type="text" name="email_one" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Email"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Email Two</label>
                                <input type="text" name="email_two" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Email"> </div>
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

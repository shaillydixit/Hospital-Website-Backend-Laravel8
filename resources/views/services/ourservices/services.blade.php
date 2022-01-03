@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Services</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Icon</th>
                                <th>Service Name</th>
                                <th>Service Description</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($data as $msg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$msg->icon}}</td>
                                <td>{{$msg->service_name}}</td>
                                <td>{{Str::limit($msg->service_description), 50}}</td>
                                <td class="text-nowrap">
                                    <a href="{{route('edit.services', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="{{route('delete.services', $msg->id)}}" data-toggle="tooltip"
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
                <h3 class="box-title m-b-0">Add Services</h3>
                    <div class="white-box">
                        
                        <form action="{{route('create.services')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Icon</label>
                                <input type="text" name="icon" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Icon"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Name</label>
                                <input type="text" name="service_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Service Name"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Description</label>
                                <textarea type="text" name="service_description" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Your Message"> </textarea>
                                </div>
                              
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

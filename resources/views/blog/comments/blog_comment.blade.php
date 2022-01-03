@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Blog Comments</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Contact Time</th>
                                <th>Contact Date</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($data as $msg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$msg->name}}</td>
                                <td>{{$msg->email}}</td>
                                <td>{{Str::limit($msg->message), 50}}</td>
                                <td>{{$msg->contact_time}}</td>
                                <td>{{$msg->contact_date}}</td>
                                <td class="text-nowrap">
                                    <a href="{{route('delete.comments', $msg->id)}}" data-toggle="tooltip"
                                    data-original-title="Delete"> <i class="fa fa-trash text-danger"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

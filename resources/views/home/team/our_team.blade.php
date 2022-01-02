@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Our Team</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Member Image</th>
                                <th>Member Name</th>
                                <th>Member Info</th>
                                <th>Facebook Link</th>
                                <th>Twitter Link</th>
                                <th>Skype Link</th>
                                <th>Google+ Link</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($data as $msg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{asset($msg->member_image)}}" alt="" style="width:80px; height:80px;">
                                </td>
                                <td>{{$msg->member_name}}</td>
                                <td>{{$msg->member_info}}</td>
                                <td>{{$msg->facebook_link}}</td>
                                <td>{{$msg->twitter_link}}</td>
                                <td>{{$msg->skype_link}}</td>
                                <td>{{$msg->googleplus_link}}</td>
                                <td class="text-nowrap">
                                    <a href="{{route('edit.our.team', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="{{route('delete.our.team', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
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
                    <h3 class="box-title m-b-0">Add Our Team</h3>
                    <div class="white-box">

                        <form action="{{route('create.our.team')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Image</label>
                                <input type="file" name="member_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Name</label>
                                <input type="text" name="member_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name"> </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Info</label>
                                <textarea type="text" name="member_info" class="form-control"
                                    id="exampleInputEmail1"> Write here....</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook Link</label>
                                <input type="text" name="facebook_link" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Link"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Twitter Link</label>
                                <input type="text" name="twitter_link" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Link"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skype Link</label>
                                <input type="text" name="skype_link" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Link"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Google+ Link</label>
                                <input type="text" name="googleplus_link" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Link"> </div>
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

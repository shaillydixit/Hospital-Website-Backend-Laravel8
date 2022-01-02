@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-4">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Edit Our Team</h3>
                    <div class="white-box">

                        <form action="{{route('update.our.team', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{$editdata->member_image}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Image</label>
                                <input type="file" name="member_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Name</label>
                                <input type="text" name="member_name" class="form-control" id="exampleInputEmail1"
                                    value="{{$editdata->member_name}}"> </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Member Info</label>
                                <textarea type="text" name="member_info" class="form-control"
                                    id="exampleInputEmail1"> {!!$editdata->member_info!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook Link</label>
                                <input type="text" name="facebook_link" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->facebook_link}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Twitter Link</label>
                                <input type="text" name="twitter_link" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->twitter_link}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skype Link</label>
                                <input type="text" name="skype_link" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->skype_link}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Google+ Link</label>
                                <input type="text" name="googleplus_link" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->googleplus_link}}"> </div>
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

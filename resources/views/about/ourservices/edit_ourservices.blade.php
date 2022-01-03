@extends('admin.master')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Edit Our Services</h3>
                    <div class="white-box">

                        <form action="{{route('update.our.services', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{$editdata->service_image}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Image</label>
                                <input type="file" name="service_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Name</label>
                                <input type="text" name="service_name" class="form-control" id="exampleInputEmail1"
                                    value="{{$editdata->service_name}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Link</label>
                                <input type="text" name="service_link" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->service_link}}"> </div>
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
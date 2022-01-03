@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Edit Client Testimonials</h3>
                    <div class="white-box">
                        <form action="{{route('update.testimonials', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{$editdata->client_image}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Client Image</label>
                                <input type="file" name="client_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Client Name</label>
                                <input type="text" name="client_name" class="form-control" id="exampleInputEmail1"
                                    value="{{$editdata->client_name}}"> </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Client Message</label>
                                <textarea type="text" name="client_message" class="form-control"
                                    id="exampleInputEmail1"> {!!$editdata->client_message!!}</textarea>
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

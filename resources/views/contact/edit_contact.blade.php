@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Edit Contact Details</h3>
                    <div class="white-box">
                        <form action="{{route('update.contact.details', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf 
                           <div class="form-group">
                                <label for="exampleInputEmail1">Address Icon</label>
                                <input type="text" name="address_icon" class="form-control" id="exampleInputEmail1"
                                    value="{{$editdata->address_icon}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <textarea type="text" name="address" class="form-control"
                                    id="exampleInputEmail1"> {!!$editdata->address!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Icon</label>
                                <input type="text" name="phone_icon" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->phone_icon}}"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Phone One</label>
                                <input type="text" name="phone_one" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->phone_one}}"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Phone Two</label>
                                <input type="text" name="phone_two" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->phone_two}}"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Email Icon</label>
                                <input type="text" name="email_icon" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->email_icon}}"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Email One</label>
                                <input type="text" name="email_one" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->email_one}}"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Email Two</label>
                                <input type="text" name="email_two" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->email_two}}"> </div>
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

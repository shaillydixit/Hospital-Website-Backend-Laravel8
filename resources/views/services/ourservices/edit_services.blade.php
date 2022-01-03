@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="row">
                <h3 class="box-title m-b-0">Edit Services</h3>
                    <div class="white-box">
                        
                        <form action="{{route('update.services', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Icon</label>
                                <input type="text" name="icon" class="form-control" id="exampleInputEmail1"
                                    value="{{$editdata->icon}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Name</label>
                                <input type="text" name="service_name" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->service_name}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Description</label>
                                <textarea type="text" name="service_description" class="form-control" id="exampleInputEmail1"
                                    >{!!$editdata->service_description!!} </textarea>
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

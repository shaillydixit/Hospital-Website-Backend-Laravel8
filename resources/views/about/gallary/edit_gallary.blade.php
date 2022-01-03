@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Edit Gallary</h3>
                    <div class="white-box">

                        <form action="{{route('update.gallary', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{$editdata->gallary_image}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">About Image1</label>
                                <input type="file" name="gallary_image" class="form-control" id="exampleInputEmail1">
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
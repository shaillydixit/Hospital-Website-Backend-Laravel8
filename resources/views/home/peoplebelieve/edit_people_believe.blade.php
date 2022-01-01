@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="row">
                <h3 class="box-title m-b-0">Edit Why People Believe In Us</h3>
                    <div class="white-box">
                        
                        <form action="{{route('update.people.believe', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1"> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                    value="{{$editdata->title}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea type="text" name="description" class="form-control" id="exampleInputEmail1"> {!!$editdata->description!!}</textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Button Link</label>
                                <input type="text" name="button_link" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->button_link}}"> </div>
                            <button type="submit"
                                class="btn btn-success waves-effect waves-light m-r-10">Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

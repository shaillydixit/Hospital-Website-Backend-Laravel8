@extends('admin.master')
@section('content')
<div class="container">
    <div class="white-box">
        <h3 class="box-title m-b-0">Edit Welcome Message</h3>
        <div class="row">
            <div class="white-box">
                <form action="{{route('update.welcome.message', $editdata->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                            value="{{$editdata->title}}"> </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" name="description" class="form-control"
                            id="exampleInputEmail1"> {!!$editdata->description!!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

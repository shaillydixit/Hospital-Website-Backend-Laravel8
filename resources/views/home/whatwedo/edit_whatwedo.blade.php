@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Edit What We Do</h3>
                    <div class="white-box">

                        <form action="{{route('update.whatwedo', $editdata->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Icon</label>
                                <input type="text" name="icon" class="form-control" id="exampleInputEmail1"
                                    value="{{$editdata->icon}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->title}}"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea type="text" name="description" class="form-control" id="exampleInputEmail1">{!!$editdata->icon!!} </textarea>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

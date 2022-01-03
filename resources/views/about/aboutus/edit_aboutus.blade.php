@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-11">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Edit About Us</h3>
                    <div class="white-box">

                        <form action="{{route('update.about.us', $editdata->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image1" value="{{$editdata->about_image1}}">
                            <input type="hidden" name="old_image2" value="{{$editdata->about_image2}}">

                            <div class="form-group">
                                <label for="exampleInputEmail1">About Image1</label>
                                <input type="file" name="about_image1" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">About Title1</label>
                                <input type="text" name="about_title1" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->about_title1}}"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">About Message1</label>
                                <textarea type="text" name="about_message1" class="form-control" id="exampleInputEmail1"
                                  > {!!$editdata->about_message1!!}</textarea>
                                </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">About Image2</label>
                                <input type="file" name="about_image2" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">About Title2</label>
                                <input type="text" name="about_title2" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->about_title2}}"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">About Message2</label>
                                <textarea type="text" name="about_message2" class="form-control" id="exampleInputEmail1"
                                   > {!!$editdata->about_message2!!} </textarea>
                                </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Link</label>
                                <input type="text" name="button_link" class="form-control" id="exampleInputEmail1"
                                value="{{$editdata->button_link}}"> </div>
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
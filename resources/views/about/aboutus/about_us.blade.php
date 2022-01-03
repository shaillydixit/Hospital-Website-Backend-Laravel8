@extends('admin.master')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">About Us</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>About Image1</th>
                                <th>About Title1</th>
                                <th>About Message1</th>
                                <th>About Image2</th>
                                <th>About Title2</th>
                                <th>About Message2</th>
                                <th>Button Link</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($data as $msg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{asset($msg->about_image1)}}" alt="" style="width:80px; height:80px;">
                                </td>
                                <td>{{$msg->about_title1}}</td>
                                <td>{{Str::limit($msg->about_message1), 50}}</td>
                                <td><img src="{{asset($msg->about_image2)}}" alt="" style="width:80px; height:80px;">
                                </td>
                                <td>{{$msg->about_title2}}</td>
                                <td>{{Str::limit($msg->about_message2), 50}}</td>
                                <td>{{$msg->button_link}}</td>
                                <td class="text-nowrap">
                                    <a href="{{route('edit.about.us', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="{{route('delete.about.us', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Delete"> <i class="fa fa-trash text-danger"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Add About Us</h3>
                    <div class="white-box">

                        <form action="{{route('create.about.us')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">About Image1</label>
                                <input type="file" name="about_image1" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">About Title1</label>
                                <input type="text" name="about_title1" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">About Message1</label>
                                <textarea type="text" name="about_message1" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Text"> </textarea>
                                </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">About Image2</label>
                                <input type="file" name="about_image2" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">About Title2</label>
                                <input type="text" name="about_title2" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name"> </div>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">About Message2</label>
                                <textarea type="text" name="about_message2" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Text"> </textarea>
                                </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Button Link</label>
                                <input type="text" name="button_link" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Link"> </div>
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
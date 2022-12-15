@extends('customlayouts.master')
@section('message')
active
@endsection
@section('title')
Message | View
@endsection
@section('page-name')
Message View
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
</li>
<li class="breadcrumb-item" aria-current="page">Message</li>
<li class="breadcrumb-item active" aria-current="page">Message View</li>
@endsection
@section('content')
<div>
    <form method="POST" action="{{ route('message.update', Crypt::encryptString($item->id)) }}" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            <div class="row">
                <div class="col-md-1 col-12">
                    <div class="box-header">
                        <b>
                            <h4 class="box-title text-info" style="margin: -20px;">Send To</h4>
                        </b>
                    </div>
                </div>
                <div class="col-md-11 col-sm-6 col-611col-xl-11 col-lg-11">
                    <div class="area-wrap" style="margin: 12px 0 0 -35px">
                        <select class="form-control select2" name="reciver" id="reciver" style="width: 100%;" disabled>
                            <option value="">Select User</option>
                            @foreach ($users as $row)
                            <option value="{{ $row->id }}" @if($row->id == $item->receiver) selected @endif>{{ $row->username }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-6">
                    <div class="box-header">
                        <b>
                            <h4 class="box-title text-info" style="margin: -20px;">Message Details</h4>
                        </b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <textarea name="message" class="form-control" id="message" cols="200" rows="5" required>{{ $item->message }}</textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="box-header">
                        <b>
                            <h4 class="box-title text-info" style="margin: -20px;">Upload Image</h4>
                        </b>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4 col-sm-4 col-lg-4 col-xl-4 col-md-4">
                    <div class="form-group">
                        <div class="show-image" style="margin: 0px 0px 20px 0px; height: 250px; width: 250px" id="imageOneDB">
                            <img src="{{ asset($item->image_one ?? null) }}" height="250px" width="250px" alt="no record found!">
                        </div>
                        <div class="show-image" style="margin: 0px 0px 20px 0px; height: 250px; width: 250px" id="imageOneRL">
                            <img id="image_one" height="250px" width="250px"/>
                        </div>
                        <label>Image One</label> <br>
                        <input type="file" name="image_one" id="image_one" class="form-control" onchange="imageOne(this);">
                        <div class="error-message text-danger">
                            @if ($errors->has('image_one'))
                            <span class="alert alert-danger">
                                <strong>{{ $errors->first('image_one') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-4 col-xl-4 col-md-4">
                    <div class="form-group">
                        <div class="show-image" style="margin: 0px 0px 20px 0px; height: 250px; width: 250px" id="imageTwoDB">
                            <img src="{{ asset($item->image_two ?? null) }}" height="250px" width="250px" alt="no record found!">
                        </div>
                        <div class="show-image" style="margin: 0px 0px 20px 0px; height: 250px; width: 250px" id="imageTwoRL">
                            <img id="image_two" height="250px" width="250px"/>
                        </div>
                        <label>Image Two</label> <br>
                        <input type="file" name="image_two" class="form-control" id="image_two" onchange="imageTwo(this);">
                        <div class="error-message text-danger">
                            @if ($errors->has('image_two'))
                            <span class="alert alert-danger">
                                <strong>{{ $errors->first('image_two') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-4 col-xl-4 col-md-4">
                    <div class="form-group">
                        <div class="show-image" style="margin: 0px 0px 20px 0px; height: 250px; width: 250px" id="imageThreeDB">
                            <img src="{{ asset($item->image_three ?? null) }}" height="250px" width="250px" alt="no record found!">
                        </div>
                        <div class="show-image" style="margin: 0px 0px 20px 0px; height: 250px; width: 250px" id="imageThreeRL">
                            <img id="image_three" height="250px" width="250px"/>
                        </div>
                        <label>Image Three</label> <br>
                        <input type="file" name="image_three" class="form-control" id="image_three" onchange="imageThree(this);">
                        <div class="error-message text-danger">
                            @if ($errors->has('image_three'))
                            <span class="alert alert-danger">
                                <strong>{{ $errors->first('image_three') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 col-6">
                    <div class="box-header">
                        <b>
                            <h4 class="box-title text-info" style="margin: -20px;">Reply</h4>
                        </b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <textarea name="reply" class="form-control" id="reply" cols="200" rows="5" required>{{ $item->reply }}</textarea>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ route('message.index') }}">
                <button type="button" class="btn btn-danger">Cancel</button>
            </a>
            <button type="submit" class="btn btn-success">Send</button>
        </div>
    </form>
</div>
@endsection

@section('script')

<script>
$("#imageOneDB").show();
$("#imageOneRL").hide();
$("#imageTwoDB").show();
$("#imageTwoRL").hide();
$("#imageThreeDB").show();
$("#imageThreeRL").hide();


function imageOne(input, id) {
    $("#imageOneDB").hide();
    id = id || '#image_one';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        $("#imageOneRL").show();
        
        reader.onload = function (e) {
            $(id)
            .attr('src', e.target.result)
            .width(250)
            .height(250);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
}

function imageTwo(input, id) {
    $("#imageTwoDB").hide();
    id = id || '#image_two';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        $("#imageTwoRL").show();
        reader.onload = function (e) {
            $(id)
            .attr('src', e.target.result)
            .width(250)
            .height(250);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
}

function imageThree(input, id) {
    $("#imageThreeDB").hide();
    id = id || '#image_three';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        $("#imageThreeRL").show();
        reader.onload = function (e) {
            $(id)
            .attr('src', e.target.result)
            .width(250)
            .height(250);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

@endsection
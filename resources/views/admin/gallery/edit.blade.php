@extends('admin.admin_master')
@section('content')
<div class="row">
  <div class="col-8">
    @if (session('success'))
    <span class="alert alert-success">
      {{ section('success') }}
    </span>
    @endif

    <div class="card card-default">
      <div class="card-header card-header-border-bottom">
        <h2>Edit Site Image</h2>
      </div>
      <div class="card-body">
        <div class="form-body">

          <form method="POST" action="{{ url('/admin/site_image/update/'.$photos->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $photos->id }}">
            <input type="hidden" name="old_img" value="{{ $photos->image_name }}">

            <div class="form-group"> <label for="exampleInputEmail1">Image</label>
              <input type="file" class="form-control" name="image"> </div>
            <div class="form-group">
              <div class="controls">
                <label class="control control-checkbox checkbox-primary">Events Gallery
                  <input type="checkbox" id="checkbox_4" name="eventspage" value="Yes" checked="<?php if ($photos->events_page=='Yes') {
                   echo "checked";
                  }?>">
                  <div class="control-indicator"></div>
                </label>

              </div>
              <div class="controls">
                <label class="control control-checkbox checkbox-primary">Main Page
                  <input type="checkbox" id="checkbox_4" name="mainpage" value="Yes" checked="<?php if ($photos->main_page=='Yes') {
                   echo "checked";
                  }?>">
                  <div class="control-indicator"></div>
                </label>

              </div>
              <div class="controls">
                <label class="control control-checkbox checkbox-primary"> Site Gallery
                  <input type="checkbox" id="checkbox_4" name="gallerypage" value="Yes" checked="<?php if ($photos->gallery=='Yes') {
                   echo "checked";
                  }?>">
                  <div class="control-indicator"></div>
                </label>

              </div>


            </div>
            <div class="form-group"> <label for="exampleInputEmail1">Image Description</label> <input type="text"
                class="form-control" name="description" value="{{ $photos->image_description }}" required='true'> </div>


            <button type="submit" class="btn btn-info btn-md" name="submit">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <img src="{{ asset($photos->image_name) }}" alt="" width="300">
      </div>
    </div>
  </div>
</div>


@endsection
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
        <h2>Add Category</h2>
      </div>
      <div class="card-body">
        <div class="form-body">

          <form method="POST" action="{{ url('admin/service/update/'.$service->id) }}" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $service->id }}">
            <input type="hidden" name="old_image" value="{{ $service->service_image}}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Image</label>
              <input type="file" class="form-control" name="simage" >
              
            </div>
            <div class="form-group">
              <img src="{{ asset($service->service_image) }}" width="300" >
              
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Service Name</label>
              <input type="text" class="form-control" name="sname" value="{{ $service->service_title }}" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Service Description</label>
              <input type="text" class="form-control" name="description" value="{{ $service->service_description }}" >
            </div>

            <button type="submit" class="btn btn-info btn-md" name="submit">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
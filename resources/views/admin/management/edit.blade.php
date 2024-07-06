@extends('admin.admin_master')
@section('content')
<div class="row">
  <div class="col-8">
  
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Director Info</h2>
        </div>
        <div class="card-body">
            <div class="form-body">

                <form method="post" action="{{ url('admin/management/update/'.$director->id) }}" role="form" enctype="multipart/form-data"
                    id="eventsform">
                    @csrf
                    <input type="hidden" name="id" value="{{ $director->id }}">
            <input type="hidden" name="old_img" value="{{ $director->director_image }}">

            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="image" value="" required='true'>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Directors Name</label>
                <input type="text" class="form-control" name="dtitle" value="{{ $director->director_name }}" required='true'>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <select name="man_cat" id="man_cat" class="form-control">
                  <option value="">Select one</option>
                  <option value="BOD">Board of Directors</option>
                  <option value="BOT">Board of Trustees</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Directors Position</label>
                <input type="text" class="form-control" name="dpos" value="{{ $director->director_position }}" required='true'>
              </div>

                    <button type="submit" class="btn btn-info btn-md" name="submit">Update</button>
                    <a href="{{ route('management.all') }}" class="btn btn-warning btn-md">Cancel</a>
                </form>
            </div>
        </div>
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body p-auto">
        <img src="{{ asset($director->director_image) }}" alt="" width="300">
      </div>
    </div>
  </div>
</div>


@endsection
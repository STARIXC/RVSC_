@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
  <div class="col-8">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="row">
      <div class="col-md-12">
        <!-- Recent Order Table -->
        <div class="card" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Site Images</h2>

          </div>
          <div class="card-body">
            <table class="table table-striped table-responsive table-bordered">
              <thead>
                <tr>
                  <th class="text-center">S.No</th>
                  <th>Image Name</th>
                  <th class="d-none d-sm-table-cell">Image Description</th>
                  <th class="d-none d-sm-table-cell">Image Preview</th>

                  <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

                </tr>
              </thead>
              <tbody>
                {{-- @php
                            $i=1;
                        @endphp --}}
                @foreach ($images as $item)


                <tr>
                  <td>{{$images->firstItem()+$loop->index }}</td>
                  <td>
                    <a class="text-dark" href="">{{ $item->image_description }}</a>
                  </td>
                  <td class="d-none d-sm-table-cell">{{ $item->image_description }}</td>

                  <td class="d-sm-table-cell"><img src="{{ asset($item->image_name)}}" width="100"></td>
                  <td>
                    {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                  </td>
                  <td class="text-right">
                    <div class="dropdown d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                        <li class="dropdown-item">
                          <a href="{{ url('admin/site_image/edit/'.$item->id) }}">Edit</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="{{ url('admin/softdelete/site_image/'.$item->id )}}">Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $images ->links()}}
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-3">
        <!-- Recent Order Table -->
        <div class="card" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Transed Site Images</h2>

          </div>
          <div class="card-body">
            <table class="table table-striped table-responsive table-bordered">
              <thead>
                <tr>
                  <th class="text-center">S.No</th>
                  <th>Image Name</th>
                  <th class="d-none d-sm-table-cell">Image Description</th>
                  <th class="d-none d-sm-table-cell">Image Preview</th>

                  <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>

                </tr>
              </thead>
              <tbody>
                {{-- @php
                            $i=1;
                        @endphp --}}
                @foreach ($trashedImages as $item)


                <tr>
                  <td>{{$trashedImages->firstItem()+$loop->index }}</td>
                  <td>
                    <a class="text-dark" href="">{{ $item->image_description }}</a>
                  </td>
                  <td class="d-none d-sm-table-cell">{{ $item->image_description }}</td>

                  <td class="d-sm-table-cell"><img src="{{ asset($item->image_name)}}" width="100"></td>
                  <td>
                    {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                  </td>
                  <td class="text-right">
                    <div class="dropdown d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                        <li class="dropdown-item">
                          <a href="{{ url('admin/media/restore/'.$item->id) }}">Restore</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="{{ url('admin/media/delete/'.$item->id )}}">P Delete</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $trashedImages ->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- endtry form --}}
  <div class="col-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Load Single Image</h2>
          </div>
          <div class="card-body">
            <div class="form-body">

              <form method="post" action="{{ route('store.media') }} " enctype="multipart/form-data">
                @csrf
                <div class="form-group"> <label for="exampleInputEmail1">Image</label> <input type="file"
                    class="form-control" name="image" value="" required='true'> </div>
                <div class="form-group">
                  <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" name="mainpage" value="yes"> Main Page
                  </label>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image Type/Category</label>
                  <select class="form-control" name="image_type" required='true'>
                    <option value="">Select One</option>
                    <option value="otherservices">Club View</option>
                    <option value="events">Events</option>
                    <option value="sports">Sports</option>
                    <option value="foodanddrinks">Bar and Catering</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image Description</label>
                  <input type="text" class="form-control" name="description" value="" required='true'>
                </div>


                <button type="submit" class="btn btn-info btn-md" name="submit">Add</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Add Multiple Images to Gallery</h2>
          </div>
          <div class="card-body">
            <div class="form-body">

              <form method="post" action="{{ route('store.multiplemedia') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group"> <label for="exampleInputEmail1">Other Images</label> <input type="file"
                    class="form-control" name="multi_img[]" multiple="" id="multi_img">
                  <div class="row">
                    <div class="col-md-12" id="preview_img"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image Type/Category</label>
                  <select class="form-control" name="image_type" required='true'>
                    <option value="">Select One</option>
                    <option value="otherservices">Club View</option>
                    <option value="events">Events</option>
                    <option value="sports">Sports</option>
                    <option value="foodanddrinks">Bar and Catering</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image Description</label>
                  <input type="text" class="form-control" name="description" value="" required='true'>
                </div>


                <button type="submit" class="btn btn-info btn-md" name="submit">Add</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



{{--  multiple image preview script  --}}
<script type="text/javascript">
  $('#multi_img').on('change', function(){ //on file input change
    if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
    {
        var data = $(this)[0].files; //this file data
         
        $.each(data, function(index, file){ //loop though each file
            if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                var fRead = new FileReader(); //new filereader
                fRead.onload = (function(file){ //trigger function on successful read
                return function(e) {
                    var img = $('<img/>').addClass('thumb m-1').attr('src', e.target.result) .width(80) .height(60); //create image element 
                    $('#preview_img').append(img); //append image to output element
                };
                })(file);
                fRead.readAsDataURL(file); //URL representing the file's data.
            }
        });
         
    }else{
        alert("Your browser doesn't support File API!"); //if File API is absent
    }
 });

</script>
@endsection
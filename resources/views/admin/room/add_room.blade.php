@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="row">
    <div class="col-12">
        @if (session('success'))
        <span class="alert alert-success">
            {{ section('success') }}
        </span>
        @endif

        <div class="card card-default bg-gray-300">
            <div class="card-header card-header-border-bottom">
                <h2>Add {{ $categories->category_name }} Room Details </h2>
            </div>
            <div class="card-body">
                <div class="form-body">

                    <form method="POST" action="{{ route('store.room') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="category_id" id="category_id" value="{{ $categories->id }}">
                        <input type="hidden" name="room_name" id="room_name" value="{{ $categories->category_name }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-sm">
                                    <div class="hotel-room text-center">
                                        <a href="#" class="d-block m-0 thumbnail"><img
                                                src="{{ asset($categories->category_image) }}" alt="room_image"
                                                class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="exampleInputEmail1">Other
                                                    Images</label>
                                                <input type="file" class="form-control" name="multi_img[]" multiple=""
                                                    id="multi_img">

                                            </div>
                                        </div>
                                        <div class="col-md-12" id="preview_img"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    @error('roomdes')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror <label for="exampleInputEmail1">Room Description</label>
                                    <textarea class="ckeditor form-control" name="roomdes"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Room Facility <span class="text-info">(***Please select
                                            the appropriate room Features)</span></label>
                                   
                                        <select class="form-control js-example-basic-multiple" multiple
                                            data-live-search="true" name="roomfac[]" id="roomfac">
    
                                            <option value="Plush pillows and breathable bed linens">Plush pillows and
                                                breathable bed
                                                linens</option>
                                            <option value="Soft oversized bath towels">Soft oversized bath towels</option>
                                            <option value="Full-sized pH-balanced toiletries">Full-sized pH-balanced
                                                toiletries
                                            </option>
                                            <option value="Complimentary refreshments">Complimentary refreshments</option>
                                            <option value="Adequate safety/security">Adequate safety/security</option>
                                            <option value="Internet">Internet</option>
                                            <option value="Comfortable beds">Comfortable beds</option>
                                        </select>
                                  
    
                                </div>
                            </div>
                        </div>


                </div>
                <button type="submit" class="btn btn-info btn-md" name="submit">Add Room</button>

                </form>
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
                      var img = $('<img/>').addClass('thumb m-1').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
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
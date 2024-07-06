@extends('admin.admin_master')
@section('content')
@php
$multImages=DB::table('room_images')->where('room_id',$slug)->get();
// dd($multImages);
@endphp
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="row">
    <div class="col-12">
        @if (session('success'))
        <span class="alert alert-success">
            {{ section('success') }}
        </span>
        @endif
    </div>



    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Room Images <strong>Update</strong></h4>
            </div>

            <div class="card-body">
                <div class="row">
                    @if (count($multImages)==0)
                    <form method="POST" action="{{ route('add-room-image') }}" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $slug }}">
                        <div class="col-md-6">
                            <div class="form-group"> <label for="exampleInputEmail1">Other Images</label> <input
                                    type="file" class="form-control" name="multi_img[]" multiple="" id="multi_img">
                                <div class="row">
                                    <div class="col-md-12" id="preview_img"></div>
                                </div>
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Images">
                                </div>
                            </div>
                        </div>
                    </form>
                    @else
                    @foreach ($multImages as $item)
                    <div class="col-4">
                        <div class="card">

                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="hidden" name="old_img" value="{{ $item->room_image }}">
                            <div class="card-body">
                                <img src="{{ asset($item->room_image ) }}" class="card-img-top">
                                <h5 class="card-title">
                                    <a href="{{ route('room.multiimg.delete',$item->id) }}"
                                        class="btn btn-sm btn-danger mt-1" id="delete" title="Delete Data"><i
                                            class=" mdi mdi-trash-can-outline"></i> </a>
                                </h5>
                                <p class="card-text">
                                    <div class="form-group">
                                        <label class="form-control-label">Change Image <span
                                                class="tx-danger">*</span></label>
                                        <input type="file" class="form-control" name="imagemain" value=""
                                            onchange="mainImageUrl(this)">
                                        <img src="" alt="" class="thumbnail p-1 m-1" id="mainImageThumb">
                                    </div>
                                </p>

                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endif


                </div>
            </div>
        </div>


    </div>

</div> <!-- // end row  -->

<!-- ///////////////// End Start Multiple Image Update Area ///////// -->

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
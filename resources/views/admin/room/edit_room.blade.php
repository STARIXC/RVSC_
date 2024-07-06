@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="row">
    <div class="col-8">
        @if (session('success'))
        <span class="alert alert-success">
            {{ section('success') }}
        </span>
        @endif

        <div class="card card-default bg-gray-300">
            <div class="card-header card-header-border-bottom">
                <h2>Add New Room</h2>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <form method="POST" action="{{ url('room/update/'.$room->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $room->id }}">
                        <input type="hidden" name="slug_old" value="{{ $room->slug }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    @error('roomtype')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1">Room Type or Category</label>
                                    <select type="text" name="roomtype" id="roomtype" value="" class="form-control">
                                        <option value="">Choose Room Type</option>
                                        @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $room->room_type ? 'selected': '' }}>
                                            {{ $item->category_name }}-{{ $item->room_type }}-{{ $item->description }}
                                        </option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    @error('roomname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1">Room Name</label> <input type="text"
                                        class="form-control" name="roomname" value="{{ $room->room_name }}"> </div>
                            </div>
                        </div>


                        <!-- <div class="form-group"> <label for="exampleInputEmail1">Room Size</label> <input type="text" class="form-control" name="roomsize" value="" > </div> -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    @error('maxadult')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror <label for="exampleInputEmail1">Max Adult</label> <input type="text"
                                        class="form-control" name="maxadult" value="{{ $room->max_adult }}"> </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    @error('maxchild')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror <label for="exampleInputEmail1">Max Child</label> <input type="text"
                                        class="form-control" name="maxchild" value="{{ $room->max_child }}"> </div>
                            </div>
                            <div class="col-md-4">


                                <div class="form-group">
                                    @error('nobed')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="exampleInputEmail1">No. of Bed</label> <input type="text"
                                        class="form-control" name="nobed" value="{{ $room->no_of_beds }}"> </div>
                            </div>
                        </div>


                        <div class="form-group">
                            @error('roomdes')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror <label for="exampleInputEmail1">Room Description</label>
                            <textarea type="text" class="form-control" name="roomdes" value="{{  $room->room_desc }}"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Room Facility <span class="text-info">(***Please select the
                                    appropriate room
                                    Features)</span></label>
                            <div class="col-md-12">
                                <select class="form-control js-example-basic-multiple" multiple data-live-search="true"
                                    name="roomfac[]" id="roomfac">

                                    @foreach(explode(',', $facilities) as $string)
                                    <option value="{{$string}}" selected="selected">
                                        {{$string}}</option>

                                    @endforeach



                                    <option value="Plush pillows and breathable bed linens">Plush pillows and breathable
                                        bed
                                        linens</option>
                                    <option value="Soft oversized bath towels">Soft oversized bath towels</option>
                                    <option value="Full-sized pH-balanced toiletries">Full-sized pH-balanced toiletries
                                    </option>
                                    <option value="Complimentary refreshments">Complimentary refreshments</option>
                                    <option value="Adequate safety/security">Adequate safety/security</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Comfortable beds">Comfortable beds</option>
                                </select>
                            </div>

                        </div>


                </div>
                <button type="submit" class="btn btn-info btn-md" name="submit">Add Room</button>


            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Room Main Image <strong>Update</strong></h4>
            </div>

            <input type="hidden" name="id" value="{{ $room->id }}">
            <input type="hidden" name="old_img" value="{{ $room->room_image }}">
            <div class="card-body">
                <img src="{{ asset($room->room_image ) }}" class="card-img-top" style="height: 130px; width: 280px;">
                <p class="card-text">
                    <div class="form-group">
                        <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
                        <input type="file" class="form-control" name="imagemain" value="" onchange="mainImageUrl(this)">
                        <img src="" alt="" class="thumbnail p-1 m-1" id="mainImageThumb">
                    </div>
                </p>

                </form>
            </div>
        </div>


    </div>
</div>

<!-- ///////////////// Start Thambnail Image Update Area ///////// -->


<!-- ///////////////// End Start Thambnail Image Update Area ///////// -->

<script type="text/javascript">
    function mainImageUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainImageThumb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>



@endsection
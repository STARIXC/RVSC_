@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/dist/css/daterangepicker.min.css') }}" rel="stylesheet" type="text/css"
  media="all" />
<link href="{{ asset('frontend/assets/css/booking.css')}}" rel="stylesheet" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.daterangepicker.min.js') }}"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
@php
// $multImages=DB::table('room_images')->where('room_id',$data->slug)->get();
// $booking= $request->session()->get('booking');
@endphp
{{--  <header class="roomsDetailsHero" style="background-image: url('{{ asset($data->category_image)}}') !important;
min-height: 50vh;"> --}}
<header class="roomsDetailsHero"
  style="background-image: url('{{ asset($data->category_image)}}') !important;  min-height: 50vh;">
  <div class="banner">
    <h1>{{ $data->category_name }}</h1>
    <div></div>
    <p></p>
    {{--  <a class="btn-primary" href="/home">return home</a>  --}}
  </div>
</header>

<div class="container pt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="hotel-room text-center">
          <a href="#" class="d-block m-0 thumbnail"><img src="{{ asset($data->category_image) }}" alt="room_image"
              class="img-fluid"></a>
        </div>
      </div>

    </div>
    <div class="col-md-6">
      <div class="row">
        @foreach ($images as $image)
        <div class="col-md-6 pt-2">
          <div class="card shadow-sm">
            <div class="hotel-room text-center">
              <a href="#" class="d-block m-0 thumbnail"><img src="{{ asset($image->room_image) }}" alt="room_image"
                  class="img-fluid"></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="row">

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
          <article class="desc ">
            <h3>details</h3>
            {{ strip_tags($room_details->room_desc) }}
          </article>
          <section class="room-extras">
            <h6>extras </h6>
            <ul class="extras">
              @foreach(explode(',', $facilities) as $string)
              <li>- {{ $string }}</li>

              @endforeach
            </ul>
          </section>
        </div>
        <div class="col-md-6">
          <article class="info">
            <h3>info</h3>
            <h6>price : KES : {{ $data->price}}</h6>
            <h6>capacity : 1 Person /Night</h6>
          </article>
          <article class="info">
            <h6>price : KES : {{ $data->price_double}}</h6>
            <h6>Capacity : 2 Persons / Night</h6>
          </article>

        </div>
      </div>



    </div>

  </div>
</div>
<div class="container p-2">
  <div class="row">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="col-md-12 p-5">
      <div class="wrapper-reserve card">
        <div class="card-header"><i class="fa fa-bed"> </i> Rift Valley Sports Club <span
            class="badge badge-pill badge-primary">Room Reservation Enquiry</span> </div>
        <div class="card-body">
          <form action="{{ route('post.booking') }}" method="post" autocomplete="off">
            @csrf
            <input type="hidden" name="room_id" value="{{ $data->category_name }}">
            <input type="hidden" name="price_one_pax" value="{{ $data->price }}">
            <input type="hidden" name="price_two_pax" value="{{ $data->price_double }}">
            <div class="form-row m-2">
              <div class="col">
                <label for="checkin">Checkin Date</label>
                <input type="text" class="form-control" name="checkin" id="checkin">
                @error('checkin')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col">
                <label for="checkout">Checkin Date</label>
                <input type="text" class="form-control" name="checkout" id="checkout">
                @error('checkout')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

            </div>
            <br />
            <div class="row">

              <div class="col-4">
                <span class="p-3">Number of Guests</span>
              </div>
              <div class="col-3">

                <input type="text" class="form-control col-md-2" name="number_guest" id="number_guest" />
                @error('number_guest')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

            </div>
            <br />
            <h3> <i class="fa fa-user-plus"> : </i>Primary Guest/ Member Details</h3>
            <hr class="b-1" />

            <div class="form-row">
              <div class="col">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" name="first_name">
                @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col">
                <label for="email_address">Email</label>
                <input type="email" class="form-control" name="email_address" id="email_address" />
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              </div>
            </div>
            <div class="form-row ">
              <div class="col">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" name="last_name">
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" name="phone_number">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-row ">
              <div class="col">
                <label for="age">Age</label>
                <input type="text" class="form-control" name="age">
              </div>
              <div class="col">
                <label for="member_number">Member Number</label>
                <input type="text" class="form-control" name="member_number">
              </div>
            </div>
            <div class="form-row ">
              <div class="col-12">
                <label for="special_request">Special request</label>
                <textarea class="form-control" name="special_request"></textarea>
              </div>

              <div class="form-row  pt-3">
                <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Submit"/>

              </div>
          </form>
        </div>

      </div>



    </div>
  </div>
</div>
{{--  end of row  --}}

</div>
{{--  end of container-1  --}}
<script>
  $(function() {
    if ($('#checkin, #checkout').length) {
      // check if element is available to bind ITS ONLY ON HOMEPAGE
      var currentDate = moment().format("DD-MM-YYYY");

      $('#checkin, #checkout').daterangepicker({
        locale: {
          format: 'DD-MM-YYYY'
        },
        "alwaysShowCalendars": true,
        "minDate": currentDate,
        "maxDate": moment().add('months', 2),
        autoApply: true,
        autoUpdateInput: false
      }, function(start, end, label) {
        // console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        // Lets update the fields manually this event fires on selection of range
        var selectedStartDate = start.format('DD-MM-YYYY'); // selected start
        var selectedEndDate = end.format('DD-MM-YYYY'); // selected end

        $checkinInput = $('#checkin');
        $checkoutInput = $('#checkout');

        // Updating Fields with selected dates
        $checkinInput.val(selectedStartDate);
        $checkoutInput.val(selectedEndDate);

        // Setting the Selection of dates on calender on CHECKOUT FIELD (To get this it must be binded by Ids not Calss)
        var checkOutPicker = $checkoutInput.data('daterangepicker');
        checkOutPicker.setStartDate(selectedStartDate);
        checkOutPicker.setEndDate(selectedEndDate);

        // Setting the Selection of dates on calender on CHECKIN FIELD (To get this it must be binded by Ids not Calss)
        var checkInPicker = $checkinInput.data('daterangepicker');
        checkInPicker.setStartDate(selectedStartDate);
        checkInPicker.setEndDate(selectedEndDate);

      });

    } // End Daterange Picker
  });
</script>

@endsection
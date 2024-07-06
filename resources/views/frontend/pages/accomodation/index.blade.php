@extends('frontend.main_master')
@section('content')
<div class="content">
  <header class="roomsHero">
    <div class="banner">
      <h1>Accommodation</h1>
      <div></div>
      <p></p>
      <a class="btn-primary" href="/">return home</a>
    </div>
  </header>
  <div class="section" style="padding-top:60px; padding-bottom:30px; background-color:#edeff2">
    <div class="section_wrapper  container    clearfix">
      <div class="items_group clearfix">
        <div class="column one column_fancy_heading ">
          <div class="section-title">
            <h2 >Our Accomodation</h2>
            <div></div>
          
          </div>
          <div>
            <div class="inside text-center">
              <p>Each facility reflects Rift Valley Sports Club's bold, individual character and is equipped in the
                spirit of Kenya's upmarket lifestyle. Rates are based on a "Bed and Breakfast" meal plan and include
                taxes. They are subject to change without notice.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="roomslist">
    <div class="section-title">
      <h4>Browse rooms</h4>
      <div></div>
    </div>

    <div class="container">
      <div class="row">
        @foreach($rooms as $room)

        <!-- cards services -->
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="hotel-room text-center">
            <a href="accommodation/room-details/{{ $room ->category_name }}" class="d-block mb-0 thumbnail"><img
                src="{{ asset($room->category_image) }}" alt="{{ $room ->category_name }}" class="img-fluid"></a>
            <div class="hotel-room-body">
              <h3 class="heading mb-0"><a
                  href="accommodation/room-details/{{ $room ->category_name }}">{{ $room ->category_name }}</a></h3>
              <strong class="price"> KES: {{ $room ->price }} /1 pax / per night</strong><br />
              <strong class="price"> KES: {{ $room ->price_double }}/2 pax /per night</strong>
            </div>
          </div>
        </div>


        @endforeach
      </div>
    </div>


  </section>

</div>
@endsection
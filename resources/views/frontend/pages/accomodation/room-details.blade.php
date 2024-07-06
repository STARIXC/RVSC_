@extends('frontend.main_master')
@section('content')
<!-- Photos -->
<section id="photoSlider" class="pt-1 mt-15">
  <div class="container">
    <!-- Rooms photos -->

    <div class="room-photo-slider">
      @foreach ($images as $image)
      <!-- Photo -->
      <div class="mb-4 rvsc-item">
        <a href="#" class="glightbox" data-gallery="room-photos-slider" data-glightbox="title: Deluxe Double or Twin Room">
          <figure class="mb-0 image-hover-overlay image-hover-scale">
            <img src="{{ asset($image->room_image) }}" class="img-fluid w-100" alt="">
            <i class="hicon hicon-zoom-bold image-hover-icon fs-4"></i>
          </figure>
        </a>
      </div>
      <!-- /Photo -->
      @endforeach
      <!-- /Rooms photos -->
    </div>
  </div>
</section>
<!-- /Photos -->
<!-- Detail room -->
<section id="detailRoom" class="pb-8 pt-14">
  <div class="container">
    <div class="row">
      <div class=" col-xl-6 col-lg-6">
        <div class="mb-10">
          <!-- Title -->
          <h1 class="mb-8 fw-semibold text-uppercase ff-heading">{{ $data->category_name }}</h1>
          <!-- /Title -->
          <hr>
          <!-- Overview -->
          <div class="mb-8">
            <h2 class="h3 text-uppercase ff-sub ls-1"> Overview </h2>
            <p>{{ $data->description }}</p>
          </div>
          <!-- /Overview -->
          <hr>
          <!-- Room Information -->
          <div class="mb-8">
            <h2 class="h3 text-uppercase ff-sub ls-1"> Room Information </h2>
            <ul class="list-unstyled lh-lg row fw-medium">

              <li class="col-12 col-md-6">
                <i class="hicon hicon-check-valid-state"></i>
                <span>Spacious Layout</span>
              </li>
              <li class="col-12 col-md-6">
                <i class="hicon hicon-check-valid-state"></i>
                <span>View street</span>
              </li>
              <li class="col-12 col-md-6">
                <i class="hicon hicon-check-valid-state"></i>
                <span>Shower </span>
              </li>

              <li class="col-12 col-md-6">
                <i class="hicon hicon-check-valid-state"></i>
                <span> No Smoking</span>
              </li>
              @foreach(explode(',', $facilities) as $string)
              <li class="col-12 col-md-6">
                <i class="hicon hicon-check-valid-state MasterRoom-amenitiesIcon"></i>
                <span>{{ $string }}</span>
              </li>
              @endforeach

            </ul>
          </div>
          <!-- Room Information -->
          <hr>
          <!-- Available Offers -->
          <div class="mb-8">
            <h2 class="h3 text-uppercase ff-sub ls-1"> Available Offers </h2>
            <ul class="list-unstyled row lh-lg fw-medium">
              <li class="col-12 col-lg-6">
                <i class="hicon hicon-check-valid-state small"></i>
                <span>Welcome fresh fruit &amp; cold towels</span>
              </li>
              <li class="col-12 col-lg-6">
                <i class="hicon hicon-check-valid-state small"></i>
                <span>Daily complimentary tea, coffee, water</span>
              </li>
              <li class="col-12 col-lg-6">
                <i class="hicon hicon-check-valid-state small"></i>
                <span>Free wifi high speed</span>
              </li>
              <li class="col-12 col-lg-6">
                <i class="hicon hicon-check-valid-state small"></i>
                <span>Free late check out or early check in</span>
              </li>

            </ul>
          </div>
          <!-- Available Offers -->
          <hr>
          <div class="mb-8">
            <h2 class="h3 text-uppercase ff-sub ls-1">Room Price</h2>
            <article class="col-12 col-lg-6">
              <h6>Price : KES : {{ $data->price}}</h6>
              <h6>Capacity : 1 Person /Night</h6>
            </article>
            <article class="col-12 col-lg-6">
              <h6>Price : KES : {{ $data->price_double}}</h6>
              <h6>Capacity : 2 Persons / Night</h6>
            </article>
          </div>
        </div>
      </div>
      <!-- Book room -->
      <div class=" col-xl-6 col-lg-6">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <!-- Your Information -->
        <div class="ps-xxl-10 ps-xl-8 sticky-top sticky-top-120 mb-10">
          <div class="card shadow-sm border-0">
            <div class="card-body">

              <form class="needs-validation h-100" action="{{ route('post.booking') }}" method="post" autocomplete="off" novalidate="">
                @csrf
                <input type="hidden" name="room_id" value="{{ $data->category_name }}">
                <input type="hidden" name="price_one_pax" value="{{ $data->price }}">
                <input type="hidden" name="price_two_pax" value="{{ $data->price_double }}">
                <!-- Heading -->
                <h2 class="h4 mb-0 text-uppercase ff-sub ls-1">Room Reservation Enquiry</h2>
                <hr>
                <!-- /Heading -->
                <!-- Information -->
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="mb-5">
                      <label class="form-label" for="txtCheckIn">Checking Date<span class="text-danger">*</span></label>
                      <input type="date" class="form-control shadow-sm" id="txtCheckIn" placeholder="" required="" name="check_in">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="mb-5">
                      <label class="form-label" for="txtCheckOut">Check Out Date<span class="text-danger">*</span></label>
                      <input type="date" class="form-control shadow-sm" id="txtCheckOut" required="" name="checkout">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="mb-5">
                      <label class="form-label" for="txtYourFirstname">First Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control shadow-sm" id="txtYourFirstname" placeholder="" required="" name="first_name">
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="mb-5">
                      <label class="form-label" for="txtYourLastname">Last Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control shadow-sm" id="txtYourLastname" placeholder="" required="" name="last_name">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-5">
                      <label class="form-label" for="txtYourEmail">Email<span class="text-danger">*</span></label>
                      <input type="email" class="form-control shadow-sm" id="txtYourEmail" placeholder="" required="" name="email">
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="mb-5">
                      <label class="form-label" for="txtYourPhone">Phone<span class="text-danger">*</span></label>
                      <input type="text" class="form-control shadow-sm" id="txtYourPhone" placeholder="" required="" name="phone">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-5">
                      <label class="form-label" for="txtYourAddress">Address<span class="text-danger">*</span></label>
                      <input type="text" class="form-control shadow-sm" id="txtYourAddress" placeholder="" required="" name="address">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-5">
                      <label class="form-label" for="txtMembernumber">Member Number<span class="text-danger">*</span></label>
                      <input type="text" class="form-control shadow-sm" id="txtMembernumber" placeholder="" required="" name="member_number">
                    </div>
                  </div>
                  <div class="col-12 ">
                    <div class="mb-5">
                      <label class="form-label" for="noGuest">No of Guests<span class="text-danger">*</span></label>
                      <input type="number" class="form-control shadow-sm" id="noGuest" placeholder="0" required="" name="number_guest">

                    </div>
                  </div>
    
                  <div class="col-12">
                    <div class="mb-5">
                      <label class="form-label">Request (Option)</label>
                      <textarea rows="5" class="form-control shadow-sm" placeholder="i.e. Special Requests, etc" name="special_request"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <!-- Next - Back Step -->
                    <div>
                      <button type="submit" class="btn btn-primary">
                        <span>Reserve</span>
                        <i class="hicon hicon-flights-one-ways"></i>
                      </button>
                    </div>
                    <!-- /Next - Back Step -->
                  </div>
                </div>
                <!-- Information -->
              </form>
            </div>
          </div>
        </div>

        <!-- Your Information -->
      </div>

    </div>
  </div>

</section>
<!-- /Detail room -->
<!-- Related room -->
<section id="rooms" class="pt-14 pb-14 bg-body" data-bs-theme="dark">
  <div class="container">
    <!-- Description -->
    <div class="mb-10" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
      <h2 class="text-uppercase">Maybe you are interested</h2>

    </div>
    <!-- /Description -->
    <!-- Rooms List -->

    <div class="room-luxury-slider ">
@foreach ($featured_rooms as $item)
      <!-- Room item -->
      <div class="mb-5 rvsc-item">
        <div class="border-0 card card-overlay-slide text-bg-dark">
          <img src="{{ asset($item->category_image) }}" class="card-img" alt="">
          <div class="card-img-overlay">
            <span class="mb-2 d-block">
              <strong><sup>KES</sup> {{ $item->price }}</strong> <span class="small">/ Night</span>
            </span>
            <h3 class="mb-4 card-title h4 ff-sub text-uppercase fw-semibold ls-2">
              {{ $item->category_name }}</h3>

          </div>
        </div>
      </div>
      <!-- /Room item -->
      @endforeach
 


    </div>

    <!-- /Rooms List -->
  </div>
</section>
<!-- /Related room -->
<!-- Facilities -->

<!-- /Facilities -->



</div>


@endsection
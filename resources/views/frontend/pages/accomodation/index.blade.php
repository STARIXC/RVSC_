@extends('frontend.main_master')
@section('content')
<div class="content">
  <section id="pageTitle" class="image-wrapper bg-image bg-cover bg-overlay bg-overlay-700  text-center pt-28 pb-20" data-image-src="{{ asset('/frontend/assets/images/background/bg2.jpg') }}" data-bs-theme="dark" >
    <div class="bg-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-7 col-lg-9 col-md-11 text-white  ">
            <h1 class="text-uppercase ">Rooms &amp; Suites </h1>
            <p>Each facility reflects Rift Valley Sports Club's bold, individual character and is equipped in the
              spirit of Kenya's upmarket lifestyle. Rates are based on a "Bed and Breakfast" meal plan and include
              taxes. They are subject to change without notice.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="roomsSuites" class="pt-20 pb-24">
    <div class="container">
      <div class="row g-4 g-xl-7 g-xxl-9" data-cues="fadeIn" data-disabled="true">
        @foreach($rooms as $room)
        <div class="col-12 col-xl-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Room item -->
          <div class="card border-0">
            <div class="bg-dark bg-opacity-95 p-3 text-white position-absolute start-0 top-0 mt-4 z-1">
              <strong class="fw-semibold fs-5"><sup>KES</sup> {{ $room ->price }} /1 pax</strong>
              <span class="small fw-medium">/ Night</span>
            </div>
            <a href="accommodation/room-details/{{ $room ->category_name }}" class="d-block card-img-top">
              <figure class="image-hover-overlay image-hover-scale mb-0">
                <img src="{{ asset($room->category_image) }}" class="img-fluid w-100" alt="">
                <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
              </figure>
            </a>
            <div class="card-body bg-body-tertiary">
              <div class="p-0 p-md-2">
                <h3 class="card-title mb-4 h4 text-uppercase ff-sub ls-1 text-body-emphasis"><a href="accommodation/room-details/{{ $room ->category_name }}">{{ $room ->category_name }}</a></h3>
                <p class="card-text mb-6"> 1 King Bed / 2 Single Beds, Breakfast Included</p>
                <!-- <div class="d-flex align-items-center">
                                        <a href="accommodation/room-details/{{ $room ->category_name }}" class="btn btn-outline-primary me-3">
                                            <span>Details</span>
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                        <a href="./reservation.html" class="btn btn-primary">
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Book now</span>
                                        </a>
                                    </div> -->
              </div>
            </div>
          </div>
          <!-- /Room item -->
        </div>
        @endforeach

      </div>
    </div>
  </section>


  <!--/ end  Rooms -->
  <!-- =========Quick Booking====== -->
  <section id="booking" class="image-wrapper bg-image bg-overlay bg-image bg-overlay-800 pt-28 pb-28" data-image-src="/frontend/assets/images/background/bg2.jpg" data-bs-theme="dark" style="background-image: url(&quot;/frontend/assets/images/background/bg2.jpg&quot;);">
            <div class="bg-content">
                <div class="container">
                    <div class="row justify-content-between" data-cues="fadeIn" data-disabled="true">
                        <div class="col-12 col-xl-5 col-lg-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="pb-2 text-body position-relative" data-bs-theme="dark">
                                <!-- Heading -->
                                <div class="mb-8">
                                    <h2 class="text-uppercase ff-heading text-body-emphasis">Book room</h2>
                                    <!-- <p class="fs-5 fw-normal"> Meis iriure id eos, an his wisi labitur. Decore expetenda sed at. Alienum inimicus torquatos mea ad principes. </p> -->
                                </div>
                                <!-- /Heading -->
                                <!-- Contact Info -->
                                <div class="mb-8">
                                    <div class="d-flex align-items-start mb-4">
                                        <div class="fs-3 pe-5 lh-sm">
                                            <i class="hicon hicon-bold hicon-email-envelope"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-medium text-body-emphasis">reservations@rvsc.co.ke</h3>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <div class="fs-3 pe-5 lh-sm">
                                            <i class="hicon hicon-bold hicon-telephone"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-medium text-body-emphasis">+(254) 717-333-799</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Contact Info -->
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
  <!-- =========Facilities========= -->
  <section id="facilitiesAmenities" class=" section-bg pt-14 pb-14">
    <div class="container">
      <!-- Heading -->
      <div class="mb-5 text-center section-title" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
        <h2 class="mb-1 text-uppercase ff-heading">Our Facilities</h2>
        <p class="h-6 fw-medium text-body-secondary ff-sub text-uppercase ls-2">For short or long term
          commitments</p>
      </div>
      <!-- /Heading -->
      <!-- List -->
      <div class="row" data-cues="fadeIn" data-disabled="true">
        <div class="col-12 col-xl-4 col-md-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Item -->
          <div class="mb-5">
            <div class="d-flex align-items-start">
              <div class="fs-1 text-primary pe-5 lh-sm">
                <i class="hicon hicon-wifi"></i>
              </div>
              <div>
                <h3 class="h6 text-uppercase ff-sub ls-1">High Speed Wifi</h3>
                <p>Enjoy high-speed internet access throughout your stay, keeping you connected and productive.
                </p>
              </div>
            </div>
          </div>
          <!-- /Item -->
        </div>
        <div class="col-12 col-xl-4 col-md-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Item -->
          <div class="mb-5">
            <div class="d-flex align-items-start">
              <div class="fs-1 text-primary pe-5 lh-sm">
                <i class="hicon hicon-reception"></i>
              </div>
              <div>
                <h3 class="h6 text-uppercase ff-sub ls-1">Round-the-clock front desk:</h3>
                <p>Our reception is available 24 hours a day, providing assistance and support whenever you need it.
                </p>
              </div>
            </div>
          </div>
          <!-- /Item -->
        </div>
        <div class="col-12 col-xl-4 col-md-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Item -->
          <div class="mb-5">
            <div class="d-flex align-items-start">
              <div class="fs-1 text-primary pe-5 lh-sm">
                <i class="hicon hicon-car-park-onsite"></i>
              </div>
              <div>
                <h3 class="h6 text-uppercase ff-sub ls-1">Ample parking space:</h3>
                <p>Rest assured, we offer plenty of parking spots for your convenience, ensuring hassle-free arrivals and departures.</p>
              </div>
            </div>
          </div>
          <!-- /Item -->
        </div>
        <div class="col-12 col-xl-4 col-md-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Item -->
          <div class="mb-5">
            <div class="d-flex align-items-start">
              <div class="fs-1 text-primary pe-5 lh-sm">
                <i class="hicon hicon-pool"></i>
              </div>
              <div>
                <h3 class="h6 text-uppercase ff-sub ls-1">
                  SWIMMING POOL </h3>
                <p>Dive into our modern swimming pool, designed for both leisure and competitive swimming. Enjoy a refreshing swim or relax by the poolside in our comfortable seating areas </p>
              </div>
            </div>
          </div>
          <!-- /Item -->
        </div>
        <div class="col-12 col-xl-4 col-md-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Item -->
          <div class="mb-5">
            <div class="d-flex align-items-start">
              <div class="fs-1 text-primary pe-5 lh-sm">
                <i class="hicon hicon-fitness-center"></i>
              </div>
              <div>
                <h3 class="h6 text-uppercase ff-sub ls-1">FITNESS CENTER</h3>
                <p>Stay fit and healthy in our state-of-the-art gymnasium, equipped with the latest fitness equipment. Whether you prefer cardio, strength training, or group classes, our gym has everything you need for a complete workout. </p>
              </div>
            </div>
          </div>
          <!-- /Item -->
        </div>

      </div>
      <!-- /List -->
    </div>
  </section>
  <!-- =========End of Facilities========= -->


</div>
@endsection
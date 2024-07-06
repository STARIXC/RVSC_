@extends('frontend.main_master')
@section('content')

<section id="pageTitle" class="image-wrapper bg-image bg-cover  bg-overlay-500 text-body text-center pt-28 pb-28" data-image-src="{{asset('frontend/assets/images/background/sporting-barner.jpg')}}" data-bs-theme="dark">
  <div class="bg-content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-xl-7 col-lg-9 col-md-11">
          <h1 class="text-uppercase text-white">Sporting Facility</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Page Title -->

<div class="content">
  <div data-aos="fade" class="page-title">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Sporting Facility</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->


  <section id="extra-services" class="pt-14 pb-14 bg-body">
    <div class="container">

      <!-- Service list -->
      <div class="row g-5" data-cues="fadeIn" data-disabled="true">
        <div class="col-12 col-xl-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Service item -->
          <div class="card bg-transparent">
            <div class="row g-0">
              <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                <a href="./restaurant.html">
                  <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                    <img src="{{asset('backend/assets/images/sports/cricket.jpg')}}" srcset="{{asset('backend/assets/images/sports/cricket@2x.jpg')}} 2x" class="img-fluid w-100" alt="">
                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                  </figure>
                </a>
              </div>
              <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                <div class="card-body">
                  <h3 class="c h5 text-uppercase ff-sub ls-1">Cricket</h3>
                  <p class="card-text">Ideal location with a cricket pitch to relax and perfect your game.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- /Service item -->
        </div>
        <div class="col-12 col-xl-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Service item -->
          <div class="card ">
            <div class="row g-0">
              <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                <a href="./meetings-events.html">
                  <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                    <img src="{{asset('backend/assets/images/sports/spool-1.jpg')}}" srcset="{{asset('backend/assets/images/sports/spool-1@2x.jpg')}} 2x" class="img-fluid w-100" alt="">
                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                  </figure>
                </a>
              </div>
              <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                <div class="card-body">
                  <h3 class="card-title h5 text-uppercase ff-sub ls-1">Swimming</h3>
                  <p class="card-text"> The swimming pool is a place to relax and unload.</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- /Service item -->
        </div>
        <div class="col-12 col-xl-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Service item -->
          <div class="card bg-transparent">
            <div class="row g-0">
              <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                <div class="card-body">
                  <h3 class="card-title h5 text-uppercase ff-sub ls-1">Squash</h3>
                  <p class="card-text">Modern squash court for casual play and competitive matches.</p>
                </div>
              </div>
              <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                <a href="./tour-categories.html">
                  <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                    <img src="{{asset('backend/assets/images/sports/squash.jpg')}}" srcset="{{asset('backend/assets/images/sports/squash.jpg')}} 2x" class="img-fluid w-100" alt="">
                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <!-- /Service item -->
        </div>
        <div class="col-12 col-xl-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Service item -->
          <div class="card bg-transparent">
            <div class="row g-0">
              <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                <div class="card-body">
                  <h3 class="card-title h5 text-uppercase ff-sub ls-1">Health and Fitness</h3>
                  <p class="card-text">Premium gym, aerobic classes, and relaxing Sauna and Steam Bath.</p>

                </div>
              </div>
              <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                <a href="./airport-transfers.html">
                  <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                    <img src="{{asset('backend/assets/images/sports/gym.jpg')}}" srcset="{{asset('backend/assets/images/sports/gym.jpg')}} 2x" class="img-fluid w-100" alt="">
                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <!-- /Service item -->
        </div>
        <div class="col-12 col-xl-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Service item -->
          <div class="card bg-transparent">
            <div class="row g-0">
              <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                <a href="./restaurant.html">
                  <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                    <img src="{{asset('backend/assets/images/sports/pool_table.jpg')}}" srcset="{{asset('backend/assets/images/sports/pool_table@2x.jpg')}} 2x" class="img-fluid w-100" alt="">
                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                  </figure>
                </a>
              </div>
              <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                <div class="card-body">
                  <h3 class="c h5 text-uppercase ff-sub ls-1">Snooker</h3>
                  <p class="card-text">Enjoy a private snooker room with a bar, perfect for fans of this mind-challenging game.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- /Service item -->
        </div>
        <div class="col-12 col-xl-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Service item -->
          <div class="card ">
            <div class="row g-0">
              <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                <a href="./meetings-events.html">
                  <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                    <img src="{{asset('backend/assets/images/sports/tennis_court.jpg')}}" srcset="{{asset('backend/assets/images/sports/tennis_court@2x.jpg')}} 2x" class="img-fluid w-100" alt="">
                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                  </figure>
                </a>
              </div>
              <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                <div class="card-body">
                  <h3 class="card-title h5 text-uppercase ff-sub ls-1">Tennis Court</h3>
                  <p class="card-text">The club offers a tennis court for those who love the game.</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- /Service item -->
        </div>
        <div class="col-12 col-xl-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
          <!-- Service item -->
          <div class="card bg-transparent">
            <div class="row g-0">
              <div class="col-12 col-xl-6 col-lg-8 col-md-6">
                <div class="card-body">
                  <h3 class="card-title h5 text-uppercase ff-sub ls-1">Children's play ground</h3>
                  <p class="card-text">Rift Valley Sports Club has a children's play ground for those who love to play.</p>
                </div>
              </div>
              <div class="col-12 col-xl-6 col-lg-4 col-md-6">
                <a href="./tour-categories.html">
                  <figure class="image-hover-scale image-hover-overlay rounded mb-0">
                    <img src="{{asset('backend/assets/images/sports/children_playg.jpg')}}" srcset="{{asset('backend/assets/images/sports/children_playg@2x.jpg')}} 2x" class="img-fluid w-100" alt="">
                    <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <!-- /Service item -->
        </div>

      </div>
      <!-- /Service list -->
    </div>
  </section>



  <section id="extras" class="pt-14 pb-14 bg-body extras" data-bs-theme="dark">
    <div class="container section-title aos-init aos-animate">
      <!-- Description -->
      <h2 class="text-uppercase text-white">You May Be Interested In</h2>
    </div>
    <div class="container">
      <div id="image-carousel" class="splide" aria-label="Beautiful Images">
        <div class="splide__track pb-12">
          <ul class="splide__list">
            @foreach ($services as $service)
            <li class="splide__slide">
              <div class="card mb-4 bg-white h-100 me-4" data-aos="zoom-in" data-aos-delay="100" >
                <img src="{{asset($service->service_image)}}" class="card-img-top img-fluid" alt="Sample Image">
                <div class="card-body text-center">
                  <h5 class="card-title">{{ $service->service_title }}</h5>
                  <p class="card-text">{{ $service->service_description }}</p>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>


@endsection

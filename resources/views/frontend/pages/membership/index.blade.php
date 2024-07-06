@extends('frontend.main_master')
@section('content')

<div class="content">

  <!-- Page Title -->
  <div data-aos="fade" class="page-title pt-13" id="pageTitle">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="container section-title aos-init aos-animate">
            <!-- Description -->
            <h2 class="text-uppercase">JOINING THE CLUB</h2>

          </div>
          <div class="col-lg-8">
            <p class="mb-0">Membership to the Club through a nomination by a Member of the Club with not less than five years as Member as a Seconder Member. The candidates should be well known by the two Members and is in a position to fulfill the requirements required by the Club before submitting his/her form.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Membership</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->


  <!-- ======= Membership Section ======= -->
  <section id="membership" class="membership section-bg" data-bs-theme="light">
    <div class="container section-title aos-init aos-animate">
      <!-- Description -->
      <h2 class="text-uppercase"> Membership Category</h2>


    </div>
    <div class="container" data-aos="fade-up">

      <div class="row">
        @foreach ($membership as $item)
        <div class="col-lg-4 col-md-6  mb-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue mb-10">
            <div class="icon mb-4">
              <svg width="150" height="150" viewBox="0 0 700 700" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                </path>
              </svg>
              <img src="{{ asset($item->membership_icon) }}" alt="{{ $item->membership_name}}" class="img-fluid rounded-circle">
            </div>
            <h4>{{ $item->membership_name}}</h4>
            <p><a href="{{ url('membership/'.$item->id) }}">Learn More</a></p>
          </div>
        </div>
        @endforeach


      </div>

    </div>
  </section><!-- End Membership Section -->
  <!-- Call to Action -->
  <section id="video" class="pt-20 text-center image-wrapper bg-image bg-overlay bg-overlay-700 text-body pb-18 " data-bs-theme="dark" style="background-image: url(&quot;/frontend/assets/images/background/bg2.jpg&quot;);">
    <div class="bg-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-7 col-lg-9" data-cues="fadeIn" data-disabled="true">
            <div class="mb-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              <a class="btn-video-play media-glightbox" href="#"><span></span></a>
            </div>
            <h2 class="text-uppercase ff-heading" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              Join the Membership</h2>
            <p class="fs-5 fw-normal" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              <a href="/membership" class="btn btn-primary getstarted"><span>Apply Now</span>
                <i class="hicon hicon-flights-one-ways"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  @endsection
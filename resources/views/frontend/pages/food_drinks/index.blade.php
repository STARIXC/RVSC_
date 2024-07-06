@extends('frontend.main_master')
@section('content')

<section id="pageTitle" class="image-wrapper bg-image bg-cover  bg-overlay-500 text-body text-center pt-28 pb-28" data-image-src="{{asset('frontend/assets/images/background/food-banner.jpg')}}" data-bs-theme="dark" style="background-image: url(&quot;{{asset('frontend/assets/images/background/food-banner.jpg')}}&quot;);">
    <div class="bg-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-7 col-lg-9 col-md-11">
            <h1 class="text-uppercase text-white">Food and Drinks </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Title -->
  <div data-aos="fade" class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="container section-title aos-init aos-animate">
            <!-- Description -->
            <h2 class="text-uppercase">Dine and Wine</h2>
          </div>
          <div class="col-lg-8">
            <p class="mb-0">
            At RVSC offers a diverse selection of experiences across all platforms. Our knowledgeable staff will
                always be happy to advise you on the different options available for a wonderful day at the club.

            </p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Food and Drinks</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

 <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-foodanddrinks">Food & Drinks</li>
            <!-- <li data-filter=".filter-events">Events</li>
            <li data-filter=".filter-sports">Sports</li>
        
            <li data-filter=".filter-otherservices">Others</li> -->
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
        @foreach ($photos as $image)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower(str_replace(' ', '', $image->image_type)) }}">
        <a href="{{ asset($image->image_name)}}" >
        <img src="{{ asset($image->image_name) }}" class="img-fluid" alt="">
         </a>
        </div>
        @endforeach
      </div>
      {{ $photos ->links()}}
    </div>
  </section><!-- End Portfolio Section -->
@endsection
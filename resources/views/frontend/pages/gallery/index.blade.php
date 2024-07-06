@extends('frontend.main_master')
@section('content')

<div class="content">
  <!-- Page Title -->
  <div data-aos="fade" class="page-title pt-13">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="container section-title aos-init aos-animate">
            <!-- Description -->
            <h2 class="text-uppercase">Gallery</h2>

          </div>
          <div class="col-lg-8">
            <p class="mb-0">Discover the rich heritage and vibrant community of Rift Valley Sports Club Nakuru. Established in 1907, we offer top-notch facilities and services for all our members.

          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Gallery</li>
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
            <li data-filter=".filter-events">Events</li>
            <li data-filter=".filter-sports">Sports</li>
            <li data-filter=".filter-foodanddrinks">Food & Drinks</li>
            <li data-filter=".filter-otherservices">Others</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
        @foreach ($images as $image)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower(str_replace(' ', '', $image->image_type)) }}">
          <img src="{{ asset($image->image_name) }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$image->image_type}}</h4>
            <p>{{$image->image_type}}</p>
            <a href="{{ asset($image->image_name) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>

          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Portfolio Section -->


  @endsection
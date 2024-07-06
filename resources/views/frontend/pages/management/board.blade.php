@extends('frontend.main_master')
@section('content')

<div class="content">

  <!-- Page Title -->
  <div data-aos="fade" class="page-title pt-13"  id="pageTitle">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="container section-title aos-init aos-animate">
            <!-- Description -->
            <h2 class="text-uppercase">Board of Management</h2>

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
          <li class="current">About</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg">

    
  <div class="container">

    <div class="row">
      @foreach ( $directors as $item)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up">
          <div class="member-img">
            <img src="{{ asset($item->director_image)}}" alt="{{ $item->director_name }}" class="img-fluid" >
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>{{ $item->director_name }}</h4>
            <span>{{ $item->director_position }}</span>
          </div>
        </div>
      </div>
      @endforeach
   

    </div>

  </div>
</section><!-- End Our Team Section -->
  
</div>
@endsection
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
            <h2 class="text-uppercase">{{ $membership->membership_name }}</h2>

          </div>

        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Membership</li>
          <li> {{ $membership->membership_name }} <i class="ti-link"></i></li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
  <section class="membership-details">
    <div class="container">
      <div class="row align-items-stretch justify-content-between features-item ">
        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
          <img src="{{asset('frontend/assets/images/about/about-1.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
          <h3>{{ $membership->membership_name }}</h3>
          <p>{{ strip_tags($membership->description) }}</p>
        </div>

      </div>
    </div>


  </section>



  <div class="py-5 bg-gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mx-auto lead text-white text-center d-flex flex-column flex-lg-row justify-content-center">
          <span style="font-size: 2rem;">Join membership today </span> <a href="#" target="blank" class="btn-primary text-uppercase  mx-4 my-auto text-white font-weight-bold">
            apply now
          </a>
        </div>
      </div>
    </div>
  </div>



</div>
@endsection
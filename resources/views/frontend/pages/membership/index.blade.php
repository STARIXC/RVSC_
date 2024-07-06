@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" />
<div class="content">

</div>
<div class="content">

  <header class="membershipHero">
 
  </header>



</div>
<section class="p-0">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-8">
        <div class="lead">
          <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
            <li class="breadcrumb-item active"><a href="/membership" class="links">Membership <i
                  class="ti-link"></i></a></li>
          </ol>
        </div>
        <h1 class="text-capitalize font-weight-bold poppins-font">JOINING THE CLUB</h1>
        <div style="background-color: rgb(255 65 54); height: 5px; margin: 15px 0px; width: 100px;"></div>
        <div class="col-12">

          Membership to the Club through a nomination by a Member of the Club with not less than five years as Member as
          a Seconder Member. The candidates should be well known by the two Members and is in a position to fulfill the
          requirements required by the Club before submitting his/her form.

        </div>

      </div>
    </div>
  </div>
</section>
<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center pb-4">
        <h2 class="font-weight-bold poppins-font text-capitalize"><small
            class="d-block font-weight-light text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.04rem;">
            membership
          </small>
          categories
        </h2>
      </div>
    </div>
    <div class="row">

      @foreach ($membership as $item)

      <div class="col-12 col-sm-12 col-md-6 mb-3">
        <div class="d-flex justify-content-start bg-white p-3 shadow-md align-items-center membership-card"><img
            src="{{ asset($item->membership_icon) }}" alt="Individual Membership"
            class="rounded-circle position-relative img-fluid membership-icon">
          <div class="my-auto">
            <h4>{{ $item->membership_name }}</h4> <a href="{{ url('membership/'.$item->id) }}"
              class="links text-orange">
              Learn More&nbsp;<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
      </div>
      @endforeach


    </div>
  </div>
</div>
<div class="py-5 bg-gradient">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mx-auto lead text-white text-center d-flex flex-column flex-lg-row justify-content-center">
        <span style="font-size: 2rem;">Join membership today </span> <a href="#" target="blank"
          class="btn-primary text-uppercase  mx-4 my-auto text-white font-weight-bold">
          apply now
        </a></div>
    </div>
  </div>
</div>
@endsection
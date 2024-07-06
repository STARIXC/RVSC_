@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" />
<div class="content">




</div>
<section class="p-0">
 
    <header class="membershipHero">
       
    </header>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <div class="lead">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
                        <li class="breadcrumb-item"><a href="/membership"
                                class="text-warning">Membership</a></li>
                        <li class="breadcrumb-item active"><a
                                href="/membership/"
                                class="links"> {{ $membership->membership_name }} <i class="ti-link"></i></a></li>
                    </ol>
                </div>
                <h1 class="text-capitalize font-weight-bold poppins-font">{{ $membership->membership_name }}</h1>
               
                <div>
                  {{-- {{!!   !!}} --}}
                  {{ strip_tags($membership->description) }}
                </div>
                
            </div>
        </div>
    </div>
</section>
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
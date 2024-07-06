@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" />

<div class="content">

  <header class="resourcesHero">
   <div class="banner ">
      <h1 class="pt-2">Resources and Downloads</h1>
      
      <p></p>
      
    </div> 
  </header>
  <div class="container py-5">
    <div class="row">
      <div class="col-md-8">
        <div class="lead">
          <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
            <li class="breadcrumb-item active"><a href="/downloads" class="links">Download <i class="ti-link"></i></a></li>
          </ol>
        </div>
        <h1 class="text-capitalize font-weight-bold poppins-font">RVSC Download Resources</h1>
        <div class="mb-3">
          Get all our downloadable resources
        </div>
      </div>
    </div>
  </div>
  @if (count($downloads) > 0)
  <div class="bg-light pt-5">
    <div class="container py-5">
      <div class="row">


        @foreach ($downloads as $download)

        <div class="col-12 col-sm-6 col-md-4 d-flex mb-5">
            <div class="card border-0 shadow-lg">
                {{--  <img src="{{asset($event->event_image) }}" alt="Invitation To Tender"
                class="card-img-top">  --}}
              <div class="card-body d-flex flex-column flex-grow-1 flex-shrink-1">
                <h5 class="text-capitalize font-weight-bold poppins-font">{{ $download->name }} </h5>
                <div class="mt-auto">
                  <p>{{ $download->subject }}</p> <a href="/downloads/{{ $download->id }}"
                    class="links text-primary text-uppercase hvr-forward">
                    Download
                    <i class="fa fa-download"></i></a>
                </div>
              </div>
            </div>
          </div>

        @endforeach

      </div>
    </div>
  </div>


  @else
  <div class="search-result-item sale">
    <!-- <div class="ribbon"><span>Sale</span></div> -->
    <div class="container py-5">
        <div class="row">
            <section class="section-event-single-content">
              <div class="container">
                <div class="row">
                  <div id="primary" class="col-sm-12 col-md-12">
                    <p>We dont have any events at the moment.. check out this page in the near future for updated</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
    </div>
    
</div>
    @endif



@endsection
@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" />

<div class="content">

  <header class="eventsHero">
    {{-- <div class="banner">
      <h1>Events</h1>
      <div></div>
      <p></p>
      <a class="btn-primary" href="/">return home</a>
    </div> --}}
  </header>
  <div class="container mb-2">
    <div class="row">
      <div class="mt-5 col-md-10">
        <div class="lead">
          <ol class="bg-transparent breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
            <li class="breadcrumb-item active"><a href="/news" class="links">News <i class="ti-link"></i></a></li>
          </ol>
        </div>
        <h1 class="text-capitalize font-weight-bold poppins-font">News</h1>
        <div style="background-color: rgb(255 65 54); height: 5px; margin: 15px 0px; width: 100px;"></div>
        {{--  <p class="mb-0">Stay up to date with our all year round events, conferences and trainings...</p>  --}}
      </div>

    </div>
  </div>

  <section class="section-search-content">

    <div class="container">
      <div class="row">
        

          @if (count($events) > 0)
          @foreach ($events as $event)
          <div class="p-4 mb-5 col-12 col-sm-6 col-md-4 d-flex">
            <div class="border-0 shadow-lg card"><img
                src="{{ asset($event->image)}}"
                alt="Invitation To Tender: Sale of School, Office furniture and ICT equipment:" class="card-img-top">
              <div class="card-body d-flex flex-column flex-grow-1 flex-shrink-1"><span
                  class="text-uppercase text-warning-dark">{{ $event->category }}</span>
                
                <div class="mt-auto">
                  <p>{{ $event->expiry_date }}</p> 
                  <a
                    href="/news/{{ $event->news_id }}"
                    class="links text-orange text-uppercase hvr-forward">
                    learn more&nbsp;
                    <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <div class="search-result-item sale">
            <!-- <div class="ribbon"><span>Sale</span></div> -->
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

            @endif



            <div class="search-result-footer">
    

            </div>
          </div>
    
      </div>
  </section>




  <div class="p-5"></div>
</div>

@endsection
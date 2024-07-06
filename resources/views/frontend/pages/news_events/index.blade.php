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
      <div class="col-md-10 mt-5">
        <div class="lead">
          <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
            <li class="breadcrumb-item active"><a href="/events" class="links">Events <i
                  class="ti-link"></i></a></li>
          </ol>
        </div>
        <h1 class="text-capitalize font-weight-bold poppins-font">events</h1>
        <p class="mb-0">Stay up to date with our all year round events, conferences and trainings...</p>
      </div>
      
    </div>
  </div>
  
  <section class="section-search-content">
    
    <div class="container">
      <div class="row">
        <div id="primary" class="container">

          @if (count($events) > 0)
          @foreach ($events as $event)


          <div class="search-result-item sale">
            <!-- <div class="ribbon"><span>Sale</span></div> -->
            <div class="row">
              <div class="search-result-item-info col-sm-9">
                <h3 class="event-title">
                  <a href="#"><strong>{{ $event->event_name }}</strong></a>
                </h3>
              </div>
              <div class="search-result-item-price col-sm-3">
                <span>Price From KSH</span>
                <strong>{{ $event->entrance_fee}}</strong>
                <!-- <a href="https://www.mtickets.com/buy/malumz-on-decks/924">Buy Tickets</a> -->
              </div>
            </div>
            &nbsp;
            <section class="section-event-single-content">
              <div class="container">
                <div class="row">
                  <div id="primary" class="col-sm-12 col-md-12">
                    <div class="event-info">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="event-info-img">
                            <img class="img-thumbnail upcoming-small"
                              src="{{asset($event->event_image) }}" alt="banner" srcset="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="col-sm-12">
                            <div class="event-info-about">
                              <h2>Description</h2>
                              <p> {{ $event->event_description }}</p>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="event-info-about">
                              <h2>Time</h2>
                              <p>
                                From {{ $event->event_from }} on {{ $event->event_date }}
                                to {{$event->event_to }} ,{{ $event->event_date}}
                              </p>
                            </div>
                          </div>
                          <!--  <div class="col-sm-4">
                                <div class="event-info-about">
                                  <h2>Location</h2>
                                  <p>
                                    CAPTAIN&#039;S TERRACE, Nairobi
                                  </p>
                                </div>
                              </div> -->
                          <div class="search-result-item-price col-sm-12">
                            <!-- <a href="https://www.mtickets.com/buy/malumz-on-decks/924">Buy Tickets</a> -->
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
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
      </div>
  </section>




  <div class="p-5"></div>
</div>

@endsection
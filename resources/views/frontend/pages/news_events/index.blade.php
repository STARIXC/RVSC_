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
            <h2 class="text-uppercase">Events</h2>
            <p class="mb-0">Stay up to date with our all year round events, conferences and trainings...</p>
          </div>

        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">Events</li>

        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  
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
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
            <h2 class="text-uppercase">News</h2>

          </div>

        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">News</li>

        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <section class="section-search-content">

    <div class="container">
      <div class="row">

        @if (count($events) > 0)
        @foreach ($events as $event)
        <div class="p-4 mb-5 col-12 col-sm-6 col-md-4 d-flex">
          <div class="border-0 shadow-lg card"><img src="{{ asset($event->image)}}" alt="Invitation To Tender: Sale of School, Office furniture and ICT equipment:" class="card-img-top">
            <div class="card-body d-flex flex-column flex-grow-1 flex-shrink-1"><span class="text-uppercase text-warning-dark">{{ $event->category }}</span>

              <div class="mt-auto">
                <p>{{ $event->expiry_date }}</p>
                <a href="/news/{{ $event->news_id }}" class="links text-orange text-uppercase hvr-forward">
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

</div>

@endsection
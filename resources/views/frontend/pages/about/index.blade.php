@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" />

<div class="content">
  <header class="aboutHero">
    <div class="banner">
      <h1>About Us</h1>
      <div></div>
      <p></p>
      <a class="btn-primary" href="/">return home</a>
    </div>
  </header>

  <section class="p-0">
    <div class="container py-5">
      <div class="row my-5 py-3">
        <div class="col-12 col-sm-7 col-md-6 pb-4">
          <div class="lead">
            <ol class="breadcrumb bg-transparent">
              <li class="breadcrumb-item"><a href="https://rvsc.co.ke" class="text-danger">Home</a></li>
              <li class="breadcrumb-item active"><a href="rvsc.co.ke/about" class="links">About <i
                    class="ti-link"></i></a></li>
            </ol>
          </div>
          <h1 class="text-capitalize font-weight-bold Palatino Linotype">Rift Valley Sport Club Nakuru</h1>
          <div style="background-color: rgb(255 65 54); height: 5px; margin: 15px 0px; width: 100px;"></div>
          <p>
            Rift Valley Sports Club was started in 1907 by a few Englishmen
            after the arrival of the railway in Nakuru town.
          </p>
          <p>
            The Club was initially meant to bring people with common interests
            together and also for the “who is who” in the Country and aimed to
            serve the needs of such groups.
          </p>
          <p>
            The trend has however evolved with the Club opening up for young
            professionals and sports personalities.
          </p>
          <p>
            The Club has since changed from its initial mission to a more
            active role offering a wide range of sporting facilities such as
            international squash courts, international lawn tennis courts,
            modern table tennis, modern snooker tables, international cricket
            pitch, modern swimming pool, basketball pitch and a modern soccer
            ground.
          </p>
        </div>
        <div class="col-12 col-sm-5  col-md-6">
          <div class="pt-5">
            <div id="carouselExampleControls" class="carousel slide p-2" data-ride="carousel">

              <ol class="carousel-indicators">
                @foreach( $photos as $photo )
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                  class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
              </ol>

              <div class="carousel-inner" role="listbox">
                @foreach( $photos as $photo )
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                  <img class="d-block img-fluid rounded shadow-md" src="{{asset($photo->image_name)}}"
                    alt="{{ $photo->image_name }}" width="560" height="315">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
                </div>
                @endforeach
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <div class="d-flex flex-wrap half bg-vision">
    <div class="image-wrap d-none d-sm-none d-lg-block">
      <div class="image bg-mission-vision"
        style="background-image: url({{ asset('frontend/assets/images/vision.jpeg') }});"></div>
    </div>
    <div class="text order-last"><span class="mv-title">vision</span>
      <div class="d-block">
        Our Vision is to be the most efficient, friendly and homely Member’s Club in the Country with
        International
        outlook</div>
    </div>
  </div>
  <div class="d-flex flex-wrap half bg-mission">
    <div class="text"><span class="mv-title">mission</span>
      <div class="d-block">
        To develop and maintain the Club facilities to the highest standards
        in order to provide consistent and quality social events, sporting, recreational
        and hospitality services to our members and their guests. </div>
    </div>
    <div class="image-wrap d-none d-sm-none d-lg-block">
      <div class="image bg-mission-vision"
        style="background-image: url( '{{ asset('frontend/assets/images/mission.jpeg') }}');"></div>
    </div>
  </div>
  <div class="w-100 py-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mx-auto text-center my-5">
          <h2 class="font-weight-bold mb-3 poppins-font"><small class="d-block font-weight-light text-uppercase"
              style="font-size: 0.95rem; letter-spacing: 0.04rem;">
              RVSC
            </small>
            Values
          </h2>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-6 d-none d-sm-none d-md-block">
          <div class="card border-0"><img src="{{ asset('/backend/assets/images/site_content/1704802958907505.jpg') }}" alt=""
              class="card-img-top rounded shadow-lg">
            <div class="card-body p-0">
              <div class="w-75 bg-values text-white mx-auto rounded d-flex shadow-lg pull-up"><span
                  class="m-auto value">Family values</span></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="w-75 mx-auto">
            {{--  <h4 class="d-block d-sm-none d-sm-block d-md-none text-warning-dark value">Unity of Purpose</h4> <span
              class="lead">
              Focusing and working as a team to achieve a common goal.
            </span>  --}}
            <h6 class="text-muted">1) To uphold family values</h6>
            <ul class="list">
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>By being role models to our children through good <br>behavior.
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>By promoting of togetherness in the family unit
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i> By creating activities for all age groups in the family
                thereby
                enhancing bonding
                Club
              </li>

            </ul>

            <h6 class="text-muted">2) To uphold good morals</h6>
            <ul class="list">
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>By discouraging anti-social behaviors like drug abuse,
                improper mode
                of dress, use of abusive language etc.
              </li>

            </ul>

            <h6 class="text-muted">3) To encourage interpersonal relations</h6>
            <ul class="list">
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>By creating an atmosphere where every member and staff
                regardless of race, religion etc feels welcome and appreciated.
              </li>

            </ul>

            <h6 class="text-muted">4) To respect other members and their guests</h6>
            <ul class="list">
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>To be civil in our approach when dealing with other
                members
                and
                their guests.
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>To treat others as we would wish to be treated.
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="my-5"></div>
      <div class="d-block d-sm-none d-sm-block d-md-none mx-auto my-5 bg-dark separator"></div>
      <div class="row align-items-center">
        <div class="col-md-6 ">
          <div class="w-75 mx-auto">
            {{--  <h4 class="d-block d-sm-none d-sm-block d-md-none text-warning-dark value">Passion for Excellence</h4> <span
              class="lead">
              Loving what you do and doing to the best of your knowledge to your satisfaction and that of others
            </span>  --}}
            <h6 class="text-muted">5) To respect the rule of law.</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>To ensure adherence to all laws provided by the Clubs
                      Constitution
                      and those enacted by the state.
                    </li>

                  </ul>

                  <h6 class="text-muted">6) To respect and uphold the club’s constitution and bylaws.</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>By putting in place sanctions to discourage members from
                      violating them.
                    </li>
                  </ul>
                  <h6 class="text-muted">7) To promote fair play, meritocracy and professionalism at all times</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>Developing a good Performance Management System.
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>An effective feedback system that acknowledges one’s
                      performance through merit awards.
                    </li>

                  </ul>
                  <h6 class="text-muted">8) To operate to the highest level of probity, accountability and transparency.
                  </h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>By putting in place systems that ensure good financial
                      management, procurement systems and transparency in all dealings that the Club is involved in.

                    </li>

                  </ul>
          </div>
        </div>
        <div class="col-md-6 d-none d-sm-none d-md-block">
          <div class="card border-0"><img src="{{ asset('backend/assets/images/site_content34d395c99fa8ff984cd30e147848a8731614329901.jpg') }}" alt=""
              class="card-img-top rounded shadow-lg">
            <div class="card-body p-0">
              <div class="w-75 bg-values text-white mx-auto rounded d-flex shadow-lg pull-up">
                <span
                  class="m-auto value">Respect</span>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection



</div>
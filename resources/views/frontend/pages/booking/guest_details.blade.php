@extends('frontend.main_master')

@section('content')
<link href="{{ asset('frontend/assets/css/booking.css')}}" rel="stylesheet" type="text/css" media="all" />

<div class="content">
  <header class="roomsHero">
    <div class="banner">
      <h1>Guest Details</h1>
      <div></div>
      <p></p>
      <a class="btn-primary" href="index.php">return home</a>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-5">
        <!-- <Title title="Get in Touch !!!" /> -->
        <div class="section-title">
          <h4>Guest Details Form !!!</h4>
          <div></div>
        </div>

      </div>

    </div>
    <div class="row">
      @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      @if (!empty(session()->get('booking')))
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pb-5">
        <div class="card card-default">
          <div class="card-body">
            <div class="wrapper-contact animated bounceInLeft">
              <div class="company-info">
                <h4 class="title1">Booking Information</h4>
                <section class="landing">
                  <div class="container">
                    <dl class="row">
                      <dt class="col-sm-6 text-right"><span alt="check_in_date" title="check_in_date">Check-in
                          Date</span>::</dt>
                      <dd class="col-sm-6 text-left">{{ session()->get('booking.checkin') }}</dd>
                    </dl>
                  </div>
                </section>
                <section class="landing">
                  <div class="container">
                    <dl class="row">
                      <dt class="col-sm-6 text-right"><span alt="check_out_date" title="check_out_date">Check-out
                          Date</span>::</dt>
                      <dd class="col-sm-6 text-left">{{ session()->get('booking.checkout') }}</dd>
                    </dl>
                  </div>
                </section>
                <section class="landing">
                  <div class="container">
                    <dl class="row">
                      <dt class="col-sm-6 text-right">
                        <span alt="Adults Count" title="Adults Count">Adults Count</span>:
                      </dt>
                      <dd class="col-sm-6 text-left">
                        {{ session()->get('booking.adult') }}
                      </dd>
                    </dl>
                  </div>
                </section>
                <section class="landing">
                  <div class="container">
                    <dl class="row">
                      <dt class="col-sm-6 text-right">
                        <span alt="Children Count" title="Children Count">Children Count</span>:
                      </dt>
                      <dd class="col-sm-6 text-left">
                        {{ session()->get('booking.child') }}
                      </dd>
                    </dl>
                  </div>
                </section>
                <section class="landing">
                  <div class="container">
                    <dl class="row">
                      <dt class="col-sm-6 text-right">
                        <span alt="Currency" title="Currency">Currency</span>:
                      </dt>
                      <dd class="col-sm-6 text-left">
                        Kenyan Shilling
                      </dd>
                    </dl>
                  </div>
                </section>
                <h4 class="title1">Bed and Breakfast (W) </h4>
                <section class="landing">
                  <div class="container">
                    <dl class="row">
                      <dt class="col-sm-9 "><span alt="check_in_date" title="check_in_date">Room </span>::</dt>
                      <dd class="col-sm-3 text-left">{{ session()->get('booking.room-name')  }}</dd>
                    </dl>
                  </div>
                </section>
                <section class="landing">
                  <div class="container">
                    <dl class="row">
                      <dt class="col-sm-9 "><span alt="check_in_date" title="check_in_date">Average Daily Rate
                        </span> :</dt>
                      <dd class="col-sm-3 text-left">{{ number_format(session()->get('booking.room-price'),2)  }}</dd>
                    </dl>
                  </div>
                </section>
                <h4 class="title1">Total Cost </h4>
                <section class="landing">
                  <div class="container">
                    <dl class="row">
                      <dt class="col-sm-8 "><span alt="check_in_date" title="check_in_date">Total Charge:</span>::
                      </dt>
                      <dd class="col-sm-4 text-left">{{ number_format(session()->get('booking.room-price'),2)  }}</dd>
                    </dl>
                  </div>
                </section>
                <section class="landing">
                  <div class="container">
                    <dl class="row">
                      <dt class="col-sm-8 "><span alt="Total" title="Total">Total </span>:</dt>
                      <dd class=" col-sm-4 text-left text-muted">
                        {{ number_format(session()->get('booking.room-price'),2)  }} </dd>
                    </dl>
                  </div>
                </section>




              </div>
              <div class="contact">

                <form action="{{ route('post.booking') }}" method="post">
                  @csrf
                  <p>
                    <label>Full Name <span style="color:red;">*</span></label>
                    <input type="text" name="customer-name" class="feedback-input" placeholder="Name" required />
                  </p>
                  <p>
                    <label>Email <span style="color:red;">*</span></label>
                    <input type="email" name="customer-email" class=" feedback-input" id="email" placeholder="Email"
                      required />
                  </p>
                  <p>
                    <label>Phone</label>
                    <input type="number" name="phone" class="feedback-input" placeholder="0700000000" min="10"
                      required />
                  </p>
                  <p>
                    <label>Address</label>
                    <input type="text" name="address" class="feedback-input"
                      placeholder="Enter your Address full address i.e. 74-20100, Nakuru" required />
                  </p>
                  <p>
                    <label>City</label>
                    <input type="text" name="city" class="feedback-input" placeholder="Enter your city of residence"
                      required />
                  </p>
                  <p>
                    <label>County/Region</label>
                    <input type="text" name="region" class="feedback-input" placeholder="Enter your County of residence"
                      required />
                  </p>
                  <p>
                    <label>Country</label>
                    <input type="text" name="country" class="feedback-input" placeholder="Please enter your Country"
                      required />
                  </p>
                  <p>
                    <label>ZIP/Postal Code</label>
                    <input type="text" name="postal-code" class="feedback-input"
                      placeholder="Please enter your Zip/Postal Code" required />
                  </p>
                  <p class="full">
                    <label>Special Requests</label>
                    <textarea name="special-requests" rows="5" class="feedback-input"
                      placeholder="Enter your Message Here" ></textarea>
                  </p>
                  <p class="full">
                    <span>Rift Valley Sports Club Nakuru Reservation Policy</span>
                  </p>
                  <p class="full">
                    By Clicking 'Book Now' Below, I Agree With The Rift Valley Sports Club Nakuru <span
                      alt="'s Reservation Policy and" title="'s Reservation Policy and">'s Reservation Policy
                      and</span> <a href="#" data-toggle="modal" data-target="#policy_modal">
                      Terms And Conditions<br>
                    </a>

                  </p>
                  <p class="full">
                    <button name="submit" type="submit">
                      Book Now
                    </button>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @else

  <!--For Row containing all card-->
  <div class="search-result-item sale">
    <!-- <div class="ribbon"><span>Sale</span></div> -->
    <div class="row">
      <section class="section-event-single-content">
        <div class="container">
          <div class="row">
            <div id="primary" class="col-sm-12 col-md-12">
              <p>Please Click on the Button Bellow to start the booking process.</p>
              <a href="/restart/booking" class="btn btn-md btn-primary">Restart Booking</a>
            </div>
          </div>
        </div>
      </section>
    </div>


  </div>

  @endif

</div>

@endsection
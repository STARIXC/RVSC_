@extends('frontend.main_master')

@section('content')

<div class="content">
    <header class="roomsHero">
        <div class="banner">
            <h1>Select Room</h1>
            <div></div>
            <p></p>
            <a class="btn-primary" href="index.php">return home</a>
        </div>
    </header>

    <section class="roomslist">


        <div class="container">


            <div class="card p-3">
                <div class="card-heading">
                  <h4>Thank you for your booking request</h4>
                  <hr class="b-1">

                </div>
                <div class="card-body">
                  <div class="bg">
                    <!--For Row containing all card-->
                    <div class="search-result-item sale">
                        <!-- <div class="ribbon"><span>Sale</span></div> -->
                        <div class="row">
                          <section class="section-event-single-content">
                            <div class="container">
                              <div class="row">
                                <div id="primary" class="col-sm-12 col-md-12">
                                  <p>We are processing your booking. Please check your email for a booking confirmation from the club</p>
                                  <p>(Please note, you should hear back within 5 Hours, if you still havent recieved a confirmation please contact our customer support team on +254700000000).</p>
                                  <p>To go back to the Home page  <a href="/">Click Here</a>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>


                </div>
                </div>


            </div>
    </section>


</div>

@endsection
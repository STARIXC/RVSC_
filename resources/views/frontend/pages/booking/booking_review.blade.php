@extends('frontend.main_master')

@section('content')
<link href="{{ asset('frontend/assets/css/booking.css')}}" rel="stylesheet" type="text/css" media="all" />

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
                <div class="bg">
                    <!--For Row containing all card-->
                    <div class="row mainRow">
                        <!--Card 1-->
@if (!empty(session()->get('booking')))
<div class="col-md-4 ">
    <div class="booking-side-wrapper">
        <h4 class="title1">Booking Information</h4>
        <!--Card Body-->

        <div class="mb-1 review">
           
                    <ul>
                        <li>Check In: {{ session()->get('booking.checkin') }} </li>
                        <li>Check Out: {{ session()->get('booking.checkout') }}</li>
                        <li>No of Room:
                            {{ session()->get('booking.room-selection')  }}</li>
                        <li><span class="booking-guests-wrapper">Guests: </span></li>
                        <li>
                            Adult Count: {{ session()->get('booking.adult') }}
                            
                        </li>
                        <li> 
                                Children Count : {{ session()->get('booking.child') }} 
                            
                        </li>
                    </ul>

        </div>
        <!--Card footer-->

    </div>
</div>
<!--Card 2-->
<div class="col-xs-12 col-md-8">
    <form action="{{ route('post.booking') }}" method="post" autocomplete="off">
        @csrf
        <div class="booking-main-wrapper">

            <h4 class="title1">Review Details</h4>
            
            <table class="table">
                <tr>
                    <td>Name:</td>
                    <td><strong>{{ session()->get('booking.customer-name') }}</strong></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><strong>{{ session()->get('booking.customer-email')}}</strong></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><strong>{{ session()->get('booking.phone')}}</strong></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><strong>{{ session()->get('booking.address')}} ,
                            {{ session()->get('booking.city')}}
                            -{{ session()->get('booking.postal-code')}}</strong></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><strong>{{ session()->get('booking.address')}} ,
                            {{ session()->get('booking.city')}}
                            -{{ session()->get('booking.postal-code')}}</strong></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><strong>{{ session()->get('booking.address')}} ,
                            {{ session()->get('booking.city')}}
                            -{{ session()->get('booking.postal-code')}}</strong></td>
                </tr>

            </table>
            <div class="price-details">

                <p class="deposit-notice">Price Per Day Per Room</p>
                <h4 class="deposit-price">KES:
                    {{ number_format(session()->get('booking.room-price'),2) }}</h4>

                <hr class="total-separator">
                <p class="total-notice">Total Price</p>
                <h4 class="total-price">KES:
                    {{ number_format(session()->get('booking.room-price'),2)  }}
                </h4>
                <!-- <p class="pricebreakdown-button"><a href="#pricebreakdown" data-gal="prettyPhoto">Detailed Price Breakdown</a></p> -->

                <!-- BEGIN .pricebreakdown -->
                <div id="pricebreakdown" class="pricebreakdown">

                    <div class="lightbox-title">
                        <h4>Price Breakdown</h4>
                    </div>

                    <!-- BEGIN .lightbox-content -->
                    <div class="lightbox-content">

                        <table>
                            <tbody>
                                <tr>
                                    <th>Total Price</th>
                                </tr>
                                <tr>
                                    <td>KES: {{ session()->get('booking.room-price')  }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- END .lightbox-content -->
                    </div>

                    <!-- END .pricebreakdown -->
                </div>

                <!-- END .price-details -->
            </div>
            <a type="button" href="/booking/available_rooms" class="btn btn-warning">Back to Select Room</a>
            <a type="button" href="/guest/personal_info" class="btn btn-warning">Back to Guest Details Form</a>
            <a type="button" href="/restart/booking" class="btn btn-warning">Restart Booking</a>
            <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</form>

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



            </div>
    </section>


</div>

@endsection
@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/css/booking.css')}}" rel="stylesheet" type="text/css" media="all" />
@php
$rooms = DB::table('rooms')
->join('categories', 'categories.id', '=', 'rooms.room_type')
->select('rooms.*', 'categories.price','categories.category_name')
->paginate(6);

@endphp
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
                        <div class="col-sm-12 col-md-4 ">
                            <div class="booking-side-wrapper">
                                <h4 class="title1">Your Reservation</h4>
                                <!--Card Body-->
                                <div class="mb-1">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <ul>
                                                <li>Check In: {{ session()->get('booking.checkin') }} </li>
                                                <li>Check Out: {{ session()->get('booking.checkout') }}</li>
                                            </ul>

                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="guest-2-cols">
                                                <h4 class="title1">
                                                    <ul>
                                                        <li><span>No of Room:
                                                            </span>{{ session()->get('booking.room-selection')  }}</li>
                                                        <li><span>Guests: </span>
                                                            <span class="booking-guests-wrapper">
                                                                <span>Adult: {{ session()->get('booking.adult') }}
                                                                    <span>,</span>
                                                                </span>
                                                            </span>
                                                            <span class="booking-guests-wrapper">
                                                                <span>Child:
                                                                    {{ session()->get('booking.child') }}<span></span>
                                                                </span>
                                                            </span>
                                                        </li>


                                                    </ul>



                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--Card footer-->
                            </div>
                        </div>
                        <!--Card 2-->
                        <div class="col-xs-12 col-sm-8">

                            <!--Card image-->
                            <div class="booking-main-wrapper">
                                @foreach ($rooms as $item)


                                <div class="row">
                                    <div class="col-5">

                                        <div class="room-booking-image-holder">
                                            <img src="{{  asset($item->room_image)}}" title=""
                                                class="room-booking-image-holder-img" />
                                        </div>
                                    </div>
                                    <div class="col-7">

                                        <form name="book" method="POST" action="{{ route('post.room')}}">
                                            @csrf
                                            <!-- keeps the original check-in, check-out date, and # of rooms populated between pages-->
                                            <!-- even though they aren't used in the program in any other way -->
                                            <input type="hidden" value="{{ $item->id }}" name="room_id" />
                                            <input type="hidden" value="{{ $item->price }}" name="room_price" />
                                            <input type="hidden" value="{{ $item->category_name }}" name="room_name" />
                                            <p><strong>Room Type: </strong>{{ $item->category_name }}<br />
                                                <strong>Max Adults:</strong> {{ $item->max_adult }},<br />
                                                <strong>Max Children:</strong> {{ $item->max_child }}<br />
                                                <strong>Rate per Night: </strong>{{ $item->price }}
                                            </p>

                                            <input type="submit" class="form-control btn btn-primary btn-sm"
                                                name="btnbook" value="Book Now!" />
                                        </form>

                                    </div>


                                    <!-- END .rooms-wrapper -->
                                </div>

                                @endforeach
                            </div>




                        </div>
                    </div>
                </div>




            </div>



        </div>
    </section>


</div>
@endsection
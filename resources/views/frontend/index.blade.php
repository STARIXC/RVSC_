@extends('frontend.main_master')
@section('css')
{{-- <link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" /> --}}
<link href="{{ asset('frontend/assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/assets/css/owl.theme.default.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')

<div class="content">
    <!--
    ####################################################
    C A R O U S E L
    ####################################################
    -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
        @foreach( $photos as $photo )
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach( $photos as $photo )
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img class="d-block w-100" src="{{asset($photo->image_name)}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                {{-- <h5>My Caption Title (1st Image)</h5>
                <p>The whole caption will only show up if the screen is at least medium size.</p> --}}
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    <!-- /.carousel -->

    <!-- /.container -->
    <section class="services">
        <div class="section-title">
            <h4>Services</h4>
            <div></div>
        </div>
        <div class="services-center">
            <div class="row">


                @foreach ($services as $service)

                <!-- cards services -->

                <div class="col-lg-6 col-xl-4">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded card">
                        <img alt="..." class="card-img-top" src="{{ asset($service->service_image) }}">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold font-size-lg">{{ $service->service_title }}
                            </h5>
                            <p class="card-text">{{ $service->service_description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- featured Rooms -->
    <section class="featured-rooms">

        <div class="container">
            <div class="section-title">
                <h4>Featured Rooms</h4>
                <div></div>
            </div>
            <div class="row">

            <div class="owl-carousel owl-theme owl-room">
                
                @foreach ($frooms as $room)
               
                <div class="item col-md-6 col-lg-12 mb-5 shadow-sm ">
                    
                        <div class="hotel-room text-center">
                            <a href="accommodation/room-details/{{ $room ->category_name }}" class="d-block mb-0 thumbnail"><img
                                    src="{{ asset($room->category_image) }}" alt="{{ $room ->category_name }}"
                                    class="img-fluid"></a>
                            <div class="hotel-room-body">
                                <h3 class="heading mb-0"><a
                                        href="accommodation/room-details/{{ $room ->category_name }}">{{ $room ->category_name }}</a></h3>
                                <strong class="price"> KES: {{ $room ->price }} /1PX/ per night</strong><br/>
                                <strong class="price"> KES: {{ $room ->price_double }} /2PX/ per night</strong>
                            </div>
                        </div>
                    </div>
                
                @endforeach
            </div>
       



        </div>
</div>

</section>

<header class="pimg2">
    <div class="banner ptext">
        <span class="border trans py-2">Book a Stay</span>
        <p class="py-2"> <span style="font-size: 1rem;">EXPERIENCE A GOOD STAY, ENJOY FANTASTIC SERVICE</span>

        </p>
        <a href="/accommodation" class="btn btn-blue btn-lg">BOOK NOW</a>
    </div>
</header>
<div class="py-3 border-top border-warning membership-call">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5 text-center pb-2" style="color: rgb(76, 76, 76);">
                <h3 class="mb-0" style="font-weight: 600; font-size: 1.5rem;">Become A Member!</h3>
                <p class="my-4">
                    Join Rift Valley Sports Club <span class="font-weight-bold">Membership</span>.
                </p> <a href="/membership" class="btn btn-lg btn-blue text-uppercase shadow-lg"><span
                        class="d-inline-block font-weight-bold">apply now</span></a>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>
<script>
    $('.owl-room').owlCarousel({
        items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})

</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6040afc61c1c2a130d64ccfa/1evuat8cc';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
@endsection
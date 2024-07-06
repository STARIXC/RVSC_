@extends('frontend.main_master')
@section('css')

@endsection
@section('content')

<div class="content">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero ">
        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center col-lg-6">
                        <h2 data-aos="fade-down">
                            Welcome to <span>Rift Valley Sport Club</span>
                        </h2>
                        <p data-aos="fade-up">
                            Discover Excellence in Sports and Culture.

                        </p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            @foreach($photos as $photo)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}" style="background-image: url('{{ asset($photo->image_name) }}');">
            </div>
            @endforeach

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <!-- End Hero -->

    <section id="about" class="pt-5 pb-5">
        <div class="container">
            <div class="row align-items-start align-items-md-stretch" data-cues="fadeIn" data-disabled="true">
                <div class="order-1 col-12 col-lg-6 order-lg-0" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <!-- Image -->
                    <div class="row g-0">
                        <div class="col-6">
                            <figure class="mb-0 pe-2 pe-md-3 pe-lg-4">
                                <img src="/frontend/assets/images/about/a1.jpg" class="rounded shadow-sm img-fluid w-100" alt="">
                            </figure>
                        </div>
                        <div class="col-6">
                            <figure class="pt-4 mb-0 ">
                                <img src="/frontend/assets/images/about/a2.jpg" class="rounded shadow-sm img-fluid w-100" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- /Image -->
                </div>
                <div class="col-12 col-lg-6 order-0 order-lg-1" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <!-- Description -->
                    <div class="bg-white h-100 d-flex align-items-center">
                        <div class="mb-8 p-lg-5">
                            <span class="mb-2 fw-medium text-secondary ff-sub text-uppercase ls-1 d-block">Welcome
                                to</span>
                            <h2 class="text-uppercase ff-heading">RVSC</h2>
                            <p class="mb-4">Established in 1907, the Rift Valley Sports Club Nakuru has a long-standing tradition of fostering community and sportsmanship. Originally founded by a group of Englishmen, the club has evolved from its exclusive beginnings to embrace a diverse membership of young professionals and sports enthusiasts. Our mission is to offer top-notch facilities and services, creating an inclusive environment for all members.</p>
                            <a href="/about" class="scroll-to btn btn-primary getstarted">
                                <span>Read More</span>
                                <i class="hicon hicon-flights-one-ways"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /Description -->
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms -->
    <section id="rooms" class="pt-14 pb-14 bg-body rooms" data-bs-theme="dark">
        <div class="container section-title aos-init aos-animate">
            <!-- Description -->
            <h2 class="text-uppercase">Accomodation</h2>

        </div>
        <div class="container grid grid--3-cols ">
            <div class="row ">
                @php $count = 0; @endphp
                @foreach ($frooms as $room)
                @if ($count < 2) <div class="col-md-4 mb-sm-9 mb-7">
                    <div class="border-0 card">
                        <div class="top-0 p-3 mt-4 text-white bg-black bg-opacity-85 position-absolute start-0 z-1">
                            <strong class="fw-semibold fs-5"><sup>KES</sup> {{ $room ->price }} </strong>
                            <span class="small fw-medium">/1PX/ per night</span>
                        </div>
                        <a href="accommodation/room-details/{{ $room ->category_name }}" class="d-block card-img-top">
                            <figure class="mb-0 image-hover-overlay image-hover-scale">

                                <img src="{{ asset($room->category_image) }}" alt="{{ $room ->category_name }}" class="img-fluid w-100">
                                <i class="hicon hicon-plus-thin image-hover-icon fs-4"></i>
                            </figure>
                        </a>
                        <div class="card-body bg-primary-50" data-bs-theme="light">
                            <div class="p-0 p-md-2">
                                <h3 class="mb-4 card-title room-title h4 text-uppercase ff-sub ls-1"><a href="accommodation/room-details/{{ $room ->category_name }}">{{ $room ->category_name }}</a>
                                </h3>
                                <p class="mb-6 card-text ">{{ $room ->room_type }}</p>

                            </div>
                        </div>
                    </div>
            </div>
            @php $count++; @endphp
            @else
            @break
            @endif
            @endforeach
            <div class="col-md-4 mb-sm-9 mb-7">
                <div class="border-0 card">
                    <div class="card-body bg-primary-50" data-bs-theme="light">
                        <h3 class="h4 mb-3 text-uppercase ff-sub ls-1 text-black">Features & Amenities:</h3>
                        <ul class="list">
                            <li class="list-item">
                                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                                <span> Full time hot water</span>
                            </li>
                            <li class="list-item">
                                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                                <span>Easy access town centre & amenities</span>
                            </li>

                            <li class="list-item">
                                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                                <span>spacious parking</span>
                            </li>
                            <li class="list-item">
                                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                                <span>24 hrs gated security</span>
                            </li>

                            <li class="list-item">
                                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                                <span>Kids play area</span>
                            </li>
                            <li class="list-item">
                                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                                <span>Swimming pool</span>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>



</div>

<div class="container all-rooms mt-5 ">
    <a href="/accommodation" class="link">See all Rooms &rarr;</a>
</div>

</section>

<!--/ end  Rooms -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container section-title aos-init aos-animate">
        <!-- Description -->
        <h2 class="text-uppercase"> SERVICES</h2>
        <!-- <p>At Ripotec Movers and Homes! We are your premier destination
            for a wide array of services tailored to meet your needs. From accommodation solutions to courier
            services, we've got you covered. Explore our website to discover how we can serve you today!.</p> -->

    </div>
    <div class="container" data-aos="fade-up">

        <div class="row">
            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box iconbox-blue">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                            </path>
                        </svg>
                        <i class="bx bxl-dribbble"></i>

                    </div>
                    <h4><a href="">{{ $service->service_title }}</a></h4>
                    <p>{{ $service->service_description }}</p>
                </div>
            </div>


            @endforeach


        </div>

    </div>
</section><!-- End Services Section -->

<!-- Call to Action -->
<section id="video" class="text-center image-wrapper bg-image bg-overlay bg-overlay-700 text-body pt-24 pb-28 " data-image-src="/frontend/assets/images/background/bg2.jpg" data-bs-theme="dark" style="background-image: url(&quot;/frontend/assets/images/background/bg2.jpg&quot;);">
    <div class="bg-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-7 col-lg-9" data-cues="fadeIn" data-disabled="true">
                    <div class="mb-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <a class="btn-video-play media-glightbox" href="#"><span></span></a>
                    </div>
                    <h2 class="text-uppercase ff-heading" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        EXPERIENCE A GOOD STAY, ENJOY FANTASTIC SERVICE</h2>
                    <p class="fs-5 fw-normal" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        Ready to experience excellence in hospitality ? Contact us today to learn more about our services and how we can tailor them to meet your specific needs. Your satisfaction is our priority, and we look forward to serving you soon. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- featured Rooms -->
<section class="call image-wrapper bg-image text-body pt-14 pb-18">
    <div class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto my-5 text-center pb-2" style="color: rgb(76, 76, 76);">
                    <h3 class="mb-0" style="font-weight: 600; font-size: 1.5rem;">Become A Member!</h3>
                    <p class="my-4">
                        Join Rift Valley Sports Club <span class="font-weight-bold">Membership</span>.
                    </p> <a href="/membership" class="btn btn-lg btn-primary text-uppercase shadow-lg"><span class="d-inline-block font-weight-bold">apply now</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

@section('js')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6040afc61c1c2a130d64ccfa/1evuat8cc';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
@endsection
@endsection
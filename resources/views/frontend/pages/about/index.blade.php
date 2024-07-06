@extends('frontend.main_master')
@section('content')

<div class="content">

  <section id="pageTitle" class="image-wrapper bg-image bg-cover bg-overlay bg-overlay-300  text-center pt-40 pb-40" data-image-src="{{asset('frontend/assets/images/banner__.jpg')}}" data-bs-theme="dark">
    <div class="bg-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-7 col-lg-9 col-md-11">
            <h1 class="text-uppercase text-white">Welcome to Rift Valley Sports Club Nakuru </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Title -->
  <div data-aos="fade" class="page-title">
   
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="current">About</li>
        </ol>
      </div>
    </nav>
  </div>
  
  <!-- End Page Title -->
  <!-- Features Section - Home Page -->
  <section id="features" class="features">


    <div class="container">

      <div class="row gy-4 align-items-center features-item">
        <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

          <h4 class="text-uppercase">Our Story:</h4>
          <div style="background-color: rgb(255 65 54); height: 5px; margin: 15px 0px; width: 100px;"></div>
          <p>
            <strong>Established:</strong> 1907<br />
            The Rift Valley Sports Club Nakuru has a rich heritage, having been founded by a group of Englishmen shortly after the railway arrived in Nakuru town. Originally conceived as an exclusive gathering place for individuals of notable social standing, the club has transformed over the years into a vibrant and inclusive community hub.
          </p>
          <h4 class="text-uppercase">Our Evolution</h4>
          <p>From its beginnings as a private enclave, the club has opened its doors to a diverse membership that includes young professionals and sports enthusiasts. We are proud to offer a wide range of sporting and recreational facilities, making us a premier destination for both leisure and competitive activities.</p>

        </div>
        <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
          <div class="image-stack">
            <div class="slide p-2 stack-front">
              <div id="about-slider" class="about-slider slide p-2 stack-front">
                @foreach( $photos as $photo )
                <div class="rvsc-item {{ $loop->first ? 'active' : '' }}">
                  <img class="d-block img-fluid rounded shadow-md" src="{{asset($photo->image_name)}}" alt="{{ $photo->image_name }}" width="560" height="315">
                  <div class="rvsc-caption d-none d-md-block">
                  </div>
                </div>
                @endforeach

              </div>
            </div>
            <div class="p-2 stack-back">
              <img src="{{asset('frontend/assets/images/about/about-1.jpg')}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div><!-- Features Item -->


      <div class="row align-items-stretch justify-content-between features-item ">
        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
          <img src="{{asset('frontend/assets/images/about/about-1.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
          <h3>Vision</h3>
          <p>Our vision is to be the most efficient, friendly, and welcoming members' club in the country, with an international outlook. We strive to create a space where every member feels at home, enjoying top-notch facilities and services.</p>
          <h3>Mission:</h3>
          <p>Our mission is to develop and maintain our club facilities to the highest standards. We are committed to providing consistent and high-quality social events, sporting activities, recreational opportunities, and hospitality services to our members and their guests. By doing so, we aim to foster a vibrant and inclusive community where everyone can thrive.</p>
        </div>

      </div><!-- Features Item -->
      <div class="row justify-content-between features-item">
        <div class="col-lg-6 d-flex justify-content-center flex-column" data-aos="fade-up">
          <h3>Management</h3>
          <p>The Rift Valley Sports Club Nakuru is guided by a dedicated and experienced leadership team, ensuring the smooth operation and continual development of our club.</p>
          <h4>Board of Trustees:</h4>
          <p>Our Board of Trustees is responsible for overseeing the long-term vision and strategic direction of the club. Composed of esteemed members with diverse backgrounds, the Board of Trustees ensures that the club remains true to its founding principles while adapting to the changing needs of our community.</p>

          <h4>Board of Management:</h4>
          <p>The day-to-day operations of the club are managed by the Board of Management. This team is tasked with implementing the strategic plans set forth by the Board of Trustees, maintaining our facilities, organizing events, and ensuring the highest standards of service for our members. The Board of Management works diligently to create a welcoming and inclusive environment for all members and their guests.</p>

          <p>Together, the Board of Trustees and the Board of Management work in harmony to uphold the club's values, foster a vibrant community, and ensure that Rift Valley Sports Club Nakuru remains a premier destination for sports and leisure.</p>
        </div>
        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out" style="display: flex; justify-content: center; align-items: center;">
          <img src="{{asset('frontend/assets/images/about/about-1.jpg')}}" class="img-fluid" alt="" style="max-width: 100%; height: auto;">
        </div>
      </div><!-- Features Item -->
    </div>

  </section>
  <!-- End Features Section -->
  <!-- =========Quick Booking====== -->
  <section id="booking" class="image-wrapper bg-image bg-overlay bg-overlay-400 pt-35 pb-35" data-image-src="/frontend/assets/images/banner.jpg" data-bs-theme="dark" style="background-image: url(&quot;/frontend/assets/images/banner.jpg&quot;);">
    <div class="bg-content">
      <div class="container">
        <div class="row justify-content-between" data-cues="fadeIn" data-disabled="true">
          <div class="col-12 col-xl-5 col-lg-6" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
            <div class="pb-2 text-body position-relative" data-bs-theme="dark">
              <!-- Heading -->
              <div class="mb-8">
              </div>
              <!-- /Heading -->
              <!-- Contact Info -->
              <div class="mb-8">
                <div class="d-flex align-items-start mb-4">


                </div>
                <div class="d-flex align-items-start">
                  <div class="fs-3 pe-5 lh-sm">

                  </div>
                  <div>

                  </div>
                </div>
              </div>
              <!-- /Contact Info -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  @endsection



</div>
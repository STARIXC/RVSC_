@extends('frontend.main_master')
@section('content')
<div class="content">
  <section id="pageTitle" class="image-wrapper bg-image bg-cover bg-overlay bg-overlay-800 text-white text-center pt-28 pb-20" data-image-src="./assets/img/rooms/r13_.jpg" style="background-image: url(&quot;./assets/img/rooms/r13_.jpg&quot;);">
    <div class="bg-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-7 col-lg-9 col-md-11">
            <h1 class="text-uppercase ">Welcome to RVSC Contact
            </h1>
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
          <li class="current">Contact</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
  <!-- Contact Section - Home Page -->
  <section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Get in Touch with Us</h2>
      <p>Welcome to our Contact Us page! We're delighted that you're interested in reaching out to us. Whether you have a question, a suggestion, or you're ready to start a partnership, we're here to help.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Nakuru
                </h3>
                <p>CLUB ROAD </p>
                <p>OFF KENYATTA AVENUE</p>

              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+254 717-333-799</p>

              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>Enquiry : info@rvsc.co.ke</p>
                <p>Reservations : reservations@rvsc.co.ke</p>
                <p>Accounts : accounts@rvsc.co.ke </p>
                <p>Manager : manager@rvsc.co.ke </p>
                <p>Food and Beverage : fnb@rvsc.co.ke</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>24 Hrs</p>
                <p>7 days/Week</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-6">
          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <form action="{{ route('enquiry.save') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- End Contact Section -->

</div>
@endsection
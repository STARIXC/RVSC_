<!DOCTYPE HTML>
<html lang="eng">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Rift Valley Sports Club | Home :: Page') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <link href="assets/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owlcarousel/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/owlcarousel/assets/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/splide/css/splide.min.css') }}">
  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/flaticon.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/css/hicons.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/css/layout.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/css/custom-owl-carousel.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/css/buttons.css') }}" rel="stylesheet" />
  <link href="{{ asset('frontend/assets/css/animate.css') }}" rel="stylesheet" />





  <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
  @yield('css')

</head>

<body>
  <!--header-->
  @include('frontend.sections.nav')
  <!--header-->
  @yield('content')

  @include('frontend.sections.footer')


  </footer>
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="/frontend/assets/vendor/jquery.min.js"></script>
  <script src="/frontend/assets/vendor/owlcarousel/owl.carousel.js"></script>
  <script src="/frontend/assets/vendor/splide/js/splide.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/frontend/assets/vendor/aos/aos.js"></script>
  <script src="/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/frontend/assets/js/main.js"></script>
  <script src="/frontend/assets/js/bundle.min.js"></script>

  <script>
  
    $(document).ready(function() {
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoWidth: true,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: true,
        dots: true,
        lazyLoad: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 5,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      })

      $('.owl-board').owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
      });
      $('.owl-trustee').owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true
      });
      new Splide('#image-carousel', {
        perPage: 4,
        breakpoints: {
          640: {
            perPage: 1,
          },
        },
      }).mount();

    })
  </script>

  @yield('js')
</body>
</html>
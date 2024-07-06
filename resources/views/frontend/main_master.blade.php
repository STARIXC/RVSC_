<!DOCTYPE HTML>
<html lang="eng">

<head>
  <title>Rift Valley Sports Club | Home :: Page</title>
  <link href="{{ asset('frontend/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
  <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/froom.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/rooms.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/rdetails.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/sports.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/contact.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/nav.css')}}" rel="stylesheet" type="text/css" media="all" />
  {{-- <link href="{{ asset('frontend/assets/css/new_trend.css')}}" rel="stylesheet" type="text/css" media="all" /> --}}
  
  {{-- <link href="{{ asset('frontend/assets/css/lightbox.css')}}" rel="stylesheet" type="text/css" media="all" /> --}}
  <link href="{{ asset('frontend/assets/css/management.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
  <link rel="icon" href="{{ asset('favicon.ico') }}" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@yield('css')
 
</head>

<body>
  <!--header-->
 @include('frontend.sections.nav')
  <!--header-->
      @yield('content') 

@include('frontend.sections.footer')


</body>

</html>
@extends('frontend.main_master')
@section('content')
 <!-- magnific-popup css cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<link href="{{ asset('frontend/assets/css/gallery.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" />

<div class="content">
  <header class="galleryHero">
    <div class="banner">
      <h1>Our Photo Gallery</h1>
      <div></div>
      <p></p>
      <a class="btn-primary" href="index.php">return home</a>
    </div>
  </header>

  <!-- Page Content -->
  <section  class="pb-5 pt-5 bg-white">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-12 pt-3">
          <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
            <li class="breadcrumb-item active"><a href="/gallery" class="links">Gallery <i
                  class="ti-link"></i></a></li>
          </ol>
        </div>
        {{--  <div class="col-12 col-md-12">
          <h1 class="text-capitalize font-weight-bold">RVSC Gallery</h1> <span class="lead d-inline-block mb-2"></span>
          <p class="text-left mb-0"></p>
        </div>  --}}
      </div>
    </div>

  
</div>


</section>
<div class="gallery">

  <ul class="controls">
      <li class="buttons active" data-filter="all">all</li>
      <li class="buttons" data-filter="events">Events</li>
      <li class="buttons" data-filter="sports">Sports</li>
      <li class="buttons" data-filter="foodanddrinks">Food & Drinks</li>
      <li class="buttons" data-filter="otherservices">Others</li>
      
  </ul>

  <div class="image-container">
    @foreach ($images as $image)
      <a href="{{ asset($image->image_name)}}" class="image {{ $image->image_type}}">
          <img src="{{ asset($image->image_name)}}" alt="">
      </a>
      @endforeach

  </div>

</div>
<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script type="text/javascript">
 $(document).ready(function(){

$('.buttons').click(function(){

    $(this).addClass('active').siblings().removeClass('active');

    var filter = $(this).attr('data-filter')

    if(filter == 'all'){
        $('.image').show(400);
    }else{
        $('.image').not('.'+filter).hide(200);
        $('.image').filter('.'+filter).show(400);
    }

});

$('.gallery').magnificPopup({

    delegate:'a',
    type:'image',
    gallery:{
        enabled:true
    }

});

});
</script>
@endsection
@extends('frontend.main_master')
@section('content')
 <!-- magnific-popup css cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<link href="{{ asset('frontend/assets/css/gallery.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" />
<header class="foodHero">
    <div class="banner">
      <h1>Food and Beverages</h1>
      <div></div>
      {{-- <p></p>
      <a class="btn-primary" href="index.php">return home</a> --}}
    </div>
  </header>
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="lead">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/Food_and_Beverage" class="links">Food and Beverage <i
                                class="ti-link"></i></a>
                    </li>
                </ol>
            </div>
            <h1 class="text-capitalize font-weight-bold poppins-font">Dine and Wine</h1>
            <div class="mb-3">
                At RVSC offers a diverse selection of experiences across all platforms. Our knowledgeable staff will
                always be happy to advise you on the different options available for a wonderful day at the club.

            </div>
        </div>
    </div>
</div>
<div class="gallery">

    <ul class="controls">
      
        <li class="buttons active" data-filter="foodanddrinks">Food & Drinks</li>
        
        
    </ul>
  
    <div class="image-container">
      @foreach ($photos as $image)
        <a href="{{ asset($image->image_name)}}" class="image {{ $image->image_type}}">
            <img src="{{ asset($image->image_name)}}" alt="{{ $image->image_description}}">
        </a>
        @endforeach
  
    </div>

    {{ $photos ->links()}}
  
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
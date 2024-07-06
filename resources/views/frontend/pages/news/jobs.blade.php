@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" />

<div class="content">

  <header class="careerHero">
    <div class="banner">
      <h1>News and Updates</h1>
      <div></div>
      <p></p>

    </div>
  </header>
  <div class="container mb-2">
    <div class="row">
      <div class="mt-5 col-md-10">
        <div class="lead">
          <ol class="bg-transparent breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-warning">Home</a></li>
            <li class="breadcrumb-item active"><a href="/news" class="links">News <i class="ti-link"></i></a></li>
          </ol>
        </div>
        </div>

    </div>
  </div>

  <section class="section-search-content">

    <div class="container">
      <div class=" row">
        <div class="pb-4 col-12 col-sm-7 col-md-7">
          <h2 class="my-0 text-capitalize"><span class="d-block"
              style="color: rgb(118, 143, 0); font-size: 20px; line-height: 36px; font-weight: normal;"><i
                aria-hidden="true" class="fa fa-search"></i> {{ $news->category }}
            </span> <span class="poppins-font">{{ $news->title }}</span></h2>
          <div style="background-color: rgb(118, 143, 0); height: 3px; margin: 15px 0px; width: 75px;"></div>
          
          {!! $news->description !!}
         
          
        </div>
        <div class="col-12 col-sm-5 col-md-4">
          <div>
            <img
              src="{{asset($news->image)  }}" alt="{{ $news->title }}"
              style="mix-blend-mode: multiply; box-shadow: rgb(204, 204, 204) 0px 0px 30px; height: 300;"></div>
        </div>
      </div>
    </div>
  </section>




  <div class="p-5"></div>
</div>

@endsection
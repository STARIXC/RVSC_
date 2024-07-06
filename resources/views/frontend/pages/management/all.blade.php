@extends('frontend.main_master')
@section('css')
<link href="{{ asset('frontend/assets/css/new_trend.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')

<div class="content">
    <header class="managemmentHero">
        <div class="banner">
            <h1>Management of RVSC</h1>
            <div></div>
            <p></p>
            <a class="btn-primary" href="/">return home</a>
        </div>
    </header>
</div>

<div class="container">
    <div class="row">
        @foreach ($directors as $item)
        <div class="col-12 col-sm-12 col-md-6  my-5">
            <div class="media">
                <img src="{{ asset($item->director_image)}}" alt="{{ $item->director_name }}"
                    class="img-fluid d-block rounded-circle mr-3 shadow-md"
                    style="width: 30%; border: 5px solid rgb(247, 247, 247);">
                <div class="media-body align-self-center">
                    <h5>{{ $item->director_name }}</h5> <span
                        class="d-block text-secondary">{{ $item->director_position }}</span>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
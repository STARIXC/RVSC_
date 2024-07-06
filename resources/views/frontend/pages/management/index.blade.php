@extends('frontend.main_master')
@section('css')

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
<div class="w-100 bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto text-center">
                <div class="section-title">
                    <h4 class="poppins-font">Rift Valley Sports Club Management</h4>
                    <div></div>
                </div>

            </div>
        </div>

    </div>
    <div class="container ">
  
        <div class="row">
            <div class="col-md-12 my-5 management-display">
                @if (count($trustees)==0)

        @else
                <h4 class="mb-3">Board of Trustee</h4>
                <div style="background-color: rgb(255 65 54); height: 5px; margin: 15px 0px; width: 100px;"></div>
               
                <div class="owl-carousel owl-theme owl-trustee">
                    @foreach ($trustees as $item)
                    <div class="item">
                        <div class="card border-0 rounded-0"><img src="{{ asset($item->director_image)}}"
                                alt="{{ $item->director_name }}" class="card-img-top rounded-0">
                            <div class="card-body text-center" style="background: rgb(108, 106, 243);"><span
                                    class="d-block text-white font-weight-bold w-100 text-truncate">
                                    {{ $item->director_name }}
                                </span> <span class="d-block w-100 text-white text-truncate">
                                    {{ $item->director_position }}
                                </span></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ url('/management/all') }}"
                    class="links poppins-font hvr-forward mb-3">
                    All Trustee<i class="ti-link"></i></a>

                @endif
            </div>
            <div class="col-md-12 my-5 management-display">
                <h4 class="mb-3">Board of Management</h4>

                <div style="background-color: rgb(255 65 54); height: 5px; margin: 15px 0px; width: 100px;"></div>
                <div class="owl-carousel owl-theme owl-board">
                    @foreach ($directors as $item)
                    <div class="item">
                        <div class="card border-0 rounded-0"><img src="{{ asset($item->director_image)}}"
                                alt="{{ $item->director_name }}" class="card-img-top rounded-0">
                            <div class="card-body text-center" style="background-color: rgb(108, 106, 243);"><span
                                    class="d-block text-whitefont-weight-bold w-100 text-truncate">
                                    {{ $item->director_name }}
                                </span> <span class="d-block w-100 text-white text-truncate">
                                    {{ $item->director_position }}
                                </span></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ url('/management/all') }}"
                class="links poppins-font hvr-forward mb-3">
                All Board<i class="ti-link"></i></a>


            </div>

        </div>


    </div>

</div>
</div>
</div>



@endsection
@extends('frontend.main_master')
@section('content')
<div class="content">
	<header class="aboutHero">
    <div class="banner">
      <h1>About Us</h1>
      <div></div>
      <p></p>
      <a class="btn-primary" href="/">return home</a>
    </div>
  </header>
   <section class="single-room">
        
<div class="section-title">
      <h4>About Rift Valley Sports Club</h4>
    <div></div>
    </div>
        <div class="single-room-info container">
          <article class="desc">
            <h3>About US</h3>
            <p>
              Rift Valley Sports Club was started in 1907 by a few Englishmen
              after the arrival of the railway in Nakuru town.
            </p>
            <p>
              The Club was initially meant to bring people with common interests
              together and also for the “who is who” in the Country and aimed to
              serve the needs of such groups.
            </p>
            <p>
              The trend has however evolved with the Club opening up for young
              professionals and sports personalities.
            </p>
            <p>
              The Club has since changed from its initial mission to a more
              active role offering a wide range of sporting facilities such as
              international squash courts, international lawn tennis courts,
              modern table tennis, modern snooker tables, international cricket
              pitch, modern swimming pool, basketball pitch and a modern soccer
              ground.
            </p>
            <p>
              In July, 2013, the Club officially opened its newly modern Health
              and Fitness centre comprising the following:
            </p>
            <ul class="extras">
              <li class="list-item">
                <i class="fa fa-angle-double-right"></i> 100 pax capacity
                Aerobics hall
              </li>
              <li class="list-item">
                <i class="fa fa-angle-double-right"></i> 100 pax capacity
                Gymnasium hall fully equipped
              </li>
              <li class="list-item">
                <i class="fa fa-angle-double-right"></i> A ladies wing with
                Sauna, Steam bath
              </li>
              <li class="list-item">
                <i class="fa fa-angle-double-right"></i> A Gents wing with
                Sauna, Steam Bath.
              </li>
            </ul>
          </article>
          <article class="info">
            <h3>Afilliate Clubs</h3>
            <p>
              Rift Valley Sports Club has reciprocal arrangements with reputable
              international and national Clubs which includes;
            </p>

            <h6 class="text-muted">Kenya</h6>
            <ul class="list">
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>Nairobi Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>United Kenya Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i> Parklands Sports
                Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>Gymkhana Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>Mombasa Club Eldoret
                Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>Nanyuki Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>Kitale Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>Nyanza Club
              </li>
            </ul>

            <br/>
            <h6 class="text-muted">International Clubs</h6>
            <ul class="list-group">
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>
                <strong>India –</strong>Cricket Club of India
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>
                <strong>India –</strong>Karnavati Club of India
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>
                <strong>India –</strong> Juhu Vile Gymkhana Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>
                <strong>India –</strong>
                Umed Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>
                <strong>India –</strong>
                Pleasure Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>
                <strong>Qatar -</strong> Doha Club
              </li>
              <li class="list-item">
                <i class="fa fa-paper-plane mx-2"></i>
                <strong>SRI LANKA–</strong> Colombo Swimming Club
              </li>
            </ul>
          </article>
        </div>
     
        <div class=" single-room-images container-fluid">
        <div class="row">
            <div class="card shadow-sm col m-1 bg-white rounded">
            <figure class="figure card-default">
              <img src="{{asset('assets/images/gate.jpg')}}" class="img-fluid" alt="..." />
              <figcaption class="figure-caption">
                The Entrance to Rift Valley Sports Club.
              </figcaption>
            </figure>
          </div>

          <div class="card shadow-sm col m-1 bg-white rounded">
            <figure class="figure card-default">
              <img src="{{asset('assets/images/Main-Entrance.jpg')}}" class="img-fluid" alt="..." />
              <figcaption class="figure-caption">
                The Entrance to Rift Valley Sports Club Reception.
              </figcaption>
            </figure>
          </div>

          <div class=" card shadow-sm col m-1 bg-white rounded">
            <figure class="figure card-default">
              <img src="{{asset('assets/images/photo-gallery/spool3.jpg')}}" class="img-fluid" alt="..." />
              <figcaption class="figure-caption">
                Rift Valley Sports Club Swimming Pool.
              </figcaption>
            </figure>
          </div>
        </div>
        </div>
      </section>
     
    
  
    
</div>
 @endsection
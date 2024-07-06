@extends('frontend.main_master')
@section('content')
<div class="content">
    <header class="sportsHero">
      <div class="banner">
          <h1>Sporting Facility</h1>
          <div></div>
          <p></p>
          <a class="btn-primary" href="/">return home</a>
      </div>
  </header>
  <section class="sports-section">
    <div class="section-title">
      <h4>Sporting Facilities</h4>
      <div></div>
    </div>
    <div class="sports-center">
  
   
              <article class="single-sport">
            <div class="hvrbox">
              <img src="{{asset('backend/assets/images/sports/teniss3.jpg')}}" alt="Cricket">
              <div class="hvrbox-layer_top hvrbox-layer_scale">
                  <div class="text">
                    <h4>Cricket</h4>
                    <p>Boasting a cricket pitch, the Club is ideal location to relax and perfect your game</p>
                  </div>
                </div>
              </div>
            </article>
  
           <article class="single-sport">
            <div class="hvrbox">
            <img src="{{asset('backend/assets/images/sports/spool-1.jpg')}}">
             <div class="hvrbox-layer_top hvrbox-layer_scale">            
                <div class="text">
                 <h4>Swimming</h4>
                 <p>The swimming pool is a place to relax and unload. There is a bar a shaded garden area to relax. This is a place for full fun filled family outings. The pool area is also ideal for corporate functions, private parties and other events.</p>
                 </div>
              </div>
          </div>
        </article>
  
        <article class="single-sport">
          <div class="hvrbox">
            <img src="{{asset('backend/assets/images/sports/squash.jpg')}}">
             <div class="hvrbox-layer_top hvrbox-layer_scale">
              <div class="text">
                <h4>Squash</h4>
                <p>Rift Valley Sports Club has a modern squash court with a “social squash” atmosphere. Squash players can play informally or join the competitive squash ladder.</p>
              </div>
            </div>
          </div>
     </article>
  
            <article class="single-sport">
  
              <div class="hvrbox">
                 <img src="{{asset('backend/assets/images/sports/gym.jpg')}}">
                    <div class="hvrbox-layer_top hvrbox-layer_scale">
                      <div class="text">
                       <h4>Health and Fitness Center</h4>
                        <p>
                            RVSC provides a top of the range gym for your workout. We also give aerobic classes plus the provision of a Sauna and a Steam Bath.
                          </p>
                      </div>
                 </div>
              </div>
           </article>
              
              <article class="single-sport">
            <div class="hvrbox">
            <img src="{{asset('backend/assets/images/sports/pool_table.jpg')}}">
              <div class="hvrbox-layer_top hvrbox-layer_scale">
                <div class="text">
                  <h4>Snooker</h4>
                  <p>The club enjoys a large private snooker room with its own bar for those who enjoy the mind exercising game.</p>
                </div>
              </div>
            </div>
          </article>
  
             <article class="single-sport">
            <div class="hvrbox">
            <img src="{{asset('backend/assets/images/sports/tennis_coat.jpg')}}">
                      <div class="hvrbox-layer_top hvrbox-layer_scale">
               
      <div class="text">
          <h4>Tennis Court</h4>
   <p>
                The club has a well maintained Tennis Court.
              </p>
        </div>
    </div>
          </div>
          
          </article>
          
          <article class="single-sport">
            <div class="hvrbox">
            <img src="{{asset('backend/assets/images/sports/children_playg.jpg')}}">
                         <div class="hvrbox-layer_top hvrbox-layer_scale">
               
      <div class="text">
        <h4>Children’s play ground</h4>
   <p>
               The Club has set up  a Children’s Play ground with all the necessary ameneties and its open to the children.
              </p>
        </div>
    </div>
          </div>
       
          </article>
  
     
  </div>
  </section>
  @endsection
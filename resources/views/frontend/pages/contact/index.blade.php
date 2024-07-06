@extends('frontend.main_master')
@section('content')
<div class="content">
	<header class="contactHero">
    <div class="banner">
      <h1>Contact Us</h1>
      <div></div>
      <p></p>
      <a class="btn-primary" href="index.php">return home</a>
    </div>
  </header>
     <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-5">
          <!-- <Title title="Get in Touch !!!" /> -->
          <div class="section-title">
          	<h4>Get in Touch !!!</h4>
          	<div></div>
          </div>
          
        </div>
        
      </div>
      <div class="row">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pb-5">
          <div class="card card-default">
            <div class="card-body">
              <div class="wrapper-contact animated bounceInLeft">
                <div class="company-info">
                  <h3>Rift Valley Sports Club</h3>
                  <h5>Do you have something to share with us? Get in touch with us on</h5>
                  <ul>
          
                    <li>
                      <i class="fa fa-phone"></i> Phone : +254 717-333-799
                    </li>
                    <li>
                      <i class="fa fa-envelope"> </i> Enquiry :
                       info@rvsc.co.ke
                    </li>
                    <li>
                      <i class="fa fa-envelope"></i> Reservations :  reservations@rvsc.co.ke
                    </li>
                    <li>
                      <i class="fa fa-envelope"> </i> Accounts :  accounts@rvsc.co.ke
                    </li>
                    <li>
                      <i class="fa fa-envelope"> </i> Manager : manager@rvsc.co.ke
                    </li>
                    <li>
                      <i class="fa fa-envelope"> </i> Food and Beverage : fnb@rvsc.co.ke
                    </li>

                  </ul>
                  
                </div>
                <div class="contact">
                
                  <form action="{{ route('enquiry.save') }}" method="post">
                    @csrf
                    <p>
                      <label>Name</label>
                      <input
                        type="text"
                        name="name"
                        class="feedback-input"
                        placeholder="Name"
                        required
                      />
                    </p>
                    <p>
                      <label>Email</label>
                      <input
                        type="email"
                        name="email"
                        class=" feedback-input"
                        id="email"
                        placeholder="Email"
                        required
                      />
                    </p>
                    <p>
                      <label>Phone</label>
                      <input
                        type="number"
                        name="phone"
                        class="feedback-input"
                        placeholder="0700000000"
                       min="10"
                        required
                      />
                    </p>
                    <p>
                      <label>Subject</label>
                      <input
                        type="text"
                        name="subject"
                        class="feedback-input"
                        placeholder="Subject"
                        required
                      />
                    </p>
                    <p class="full">
                      <label>Message</label>
                      <textarea
                        name="message"
                        rows="5"
                        class="feedback-input"
                        placeholder="Enter your Message Here"
                        required
                      ></textarea>
                    </p>
                  <!--   /* <p class="full">
                      <label>*What is 2+2? (Anti-spam)</label>
                      <input name="human" placeholder="Type Here" />
                    </p> */ -->
                    <p class="full">
                      <button name="submit" type="submit">
                        Submit
                      </button>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
</div>
@endsection
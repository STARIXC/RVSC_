  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo me-auto"><img src="{{asset('frontend/assets/images/logo.png')}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">About Us</a></li>
              <li class="dropdown {{ Request::is('about') ? 'active' : '' }}"><a href="#"><span>Management</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/team/board">Board of Management</a></li>
                  <li><a href="/team/trustee">Board of Trustees</a></li>

                </ul>
              </li>

            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="{{ Request::is('accommodation') ? 'active' : '' }}"><a href="/accommodation">Accomodation</a></li>
              <li class="{{ Request::is('sports') ? 'active' : '' }}"><a href="/sports">Sports</a></li>
              <li class="{{ Request::is('food_and_beverage') ? 'active' : '' }}"><a href="/Food_and_Beverage">Food and Beverage</a></li>

            </ul>
          </li>
          <!-- <li class="{{ Request::is('management') ? 'active' : '' }}"><a href="/management">Management</a></li> -->
          <li class="{{ Request::is('membership') ? 'active' : '' }}"><a href="/membership">Membership</a></li>
          <li class="{{ Request::is('events') ? 'active' : '' }}"><a href="/events">Events</a></li>
          <li class="{{ Request::is('news') ? 'active' : '' }}"><a href="/news">News</a></li>
          <li class="{{ Request::is('downloads') ? 'active' : '' }}"><a href="/downloads">Downloads</a></li>
          <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/gallery">Gallery</a></li>
          <li class="{{ Request::is('contacts') ? 'active' : '' }}"><a href="/contacts">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
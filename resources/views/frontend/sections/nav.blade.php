
<div class="w-100 fixed-top navigation font-family: Palatino, 'Palatino Linotype', serif;">
  <div class="w-100 py-2 top-nav">
    <div class="container-fluid">
      <div class="row">
        <div class="d-none d-sm-none d-md-block col-12 col-md-6 text-uppercase">
          <ul class="list-inline social">
            <li class="list-inline-item"><a href="https://www.facebook.com/Rift-Valley-Sports-Club-337632986262613/"
                class="d-block links">
                <div
                  class="d-flex justify-content-center align-items-center bg-light text-dark border border-dark circled-icon">
                  <i aria-hidden="true" class="fa fa-facebook"></i></div>
              </a></li>
            <li class="list-inline-item"><a href="https://twitter.com/rvscnakuru?lang=en" class="d-block links">
                <div
                  class="d-flex justify-content-center align-items-center bg-light text-dark border border-dark circled-icon">
                  <i aria-hidden="true" class="fa fa-twitter"></i></div>
              </a></li>
            <li class="list-inline-item"><a
                href="#" class="d-block links">
                <div
                  class="d-flex justify-content-center align-items-center bg-light text-dark border border-dark circled-icon">
                  <i aria-hidden="true" class="fa fa-linkedin"></i></div>
              </a></li>
            <li class="list-inline-item"><a href="#"
                class="d-block links">
                <div
                  class="d-flex justify-content-center align-items-center bg-light text-dark border border-dark circled-icon">
                  <i aria-hidden="true" class="fa fa-youtube"></i></div>
              </a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
          <ul
            class="list-inline mb-0 d-flex justify-content-between justify-content-sm-between justify-content-lg-end text-uppercase">
            {{--  <li class="list-inline-item"><a href="https://members.rvsc.co.ke/" class="links text-white">members</a> |
            </li>  --}}
            <li class="list-inline-item"><a href="/gallery" class="links text-white">gallery</a> |
            </li>
            <li class="list-inline-item"><a href="/news"
                class="links text-white">Tenders</a> |</li>
            <li class="list-inline-item"><a href="/news" class="links text-white">careers</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light text-black bg-white navigation__shadow">
    <div class="container"><a href="/" class="navbar-brand"><img
          src="{{asset('frontend/assets/images/logo.png')}}" width="45" alt="Rift Valley Sports Club"></a> <button
        type="button" data-toggle="collapse" data-target="#rvscNavigation" aria-controls="rvscNavigation"
        aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler border-0 collapsed"><span
          class="navbar-toggler-icon"></span></button>
      <div id="rvscNavigation" class="navbar-collapse collapse" style="">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a href="/" class="nav-link ">Home <span
                class="sr-only">(current)</span></a></li>
          <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a href="/about" class="nav-link ">About</a></li>
          <li class="nav-item {{ Request::is('accommodation') ? 'active' : '' }}"><a href="/accommodation" class="nav-link ">Accomodation</a></li>
          <li class="nav-item {{ Request::is('sports') ? 'active' : '' }}"><a href="/sports" class="nav-link ">Sports</a></li>
          <li class="nav-item {{ Request::is('Food_and_Beverage') ? 'active' : '' }}"><a href="/Food_and_Beverage" class="nav-link ">Food and Beverage</a></li>
          <li class="nav-item {{ Request::is('management') ? 'active' : '' }}"><a href="/management" class="nav-link ">Management</a></li>
          <li class="nav-item {{ Request::is('membership') ? 'active' : '' }}"><a href="/membership" class="nav-link ">Membership</a>
          </li>
          <li class="nav-item {{ Request::is('events') ? 'active' : '' }}"><a href="/events" class="nav-link ">Events</a></li>
          <li class="nav-item {{ Request::is('news') ? 'active' : '' }}"><a href="/news" class="nav-link ">News</a></li>
           <li class="nav-item {{ Request::is('contacts') ? 'active' : '' }}"><a href="/contacts" class="nav-link ">Contacts</a>
           <li class="nav-item {{ Request::is('downloads') ? 'active' : '' }}"><a href="/downloads" class="nav-link ">Downloads
          </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header id="header" class="site-header">
    <nav id="header-nav" class="navbar navbar-expand-lg px-3">
      <div class="container">
        <a class="navbar-toggler d-flex d-lg-none order-3 p-1" href="{{ route('home')}}">
          <img src="{{ asset('assets/img/logo/logo.png')}}" class="logo">
        </a>
        <a class="navbar-brand d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" style="font-size:24px;color:#EE7E25"></i>
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
          <div class="offcanvas-header px-4 pb-0">
            <a class="navbar-brand" href="{{ route('home')}}">
              <img src="{{ asset('assets/img/logo/logo.png')}}" class="logo">
            </a>
            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
          </div>
          <div class="offcanvas-body">
            <a class="navbar-brand d-none d-lg-block me-0 header-icon"  href="{{ route('home')}}">
                <img src="{{ asset('assets/img/logo/p-logo.png')}}" class="logo">
            </a>
            <ul id="navbar" class="navbar-nav w-100 d-flex justify-content-center align-items-center">
            <hr>
                <ul class="list-unstyled d-lg-flex justify-content-md-between align-items-center">
                    <li class="nav-item">
                    <a class="nav-link ms-0 {{Request::is('about-us') ? 'active' : ''}}" href="{{ route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link ms-0 {{Request::is('services') ? 'active' : ''}}" href="{{ route('services')}}">Services</a>
                    </li>
                </ul>
                <ul class="list-unstyled d-lg-flex justify-content-end align-items-center">
                    <li class="nav-item">
                        <a class="nav-link ms-0 {{Request::is('portfolio') ? 'active' : ''}}" href="{{ route('portfolio')}}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-0 {{Request::is('contact-us') ? 'active' : ''}}" href="{{ route('contact')}}">Contact Us</a>
                    </li>

                </ul>
                <a class="navbar-brand d-none d-lg-block me-0 header-logo" href="{{ route('home')}}">
                    <img src="{{ asset('assets/img/logo/logo.png')}}" class="logo">
                </a>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

{{-- <header class="header">
    <style>
        .header {
            --headerlogo: url({{ asset('assets/img/logo/logo.svg')}});
        }
    </style>
    <div class="header-inner flex flex-align-center">
        <a href="#" class="mob-menu-btn">
            <div class="hamburger">
                <span class="hamburger-line hamburger-line-top"></span>
                <span class="hamburger-line hamburger-line-middle"></span>
                <span class="hamburger-line hamburger-line-bottom"></span>
            </div>
        </a>
        <a href="{{ route('home')}}" class="mobile-logo hidden-lg">
            <img data-no-lazy="1" src="{{ asset('assets/img/logo/logo.svg')}}" alt="pannache Interiors Logo" width="40"
                height="44">
        </a>
        <div class="drawer">
            <div class="drawer-outer">
                <div class="drawer-inner">
                    <a href="#" class="close-mob-menu-btn flex flex-align-center flex-justify-center hidden-lg"
                        aria-label="Close Menu">
                        <i class="fa-icon"
                            data-src="https://lumi-interiors.com/app/themes/the-hideout-theme/icons/"
                            data-style="regular" data-icon="xmark" data-fill="primary"></i>
                    </a>
                    <a href="{{ route('home')}}" class="burger-logo hidden-lg">
                        <img data-no-lazy="1" src="assets/img/logo/logo.svg" alt="pannache Interiors Logo"
                            width="40" height="44">
                    </a>
                    <nav class="nav-wrap">
                        <a  style="width: 250px; text-align:left" href="{{ route('home')}}" class="logo">
                            <img data-no-lazy="1" src="assets/img/logo/favicon.png" alt="pannache Interiors Logo"
                            width="60" height="44">
                        </a>
                        <div class="main-nav">
                            <ul>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a class="{{Request::is('about-us') ? 'active' : ''}}" href="{{ route('about')}}">About Us</a>
                                </li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a class="{{Request::is('services') ? 'active' : ''}}" href="{{ route('services')}}">Services</a>
                                </li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a class="{{Request::is('portfolio') ? 'active' : ''}}" href="{{ route('portfolio')}}">Portfolio</a>
                                </li>
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page">
                                    <a class="{{Request::is('contact-us') ? 'active' : ''}}" href="{{ route('contact')}}">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                        <div style="width: 250px; text-align:end">
                            <a href="{{ route('home')}}" class="big-logo">
                                <img data-no-lazy="1" src="assets/img/logo/logo.svg" alt="pannache Interiors Logo"
                                    width="80" height="44">
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header> --}}

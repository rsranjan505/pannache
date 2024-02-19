<header class="header">
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

    {{-- <div class="menu-bar v1">
        <div class="container">
            <div class="menu-bar-content">
                <nav class="main-menu">

                    <ul>
                        <li class=" {{Request::is('/') ? 'active' : ''}}">
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="{{Request::is('about') ? 'active' : ''}}"><a href="{{ route('about') }}">About Us</a></li>
                        <li class="has-dropdown {{Request::is('services') ? 'active' : ''}}">
                            <a href="{{ route('services') }}">Products</a>
                            <ul>
                                @if (isset($products))
                                    @foreach ($products as $product)
                                        <li><a href="{{route('product.details',['name' => $product->slug])}}">{{ ucfirst($product->name)}}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>

                        <li class=" {{Request::is('client') ? 'active' : ''}}">
                            <a href="{{ route('client') }}">Clients</a>
                        </li>
                        <li class=" {{Request::is('gallery') ? 'active' : ''}}">
                            <a href="{{ route('gallery') }}">Media & Gallery</a>
                            <ul>
                                <li><a href="blog.html">Media & Gallery</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="{{Request::is('career') ? 'active' : ''}}">
                            <a href="{{ route('career') }}">Careers</a>
                        </li>
                         <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
                <div class="social-link">
                    <ul>
                        <li><a href="#"><span class="my-icon icon-facebook"></span></a></li>
                        <li><a href="#"><span class="my-icon icon-instagram"></span></a></li>
                        <li><a href="#"><span class="my-icon icon-twitter"></span></a></li>
                        <li ><a style="font-weight: 700" href="{{ route('login')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
</header>

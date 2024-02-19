@extends('layout.app')

@section('content')
<div class="home-banner">
    <style>
        .home-banner .slide {
            --tintopacity: 25%;
        }
    </style>
    <div class="slide">
        <div class="banner-logo">
            <img data-no-lazy="1" src="{{ asset('assets/img/logo/logo.svg')}}" alt="" width="1000" height="1000">
        </div>
        <div class="image image-absolute tint-overlay">
            <img data-no-lazy="1" class="img"
                src="{{ asset('assets/img/bg1.jpg')}}"
                alt="interior design" width="2500" height="2500">
        </div>
    </div>
</div>
<section class="main-body">
    <div class="widget-container widget-container--grid standard-widget text-center text-links bg-default">
        <div class="container-fluid container-fluid--sml">
            <h1 class="h2">Crafting Unique Designs: Dubai's Top Luxury Interior Design Company</h1>
            <p>“In a city that never settles for the ordinary, Pannache Interiors is
                dedicated to creating spaces that mirror Dubai’s magnificent spirit."</p>
            <p>Based in the dynamic hub of Dubai, Pannache Interiors stands as a
                paradigm of <strong>magnificent design solutions with authentic elegance &
                precision-driven fitouts</strong>. Merging rich heritage with top trends in global
                aesthetics, we believe in the transformative power of thoughtfully crafted
                spaces that leave a lasting impression.</p>
        </div>
    </div>
    <div class="widget-container widget-container--grid cards-widget cards-widget--1 bg-default">
        <div class="container-fluid">
            <div class="flex-list">
                <a class="flex-col link-zoom-img bg-fallback" href="{{route('portfolio')}}">
                    <style>
                        .cards-widget--1 .flex-col {
                            --tintopacity-1: 30%;
                        }
                    </style>
                    <div class="text text-center text-white flex flex-direction-column flex-justify-end">
                        {{-- <span class="subtitle">Our portfolio</span>
                        <h2 class=h3>A collection of our beautiful projects</h2> --}}
                        <div class="button-wrap">
                            <div class="text-button text-button--underlined">
                                <span>Our portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="image image-absolute gradient-overlay">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/DSC_6235.jpg?fit=944%2C1000&ssl=1&w=2000&quality=85"
                            alt="interior design company in Dubai" width="2000" height="2000">
                    </div>
                </a>
                <a class="flex-col link-zoom-img bg-fallback" href="{{route('services')}}">
                    <style>
                        .cards-widget--1 .flex-col {
                            --tintopacity-2: 30%;
                        }
                    </style>
                    <div class="text text-center text-white flex flex-direction-column flex-justify-end">
                        {{-- <span class="subtitle">Turnkey services</span>
                        <h2 class=h3>Interior design and architecture</h2> --}}
                        <div class="button-wrap">
                            <div class="text-button text-button--underlined">
                                <span>Our services</span>
                            </div>
                        </div>
                    </div>
                    <div class="image image-absolute gradient-overlay">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/DSC_6342.jpg?fit=1000%2C1000&ssl=1&w=2000&quality=85"
                            alt="interior design studio" width="2000" height="2000">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div
        class="widget-container widget-container--grid bg-default image-slider-widget image-slider-widget--2">
        <div class="container-fluid">
            <div class="slider widget-slider" data-dots="true" data-arrows="false" data-autoplay="false"
                data-autoplay-speed="5000">
                <div class="slide bg-fallback slide-1">
                    <style>
                        .image-slider-widget--2 .slide-1 .tint-overlay:after {
                            opacity: 30%;
                        }
                    </style>
                    <div class="image image-absolute tint-overlay" data-scrollspeed=".05">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTAwIiBoZWlnaHQ9IjI1MDAiIHZpZXdCb3g9IjAgMCAyNTAwIDI1MDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/DSC_6131_HDR.jpg?fit=1500%2C1000&ssl=1&w=2500&quality=85"
                            alt="best interior design company" width="2500" height="2500">
                    </div>
                    <a class="text text-white text-center flex flex-align-center flex-justify-center h-100"
                        href="{{route('about')}}">
                        <div class="text-inner">
                            <span class="subtitle">What we do</span>
                            <h2 class=h2>Unwavering Quality: Our commitment to excellence is reflected in every
                                detail, from start to finish.</h2>
                            <div class="button-wrap">
                                <div class="text-button text-button--underlined">
                                    <span>About us</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-container widget-container--grid cards-widget cards-widget--3 bg-default">
        <div class="container-fluid">
            <div class="flex-list">
                <a class="flex-col link-zoom-img bg-fallback" href="about-us/index.html">
                    <style>
                        .cards-widget--3 .flex-col {
                            --tintopacity-1: 30%;
                        }
                    </style>
                    <div class="text text-center text-white flex flex-direction-column flex-justify-end">
                        <h2 class=h3> Interior Design</h2>
                        <div class="button-wrap">
                            <div class="text-button text-button--underlined">
                                <span>View Service</span>
                            </div>
                        </div>
                    </div>
                    <div class="image image-absolute gradient-overlay">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/DSC_5788.jpg?fit=667%2C1000&ssl=1&w=2000&quality=85"
                            alt="luxury interior design" width="2000" height="2000">
                    </div>
                </a>
                <a class="flex-col link-zoom-img bg-fallback" href="press/index.html">
                    <style>
                        .cards-widget--3 .flex-col {
                            --tintopacity-2: 30%;
                        }
                    </style>
                    <div class="text text-center text-white flex flex-direction-column flex-justify-end">
                        <h2 class=h3> Fitout Services</h2>
                        <div class="button-wrap">
                            <div class="text-button text-button--underlined">
                                <span>View Service</span>
                            </div>
                        </div>
                    </div>
                    <div class="image image-absolute gradient-overlay">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/309106095_1214259799143137_9040692004595950772_n-e1684762466462.jpg?fit=1439%2C1061&ssl=1&w=2000&quality=85"
                            alt="founder of lumi interior design company in Dubai" width="2000"
                            height="2000">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="widget-container widget-container--bleed image-slider-widget image-slider-widget--4">
        <div class="slider widget-slider" data-dots="true" data-arrows="false" data-autoplay="false"
            data-autoplay-speed="5000">
            <div class="slide bg-fallback slide-1">
                <div class="image image-absolute " data-scrollspeed=".05">
                    <img data-lazyloaded="1"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTAwIiBoZWlnaHQ9IjI1MDAiIHZpZXdCb3g9IjAgMCAyNTAwIDI1MDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                        class="img"
                        data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/01/42343a7fd7820064ed968135bd2641c0@2x.jpg?fit=3600%2C2160&ssl=1&w=2500&quality=85"
                        alt="arab interior design company" width="2500" height="2500">
                </div>
                <div class="text text-white text-center flex flex-align-center flex-justify-center h-100">
                    <div class="text-inner"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.newsletter')
@endsection

@extends('layout.app')

@section('content')
<div class="multi-banner multi-banner--fullscreen">
    <div class="slide flex-list">
        <div class="image image-absolute tint-overlay" data-scrollspeed="0.1">
            <img data-no-lazy="1" class="img"
                src="{{ asset('assets/img/about.jpg')}}"
                alt="interior design company in Dubai" width="2500" height="2500">
        </div>
        <div class="text text-white text-center flex flex-align-center">
            <div class="text-inner">
                <span class="subtitle">About</span>
                <h1>pannache Interiors</h1>
            </div>
        </div>
    </div>
    <style>
        .multi-banner {
            --bannertintopacity: 10%;
        }
    </style>
</div>
<section class="main-body">
    <div
        class="widget-container widget-container--grid text-widget text-widget--center text-widget--animation-line text-center text-links bg-default ">
        <div class="container-fluid container-fluid--sml">
            <h2><em>Unique</em> and <em>bespoke environments</em> crafted exclusively for our discerning
                clients</h2>
                <p>“In a city that never settles for the ordinary, Pannache Interiors is
                    dedicated to creating spaces that mirror Dubai’s magnificent spirit."</p>
                <p>Based in the dynamic hub of Dubai, Pannache Interiors stands as a
                    paradigm of <strong>magnificent design solutions with authentic elegance &
                    precision-driven fitouts</strong>. Merging rich heritage with top trends in global
                    aesthetics, we believe in the transformative power of thoughtfully crafted
                    spaces that leave a lasting impression.</p>
            <div class="button-container text-"></div>
        </div>
    </div>
    <div
        class="widget-container widget-container--grid image-text-widget image-text-widget--right bg-default">
        <div class="container-fluid">
            <div class="flex-list flex-space-between">
                <div class="image-wrap">
                    <div class="image image-absolute">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="{{ asset('assets/img/about-1.jpg')}}"
                            alt="founder of pannache interior design company in Dubai" width="2000"
                            height="2000">
                    </div>
                </div>
                <div class="text text-links flex flex-direction-column flex-justify-center">
                    <div class="text-inner">
                        <h2 class=h3>Why <i>Us</i></h2>
                        <p>Unwavering Quality: Our commitment to excellence is reflected in every
                            detail, from start to finish.</p>
                        <p>Sustainable Choices: We blend design with sustainability, ensuring
                            spaces are both stunning and responsible.</p>
                        <p>Innovative Designs: We merge modern aesthetics with timeless elegance,
                            creating unique spaces every time <strong>(reflection of your personality -
                            residential & and business booster - commercial)</strong>.</p>
                        <p>Client First: Your vision is central to our process, making collaboration key
                            to every project's success. <strong>We engage you every step of the way so you
                            design with us</strong>.</p>
                        <p>Seamless Integration: We offer a smooth transition from design to fit-out &
                            project management, ensuring complete peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="widget-container widget-container--grid svg-png-uploader-widget svg-png-uploader-widget--pull-upwards svg-png-uploader-widget--left svg-png-uploader-widget--3 bg-default">
        <style>
            .svg-png-uploader-widget--3 {
                --imgheightdesktop: 75px;
                --imgheightmobile: 70px;
            }
        </style>
        {{-- <div class="container-fluid container-fluid--sml">
            <div class="svg-container flex">
                <div class="svg-wrap">
                    <img data-lazyloaded="1"
                        src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                        class="img"
                        data-src="https://pannache-interiors.com/app/app-uploads/2023/11/signature-pannache.svg"
                        alt="">
                </div>
            </div>
        </div> --}}
    </div>
    <div
        class="widget-container widget-container--grid bg-default image-slider-widget image-slider-widget--4">
        <div class="container-fluid">
            <div class="slider widget-slider" data-dots="true" data-arrows="false" data-autoplay="false"
                data-autoplay-speed="5000">
                <div class="slide bg-fallback slide-1">
                    <style>
                        .image-slider-widget--4 .slide-1 .tint-overlay:after {
                            opacity: 25%;
                        }
                    </style>
                    <div class="image image-absolute tint-overlay" data-scrollspeed=".05">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTAwIiBoZWlnaHQ9IjI1MDAiIHZpZXdCb3g9IjAgMCAyNTAwIDI1MDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="{{ asset('assets/img/about-2.jpg')}}"
                            alt="interior design company in Dubai" width="2500" height="2500">
                    </div>
                    <div
                        class="text text-white text-center flex flex-align-center flex-justify-center h-100">
                        <div class="text-inner">
                            {{-- <span class="subtitle">Founder Alua Kul</span> --}}
                            <h2 class=h2><i>“Our main approach is to bring peace, harmony, and freshness to
                                    your sanctuary home.”</i></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="widget-container widget-container--grid image-text-widget image-text-widget--left bg-default">
        <div class="container-fluid">
            <div class="flex-list flex-space-between">
                <div class="image-wrap">
                    <div class="image image-absolute">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="{{ asset('assets/img/about-3.jpg')}}"
                            alt="interior design company founder" width="2000" height="2000">
                    </div>
                </div>
                <div class="text text-links flex flex-direction-column flex-justify-center">
                    <div class="text-inner">
                        <h2 class=h3>Our <i>mission</i></h2>
                        <p>At Pannache Interiors, we prioritize Consistency, Creativity, and
                            Sustainability. Our aim is straightforward: to build relationships by
                            consistently delivering innovative designs that blend style with eco-friendly
                            practices. In Dubai's dynamic setting, we're committed to creating interiors
                            that truly stand the test of time.</p>
                        {{-- <div class="button-wrap">
                            <a class="text-button text-button--underlined" href="../services/index.html">
                                <span>View our services</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-container widget-container--grid cards-widget cards-widget--1 bg-default">
        <div class="container-fluid">
            <div class="flex-list">
                <a class="flex-col link-zoom-img bg-fallback" href="{{route('portfolio')}}">
                    <style>
                        .cards-widget--1 .flex-col {
                            --tintopacity-1: 10%;
                        }
                    </style>
                    <div class="text text-center text-white flex flex-direction-column flex-justify-end">
                        <span class="subtitle">Portfolio</span>
                        <h2 class=h3>Get <i>inspired</i>.</h2>
                        <div class="button-wrap">
                            <div class="text-button text-button--underlined">
                                <span>View our portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="image image-absolute gradient-overlay">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="{{ asset('assets/img/about.jpg')}}"
                            alt="DSC_6424" width="2000" height="2000">
                    </div>
                </a>
                <a class="flex-col link-zoom-img bg-fallback" href="{{route('services')}}">
                    <style>
                        .cards-widget--1 .flex-col {
                            --tintopacity-2: 10%;
                        }
                    </style>
                    <div class="text text-center text-white flex flex-direction-column flex-justify-end">
                        <span class="subtitle">Services</span>
                        <h2 class=h3><i>Tailored</i> solutions.</h2>
                        <div class="button-wrap">
                            <div class="text-button text-button--underlined">
                                <span>View our services</span>
                            </div>
                        </div>
                    </div>
                    <div class="image image-absolute gradient-overlay">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="{{ asset('assets/img/about.jpg')}}"
                            alt="DSC_2626" width="2000" height="2000">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
    @include('components.newsletter')
@endsection

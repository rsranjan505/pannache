@extends('layout.app')

@section('content')
<div class="multi-banner multi-banner--fullscreen">
    <div class="slide flex-list">
        <div class="image image-absolute tint-overlay" data-scrollspeed="0.1">
            <img data-no-lazy="1" class="img"
                src="{{('assets/img/contact-1.jpg')}}"
                alt="interior design company in Dubai" width="2500" height="2500">
        </div>
        <div class="text text-white text-center flex flex-align-center">
            <div class="text-inner">
                <span class="subtitle">Contact</span>
                <h1><i>Start creating</i> with us</h1>
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
    <div class="widget-container widget-container--grid contact-widget bg-default" id="contact-form">
        <div class="container-fluid">
            <div class="contact-wrap">
                <div class="widget-title">
                    <span class="subtitle">Call us +971 52 939 5579</span>
                    <h2 class=h2>Send us a message</h2>
                    <p>Please contact us via the following form and we will get back to you as soon as
                        possible</p>
                </div>
                <form enctype="multipart/form-data" method="POST" id="form1" novalidate>
                    <span class="hide"
                        data-success="Thank you for your message. We'll get back to you ASAP."></span>
                    <input type="hidden" name="pagetitle" value="Contact">
                    <input type="hidden" name="formrow" value="1">
                    <input type="hidden" name="formpageid" value="3946">
                    <input type="hidden" name="formtype" value="normal"><input type="hidden"
                        id="contact_form_widget" name="contact_form_widget" value="68ac49c64d" /><input
                        type="hidden" name="_wp_http_referer" value="/contact/" />
                    <div class="flex-list flex-space-between">
                        <div class="form-group border-input half-input" data-required data-fieldtype="tf">
                            <label for="first_name">First name *</label>
                            <div class="field-wrap">
                                <input placeholder="First name" id="first_name" name="first_name"
                                    type="text">
                            </div>
                            <div class="warning"></div>
                        </div>
                        <div class="form-group border-input half-input" data-required data-fieldtype="tf">
                            <label for="last_name">Last name *</label>
                            <div class="field-wrap">
                                <input placeholder="Last name" id="last_name" name="last_name" type="text">
                            </div>
                            <div class="warning"></div>
                        </div>
                        <div class="form-group border-input half-input" data-required data-fieldtype="tf">
                            <label for="email_address">Email address *</label>
                            <div class="field-wrap">
                                <input placeholder="Email address" id="email_address" name="email_address"
                                    type="email">
                            </div>
                            <div class="warning"></div>
                        </div>
                        <div class="form-group border-input half-input" data-fieldtype="tf">
                            <label for="contact_number">Contact number</label>
                            <div class="field-wrap">
                                <input placeholder="Contact number" id="contact_number"
                                    name="contact_number" type="tel">
                            </div>
                            <div class="warning"></div>
                        </div>
                        <div class="form-group border-input" data-fieldtype="ta">
                            <label for="your_message">Your message</label>
                            <div class="field-wrap"><textarea id="your_message" name="your_message" rows="4"
                                    placeholder="Type your message here..."></textarea></div>
                            <div class="warning"></div>
                        </div>
                        <div class="form-footer flex-list flex-align-center w-100 text-links">
                            <div class="form-group single-checkbox" data-required data-fieldtype="cb">
                                <div class="field-wrap">
                                    <input id="privacy_checkbox" type="checkbox" name="privacy_checkbox"
                                        value="Privacy Checkbox">
                                    <label for="privacy_checkbox">
                                        <p>I agree to the <a href="../privacy-policy/index.html">privacy
                                                policy.</a></p>
                                    </label>
                                </div>
                            </div>
                            <div class="button-wrap">
                                <button type="submit" name="submit"
                                    class="text-button text-button--underlined">
                                    <span>Submit form</span>
                                    <div class="spinner">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="form-group whole-input form_validation_container">
                            <input id="forms_verify" name="forms_verify" type="text">
                        </div>
                        <style>
                            .form_validation_container {
                                display: none !important;
                                position: absolute !important;
                                left: -9000px;
                            }
                        </style><input type="hidden" name="requiredfields" value="">
                    </div>
                </form>
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
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/DSC_6424.jpg?fit=1500%2C1000&ssl=1&w=2000&quality=85"
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
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/DSC_2626.jpg?fit=1000%2C1000&ssl=1&w=2000&quality=85"
                            alt="DSC_2626" width="2000" height="2000">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@include('components.newsletter')
@endsection

@extends('layout.app')

@section('content')
<div class="multi-banner multi-banner--fullscreen">
    <div class="slide flex-list">
        <div class="image image-absolute tint-overlay" data-scrollspeed="0.1">
            <img data-no-lazy="1" class="img"
                src="{{ asset('assets/img/service.jpg')}}"
                alt="interior design companies in dubai" width="2500" height="2500">
        </div>
        <div class="text text-white text-center flex flex-align-center">
            <div class="text-inner">
                <span class="subtitle">Services</span>
                <h1><i>Transform your space</i> with us</h1>
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
            <h2>Our services</h2>
            <p>Lumi works on a multitude of different projects, from private residential to large scale
                hospitality, from contemporary to classic, whilst honoring its commitment to excellence and
                sound design principles.</p>
            <p>All projects are created using the finest materials and finishes, in collaboration with the
                most talented artisans and the finest manufacturers in their field. The team manages
                projects end to end, ensuring the process is seamless and enjoyable.</p>
            <div class="button-container text-">
                <div class="button-wrap">
                    <a class="text-button text-button--underlined" href="#">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div
        class="widget-container widget-container--grid text-widget text-widget--center text-widget--animation-line text-center text-links bg-default half-padding">
        <div class="container-fluid container-fluid--sml">
            <h6>Services include</h6>
            <div class="button-container text-">
                <div class="button-wrap">
                    <a class="text-button text-button--underlined" href="#">
                        <span></span>
                    </a>
                </div>
            </div>
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
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/05/DSC_6131_HDR.jpg?fit=2500%2C1667&ssl=1&w=2000&quality=85"
                            alt="DSC_6131_HDR" width="2000" height="2000">
                    </div>
                </div>
                <div class="text text-links flex flex-direction-column flex-justify-center">
                    <div class="text-inner">
                        <h2 class=h3>Interior Design</h2>
                        <p>Conceptualization: Every great design begins with an idea. We happily
                            spend hours brainstorming, sketching, and visualizing concepts that lay
                            the foundation of the final design.</p>
                        <p>Space Planning: The essence of any interior lies in the effective utilization
                            of space. We analyze the spatial dynamics, ensuring each area serves a
                            purpose and flows seamlessly into the next</p>
                        <p>Material & Color Selection: The right palette and materials can transform a
                            space. We handpick textures, colors, and materials that resonate with the
                            client’s vision and the space’s ambiance.</p>
                        <p>3D Visualization: Before the physical transformation begins, we offer
                            clients a virtual tour of their space through detailed 3D renderings,
                            ensuring they're fully immersed and satisfied with the proposed design.</p>
                        {{-- <div class="button-wrap">
                            <a class="text-button text-button--underlined" href="../projects/index.html">
                                <span>View projects</span>
                            </a>
                        </div> --}}
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
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/10/tropical-beach-min.jpg?fit=1333%2C891&ssl=1&w=2000&quality=85"
                            alt="tropical-beach-min" width="2000" height="2000">
                    </div>
                </div>
                <div class="text text-links flex flex-direction-column flex-justify-center">
                    <div class="text-inner">
                        <h2 class=h3>Fitout Services</h2>
                        <p>Scope Definition: Full clarity on scope inclusions put together
                            systematically in the contract Bill of Quantities detailing the materials
                            used. This is crucial for visibility on the final project cost & also assists in
                            monitoring the compliance to the approved specifications. </p>
                        <p>Procurement: With a vast network of suppliers and artisans, we source
                            the best quality materials and furnishings that align with the design vision
                            and budget</p>
                        <p>Installation: Skilled craftsmen, with years of experience, ensure that every
                            piece (detail is crafted to perfection. We believe in continuous further
                            enhancements during the fitout phase & this is carefully achieved by close
                            & continuous supervision by our talented team adding value to the final
                            product).</p>
                        <p>Quality Control: We follow a stringent quality-check process. At every
                            stage, we ensure that the work aligns with our high standards and the
                            client's expectations.
                            </p>
                        <p>Final Handover: Once every detail is in place and has undergone rigorous
                            checks, we hand over the space to our clients, ensuring it's ready to
                            create memories. The project closeout document includes as-built
                            drawings, specifications, care & maintenance guidelines for future
                            reference. </p>
                    </div>
                </div>
            </div>
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
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/04/KR703057-min.jpg?fit=2000%2C1333&ssl=1&w=2000&quality=85"
                            alt="KR703057-min" width="2000" height="2000">
                    </div>
                </div>
                <div class="text text-links flex flex-direction-column flex-justify-center">
                    <div class="text-inner">
                        <h2 class=h3>Project Management</h2>
                        <p>Initiation & Planning: Every project starts with a clear understanding of the
                            client’s needs. We chart out a detailed plan with timelines, budgets and
                            set milestones to ensure everything runs on schedule.
                        </p>
                        <p>Coordination: Effective coordination between designers, suppliers, and
                            subject matter experts is crucial. We serve as the central point, ensuring
                            everyone is aligned with the project’s objectives, specially the quality
                            parameters established at the start of the project.</p>
                        <p>Budget Management: A well-executed project respects its budget. We
                            ensure all expenses are tracked, optimized, and stay within the agreedupon budget, without compromising on quality. In case of scope creep all
                            variation costs are documented and agreed with the client immediately for
                            continued execution as per the project milestones.</p>
                        <p>Completion & Review: Once the project is complete, we conduct a
                            thorough review, addressing any final tweaks or accessorizing for superior
                            experience . Our aim is to ensure the client's utmost satisfaction at all
                            times, every time because we value developing relationships above
                            everything else.</p>
                        {{-- <div class="button-wrap">
                            <a class="text-button text-button--underlined" href="../projects/index.html">
                                <span>View projects</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div
        class="widget-container widget-container--grid bg-default image-slider-widget image-slider-widget--7">
        <div class="container-fluid">
            <div class="slider widget-slider" data-dots="true" data-arrows="false" data-autoplay="false"
                data-autoplay-speed="5000">
                <div class="slide bg-fallback slide-1">
                    <style>
                        .image-slider-widget--7 .slide-1 .tint-overlay:after {
                            opacity: 25%;
                        }
                    </style>
                    <div class="image image-absolute tint-overlay" data-scrollspeed=".05">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTAwIiBoZWlnaHQ9IjI1MDAiIHZpZXdCb3g9IjAgMCAyNTAwIDI1MDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/12/LumiInteriorsStudio091023_NateleeCocks_012.jpg?fit=3974%2C5961&ssl=1&w=2500&quality=85"
                            alt="interior design company" width="2500" height="2500">
                    </div>
                    <div
                        class="text text-white text-center flex flex-align-center flex-justify-center h-100">
                        <div class="text-inner">
                            <span class="subtitle">The very first step</span>
                            <h2 class=h2><i>"Key of every successful project is to bring client’s
                                    requirements and aspirations to life."</i></h2>
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
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/DSC_4414.jpg?fit=1500%2C1000&ssl=1&w=2000&quality=85"
                            alt="DSC_4414" width="2000" height="2000">
                    </div>
                </div>
                <div class="text text-links flex flex-direction-column flex-justify-center">
                    <div class="text-inner">
                        <h2 class=h4>Brief</h2>
                        <p>A comprehensive brief is integral to every successful project, in order to bring
                            client’s requirements and aspirations to live. The very first briefing stage is
                            to learn about how the client is going to use the space, their lifestyle needs,
                            preferences and aspirations. Lumi’s proposals are then created with an
                            understanding of the budget and timeline requirements</p>
                        <p>The Lumi team will make a site visit or work from floor plans and photographs to
                            build a picture of the project that allows for the creation of a proposal This
                            is then submitted to the client with an estimated quotation for FF&amp;E and the
                            design fee.</p>
                        <div class="button-wrap">
                            <a class="text-button text-button--underlined" href="../contact/index.html">
                                <span>Get in touch</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div
        class="widget-container widget-container--grid image-text-widget image-text-widget--right bg-default">
        <div class="container-fluid">
            <div class="flex-list flex-space-between">
                <div class="image-wrap">
                    <div class="image image-absolute">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/03/masterrev4-2.jpg?fit=2500%2C1333&ssl=1&w=2000&quality=85"
                            alt="masterrev4-2" width="2000" height="2000">
                    </div>
                </div>
                <div class="text text-links flex flex-direction-column flex-justify-center">
                    <div class="text-inner">
                        <h2 class=h4>Concept</h2>
                        <p>A detailed presentation is prepared for each of our clients. It is tailored for
                            every client to help them visualise every aspect of design. Each client
                            presentation will include inspirational sketches, mood boards, coloured
                            elevations of every room for suggested joinery and furniture, and a sample board
                            with all materials and finishes. The concept presentation can either be made in
                            person or digitally, but during this collaborative stage we invite our clients
                            to give as much feedback as possible to ensure complete alignment.</p>
                        <div class="button-wrap">
                            <a class="text-button text-button--underlined" href="../projects/index.html">
                                <span>View our projects</span>
                            </a>
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
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/DSC_6416.jpg?fit=1500%2C1000&ssl=1&w=2000&quality=85"
                            alt="DSC_6416" width="2000" height="2000">
                    </div>
                </div>
                <div class="text text-links flex flex-direction-column flex-justify-center">
                    <div class="text-inner">
                        <h2 class=h4>Detail</h2>
                        <p>After obtaining the client’s approval, we continue to the detailed design process
                            stage. All final joinery, furniture and interior architecture drawings are
                            presented to the client with the final finishes and materials, art and
                            accessories for the clients feedback, and ultimate sign-off.</p>
                        <p>Once the schedule of works us outlined and agreed, Lumi’s project coordinators
                            and designers will attend regular site meetings to ensure the design process is
                            being carried out to its exacting specifications and that the project is
                            progressing as planned. Lumi will update the client with regular communication
                            until the project is finished and ensure that the final stage is exactly as per
                            expectations and is faithful to the initial vision.</p>
                        <div class="button-wrap">
                            <a class="text-button text-button--underlined" href="../about-us/index.html">
                                <span>More about Lumi</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
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
                <a class="flex-col link-zoom-img bg-fallback" href="{{route('contact')}}">
                    <style>
                        .cards-widget--1 .flex-col {
                            --tintopacity-2: 10%;
                        }
                    </style>
                    <div class="text text-center text-white flex flex-direction-column flex-justify-end">
                        <span class="subtitle">Contact</span>
                        <h2 class=h3>Start <i>creating</i>.</h2>
                        <div class="button-wrap">
                            <div class="text-button text-button--underlined">
                                <span>Get in touch</span>
                            </div>
                        </div>
                    </div>
                    <div class="image image-absolute gradient-overlay">
                        <img data-lazyloaded="1"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAwIiBoZWlnaHQ9IjIwMDAiIHZpZXdCb3g9IjAgMCAyMDAwIDIwMDAiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNmZmZmZmY7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+"
                            class="img"
                            data-src="https://i0.wp.com/lumi-interiors.com/uploads/2023/02/DSC_5662.jpg?fit=667%2C1000&ssl=1&w=2000&quality=85"
                            alt="DSC_5662" width="2000" height="2000">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@include('components.newsletter')
@endsection

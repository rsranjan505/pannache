@extends('layout.app')

@section('content')
<section class="hero-section jarallax d-flex align-items-center justify-content-center padding-medium pb-5" style="background: url({{ asset('assets/img/service.jpg')}}) no-repeat;">
    <div class="hero-content">
      <div class="container">
        <div class="row">
          <div class="text-center padding-large no-padding-bottom">
            <h1>Services</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="{{ route('home')}}">Home ></a>
              </span>
              <span class="item">Services</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="company-services" class="padding-xlarge">
    <div class="container">
      <div class="row">
        <div class="about-text" style="text-align: center;">
            <h4 class="py-3">In a city that never settles for the ordinary, Pannache Interiors is
                dedicated to creating spaces that mirror Dubai’s magnificent spirit.</h4>
            <p>Based in the dynamic hub of Dubai, Pannache Interiors stands as a
            paradigm of magnificent design solutions with authentic elegance &
            precision-driven fitouts. Merging rich heritage with top trends in global
            aesthetics, we believe in the transformative power of thoughtfully crafted
            spaces that leave a lasting impression.</p>
        </div>

      </div>
    </div>
  </section>
  <section id="about" data-aos="fade" data-aos-once="true">
    <div class="container">
      <div class="row position-relative">
        <div class="col-lg-8">
          <div class="image-holder zoom-out">
            <img src="{{ asset('assets/img/service-1.jpg')}}" alt="single" class="single-image img-fluid">
          </div>
        </div>
        <div class="about-content col-lg-4 m-auto top-0 end-0 bottom-0">
          <h4> Interior Design</h4>

          <p>Conceptualization: Every great design begins with an idea. We happily
            spend hours brainstorming, sketching, and visualizing concepts that lay
            the foundation of the final design</p>
        <p>Space Planning: The essence of any interior lies in the effective utilization
            of space. We analyze the spatial dynamics, ensuring each area serves a
            purpose and flows seamlessly into the next.</p>
            <p>Space Planning: The essence of any interior lies in the effective utilization
                of space. We analyze the spatial dynamics, ensuring each area serves a
                purpose and flows seamlessly into the next.</p>
            <p>Material & Color Selection: The right palette and materials can transform a
                space. We handpick textures, colors, and materials that resonate with the
                client’s vision and the space’s ambiance.</p>
            <p>3D Visualization: Before the physical transformation begins, we offer
                clients a virtual tour of their space through detailed 3D renderings,
                ensuring they're fully immersed and satisfied with the proposed design</p>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="margin-section">
        <div class="image-holder zoom-out">
            <img src="{{ asset('assets/img/service-2.jpg')}}" alt="single" class="single-image img-fluid">
        </div>
    </div>
</div>

  <section id="about" data-aos="fade" data-aos-once="true">
    <div class="container">
      <div class="row position-relative">
        <div class="col-lg-8">
          <div class="image-holder zoom-out">
            <img src="{{ asset('assets/img/service-3.jpg')}}" alt="single" class="single-image img-fluid">
          </div>
        </div>
        <div class="about-content col-lg-4 m-auto top-0 end-0 bottom-0">
          <h4>Fitout Services </h4>

          <p>Scope Definition: Full clarity on scope inclusions put together
            systematically in the contract Bill of Quantities detailing the materials
            used. This is crucial for visibility on the final project cost & also assists in
            monitoring the compliance to the approved specifications.</p>
            <p>Procurement: With a vast network of suppliers and artisans, we source
                the best quality materials and furnishings that align with the design vision
                and budget.</p>
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
                reference</p>
        </div>
      </div>
    </div>
  </section>

    <div class="container">
        <div class="margin-section">
            <div class="image-holder zoom-out">
                <img src="{{ asset('assets/img/service-4.jpg')}}" alt="single" class="single-image img-fluid">
            </div>
        </div>
    </div>


<section id="about" data-aos="fade" data-aos-once="true">
<div class="container">
  <div class="row position-relative">
    <div class="col-lg-8">
      <div class="image-holder zoom-out">
        <img src="{{ asset('assets/img/service-5.jpg')}}" alt="single" class="single-image img-fluid">
      </div>
    </div>
    <div class="about-content col-lg-4 m-auto top-0 end-0 bottom-0">
      <h4>Project Management</h4>

      <p>Initiation & Planning: Every project starts with a clear understanding of the
        client’s needs. We chart out a detailed plan with timelines, budgets and
        set milestones to ensure everything runs on schedule.</p>
    <p>Coordination: Effective coordination between designers, suppliers, and
        subject matter experts is crucial. We serve as the central point, ensuring
        everyone is aligned with the project’s objectives, specially the quality
        parameters established at the start of the project.</p>
        <p>Budget Management: A well-executed project respects its budget. We
            ensure all expenses are tracked, optimized, and stay within the agreedupon budget, without compromising on quality. In case of scope creep all
            variation costs are documented and agreed with the client immediately for
            continued execution as per the project milestones. </p>
        <p>Completion & Review: Once the project is complete, we conduct a
            thorough review, addressing any final tweaks or accessorizing for superior
            experience . Our aim is to ensure the client's utmost satisfaction at all
            times, every time because we value developing relationships above
            everything else.</p>
    </div>
  </div>
</div>
</section>
<div class="container">
    <div class="margin-section">
        <div class="image-holder zoom-out">
            <img src="{{ asset('assets/img/service-2.jpg')}}" alt="single" class="single-image img-fluid">
        </div>
    </div>
</div>
@endsection

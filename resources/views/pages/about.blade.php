@extends('layout.app')

@section('content')
<section class="hero-section jarallax d-flex align-items-center justify-content-center padding-medium pb-5" style="background: url({{ asset('assets/img/about.jpg')}}) no-repeat;">
    <div class="hero-content">
      <div class="container">
        <div class="row">
          <div class="text-center padding-large no-padding-bottom">
            <h1>About</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="{{ route('home')}}">Home ></a>
              </span>
              <span class="item">About</span>
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
            <img src="{{ asset('assets/img/about-1.jpg')}}" alt="single" class="single-image img-fluid">
          </div>
        </div>
        <div class="about-content col-lg-4 m-auto top-0 end-0 bottom-0">
          <span class="title-accent fs-6 text-uppercase">Why us</span>

          <p>Unwavering Quality: Our commitment to excellence is reflected in every
            detail, from start to finish.</p>
            <p>Sustainable Choices: We blend design with sustainability, ensuring
                spaces are both stunning and responsible.</p>
            <p>Innovative Designs: We merge modern aesthetics with timeless elegance,
                creating unique spaces every time (reflection of your personality -
                residential & and business booster - commercial)</p>
            <p>Client First: Your vision is central to our process, making collaboration key
                to every project's success. We engage you every step of the way so you
                design with us.</p>
            <p>Seamless Integration: We offer a smooth transition from design to fit-out &
                project management, ensuring complete peace of mind.
                </p>
            <p>Full Transparency: Clear communication and honesty are cornerstones of
                our approach, so you're always in the loop.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonials" class="position-relative margin-xlarge">
    <div class="container">
      <div class="row">
        <div class="offset-md-2 col-md-8">
          <h3 class="display-7 text-center mb-5" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">Our Mission</h3>
          <div class="review-content position-relative" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1500" data-aos-once="true">
            <div class="swiper testimonial-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item">
                    <blockquote class="fs-1 fw-light">“At Pannache Interiors, we prioritize Consistency, Creativity, and
                        Sustainability. Our aim is straightforward: to build relationships by
                        consistently delivering innovative designs that blend style with eco-friendly
                        practices. In Dubai's dynamic setting, we're committed to creating interiors
                        that truly stand the test of time”</blockquote>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

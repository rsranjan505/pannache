@extends('layout.app')

@section('content')

<section id="billboard" class="position-relative overflow-hidden">
    <div class="swiper-slide" style="background-image: url({{asset('assets/img/about.jpg')}}); background-size: cover; background-repeat: no-repeat; height: 100vh; background-position: center;">
        <div class="container ">
        <div class="row">
            <div class="offset-md-1 col-md-6">
            <div class="banner-content">
                <h2>Ceramic soft pot</h2>
                <p class="fs-3">This ceramic soft pot is specially designed by concept of traditional designs.</p>
                <a href="single-product.html" class="btn">Shop Now</a>
            </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        </div>
    </div>
</section>
  <section id="about" class="padding-xlarge">
    <div class="container">
      <div class="row">
        <div class="offset-md-2 col-md-8" style="text-align: center;">
          <h3 class="py-3" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">About us</h3>
          <h5 class="py-3" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1500" data-aos-once="true">“In a city that never settles for the ordinary, Pannache Interiors is dedicated to creating spaces that mirror Dubai’s magnificent spirit."</h5>
          <p data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1800" data-aos-once="true">Based in the dynamic hub of Dubai, Pannache Interiors stands as a paradigm of magnificent design solutions with authentic elegance & precision-driven fitouts. Merging rich heritage with top trends in global aesthetics, we believe in the transformative power of thoughtfully crafted spaces that leave a lasting impression.</p>
        </div>
      </div>
    </div>
  </section>

  {{-- <section id="products" class="product-store position-relative">
    <div class="container display-header d-flex flex-wrap justify-content-between pb-4">
      <h3 class="mt-3">Best selling Items</h3>
      <div class="btn-right d-flex flex-wrap align-items-center">
        <a href="shop.html" class="btn me-5">View all items</a>
        <div class="swiper-buttons">
          <button class="swiper-prev product-carousel-prev me-2">
            <svg width="41" height="41"><use xlink:href="#angle-left"></use></svg>
          </button>
          <button class="swiper-next product-carousel-next">
            <svg width="41" height="41"><use xlink:href="#angle-right"></use></svg>
          </button>
        </div>
      </div>
    </div>
    <div class="swiper product-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="product-card position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/product-item1.jpg" alt="product-item" class="img-fluid zoom-in">
              <div class="cart-concern position-absolute">
                <div class="cart-button">
                  <a href="#" class="btn">Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="card-detail text-center pt-3 pb-2">
              <h5 class="card-title fs-3 text-capitalize">
                <a href="single-product.html">Matt Black</a>
              </h5>
              <span class="item-price text-primary fs-3 fw-light">$870</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-card position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/product-item2.jpg" alt="product-item" class="img-fluid zoom-in">
              <div class="cart-concern position-absolute">
                <div class="cart-button">
                  <a href="#" class="btn">Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="card-detail text-center pt-3 pb-2">
              <h5 class="card-title fs-3 text-capitalize">
                <a href="single-product.html">Oldie Off-White</a>
              </h5>
              <span class="item-price text-primary fs-3 fw-light">$680</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-card position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/product-item3.jpg" alt="product-item" class="img-fluid zoom-in">
              <div class="cart-concern position-absolute">
                <div class="cart-button">
                  <a href="#" class="btn">Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="card-detail text-center pt-3 pb-2">
              <h5 class="card-title fs-3 text-capitalize">
                <a href="single-product.html">Vintage With Handle</a>
              </h5>
              <span class="item-price text-primary fs-3 fw-light">$750</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-card position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/product-item4.jpg" alt="product-item" class="img-fluid zoom-in">
              <div class="cart-concern position-absolute">
                <div class="cart-button">
                  <a href="#" class="btn">Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="card-detail text-center pt-3 pb-2">
              <h5 class="card-title fs-3 text-capitalize">
                <a href="single-product.html">Opposite Pattern</a>
              </h5>
              <span class="item-price text-primary fs-3 fw-light">$650</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-card position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/product-item5.jpg" alt="product-item" class="img-fluid zoom-in">
              <div class="cart-concern position-absolute">
                <div class="cart-button">
                  <a href="#" class="btn">Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="card-detail text-center pt-3 pb-2">
              <h5 class="card-title fs-3 text-capitalize">
                <a href="single-product.html">Shell Shape</a>
              </h5>
              <span class="item-price text-primary fs-3 fw-light">$750</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-card position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/product-item2.jpg" alt="product-item" class="img-fluid zoom-in">
              <div class="cart-concern position-absolute">
                <div class="cart-button">
                  <a href="#" class="btn">Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="card-detail text-center pt-3 pb-2">
              <h5 class="card-title fs-3 text-capitalize">
                <a href="single-product.html">Oldie Off-White</a>
              </h5>
              <span class="item-price text-primary fs-3 fw-light">$750</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-card position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/product-item4.jpg" alt="product-item" class="img-fluid zoom-in">
              <div class="cart-concern position-absolute">
                <div class="cart-button">
                  <a href="#" class="btn">Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="card-detail text-center pt-3 pb-2">
              <h5 class="card-title fs-3 text-capitalize">
                <a href="single-product.html">Opposite Pattern</a>
              </h5>
              <span class="item-price text-primary fs-3 fw-light">$750</span>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-card position-relative">
            <div class="image-holder zoom-effect">
              <img src="images/product-item3.jpg" alt="product-item" class="img-fluid zoom-in">
              <div class="cart-concern position-absolute">
                <div class="cart-button">
                  <a href="#" class="btn">Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="card-detail text-center pt-3 pb-2">
              <h5 class="card-title fs-3 text-capitalize">
                <a href="single-product.html">Vintage With Handle</a>
              </h5>
              <span class="item-price text-primary fs-3 fw-light">$750</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <section id="our-video" class="margin-section">
    <div class="video-section jarallax d-flex align-items-center justify-content-center" style="background: url({{ asset("assets/img/bg-2.jpg")}}) no-repeat;">
      <div class="video-player text-center">
        <a type="button" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/W_tIumKa8VY" data-bs-target="#myModal" class="play-btn position-relative">
          <svg class="position-absolute top-0 bottom-0 start-0 end-0 m-auto" width="41" height="41"><use xlink:href="#play"></use></svg>
          <img src="{{ asset('assets/img/text-pattern.png')}}" alt="pattern" class="text-pattern">
        </a>
      </div>
    </div>
  </section>

  {{-- <section id="testimonials" class="position-relative padding-xlarge">
    <div class="container">
      <div class="row">
        <div class="offset-md-2 col-md-8">
          <h3 class="text-center mb-5" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">What our customers says</h3>
          <div class="review-content position-relative" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1500" data-aos-once="true">
            <div class="swiper testimonial-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item">
                    <blockquote class="fs-1 fw-light">“A pellen tesque pretium feugiat vel morbi sagittis lorem habi tasse cursus. Suspen dise tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis.”</blockquote>
                    <div class="author-detail">
                      <div class="name fw-bold text-uppercase pt-2">Anna garcia</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item">
                    <blockquote class="fs-1 fw-light">“A pellen tesque pretium feugiat vel morbi sagittis lorem habi tasse cursus. Suspen dise tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis.”</blockquote>
                    <div class="author-detail">
                      <div class="name fw-bold text-uppercase pt-2">Anna garcia</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item">
                    <blockquote class="fs-1 fw-light">“A pellen tesque pretium feugiat vel morbi sagittis lorem habi tasse cursus. Suspen dise tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis.”</blockquote>
                    <div class="author-detail">
                      <div class="name fw-bold text-uppercase pt-2">Anna garcia</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-buttons text-center mt-5" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1800" data-aos-once="true">
            <button class="swiper-prev testimonial-arrow-prev me-2">
              <svg width="41" height="41"><use xlink:href="#arrow-left"></use></svg>
            </button>
            <span>|</span>
            <button class="swiper-next testimonial-arrow-next ms-2">
              <svg width="41" height="41"><use xlink:href="#arrow-right"></use></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  {{-- <section id="faqs" class="padding-xlarge">
    <div class="container">
      <div class="row">
        <div class="offset-md-2 col-md-8">
          <h3 class="text-center mb-5" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">Some FAQs</h3>
          <div class="accordion accordion-flush" id="accordionFlush" data-aos="fade" data-aos-easing="ease-in" data-aos-duration="1500" data-aos-once="true">
            <div class="accordion-item">
              <h4 class="accordion-header" id="flush-headingOne3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                  I got my vase but some items are broken, what to do?
                </button>
              </h4>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Et id sapien id enim, sit tempor cursus elit, fusce. Nunc tristique facilisis consectetur at vivamus ut porta porta aliquam blandit vitae vehicula leo nullam urna, scelerisque unc lectus.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h4 class="accordion-header" id="flush-headingTwo3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="true" aria-controls="flush-collapseTwo">
                  Can i return them if I don't like the items I bought?
                </button>
              </h4>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Et id sapien id enim, sit tempor cursus elit, fusce. Nunc tristique facilisis consectetur at vivamus ut porta porta aliquam blandit vitae vehicula leo nullam urna, scelerisque unc lectus.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h4 class="accordion-header" id="flush-headingThree3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="true" aria-controls="flush-collapseThree">
                  Will we get discount if we will order many vase?
                </button>
              </h4>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Et id sapien id enim, sit tempor cursus elit, fusce. Nunc tristique facilisis consectetur at vivamus ut porta porta aliquam blandit vitae vehicula leo nullam urna, scelerisque unc lectus.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h4 class="accordion-header" id="flush-headingFour3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                  Are there refunds for sale items or some special orders?
                </button>
              </h4>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Et id sapien id enim, sit tempor cursus elit, fusce. Nunc tristique facilisis consectetur at vivamus ut porta porta aliquam blandit vitae vehicula leo nullam urna, scelerisque unc lectus.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h4 class="accordion-header" id="flush-headingFive3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="true" aria-controls="flush-collapseFive">
                  How long will it take to get my first order?
                </button>
              </h4>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>Et id sapien id enim, sit tempor cursus elit, fusce. Nunc tristique facilisis consectetur at vivamus ut porta porta aliquam blandit vitae vehicula leo nullam urna, scelerisque unc lectus.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <section id="banner" data-aos="fade" data-aos-once="true">
    <div class="banner-content-1 position-relative" style="background:url('{{ asset('assets/img/about.jpg')}}') no-repeat left; background-size: cover; height: 100%;">
      <div class="banner-content-text position-absolute" data-aos="fade" data-aos-delay="1000" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">
        {{-- <h2>Service</h2> --}}
        <a href="{{route('services')}}" class="btn">Service</a>
      </div>
    </div>
    <div class="banner-content-2 position-relative" style="background:url('{{ asset('assets/img/about-3.jpg')}}') no-repeat left; background-size: cover; height: 100%;">
      <div class="banner-content-text position-absolute" data-aos="fade" data-aos-delay="1000" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">
        {{-- <h2>Double handle</h2> --}}
        <a href="{{route('portfolio')}}" class="btn">Portfolio</a>
      </div>
    </div>
    <div class="banner-content-3 position-relative" style="background:url('{{ asset('assets/img/about-2.jpg')}}') no-repeat left; background-size: cover; height: 100%;">
      <div class="banner-content-text position-absolute" data-aos="fade" data-aos-delay="1000" data-aos-easing="ease-in" data-aos-duration="1000" data-aos-once="true">
        <a href="{{route('contact')}}" class="btn">Contact us</a>
      </div>
    </div>
  </section>


  @include('components.modals.vedio-modal')
@endsection

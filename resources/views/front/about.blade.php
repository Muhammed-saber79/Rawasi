@extends('layouts.front')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>{{ __('index.About') }}</h2>
      <ol>
        <li><a href="{{ route('index') }}">{{ __('index.Home') }}</a></li>
        <li>{{ __('index.About') }}</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row position-relative" @if(App::getLocale() != 'en') dir='ltr' @endif>

        <div class="col-lg-7 about-img" style="background-image: url('{{ asset('assets/img/about.jpg') }}');"></div>

        <div class="col-lg-7">
          <h2>{{ __('index.Rawasi Real Estate') }}</h2>
          <div class="our-story" @if(App::getLocale() != 'en') dir='rtl' @endif>
            <h4>{{ __('index.Established in 2007') }}</h4>
            <h3>{{ __('index.Our Story') }}</h3>
            <p>
              {{ __('index.story') }}
            </p>
            <ul>
              <li><i class="bi bi-check-circle mx-1"></i> <span>{{ __('index.Our vision is to be a major professional real estate gate') }}</span></li>
              <li><i class="bi bi-check-circle mx-1"></i> <span>{{ __('index.Our mission is to build a real long-term partnership with the community') }}</span></li>
            </ul>

            <div class="watch-video d-flex align-items-center position-relative">
              <i class="bi bi-play-circle mx-1"></i>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">{{ __('index.Watch Video') }}</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End About Section -->

  <!-- ======= Stats Counter Section ======= -->
  <section id="stats-counter" class="stats-counter section-bg">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>{{ __('index.Happy Clients') }}</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>{{ __('index.Projects-count') }}</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-headset color-green flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>{{ __('index.Hours Of Support') }}</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex align-items-center w-100 h-100">
            <i class="bi bi-people color-pink flex-shrink-0"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>{{ __('index.Hard Workers') }}</p>
            </div>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>
  </section><!-- End Stats Counter Section -->

  <!-- ======= Our Strategic Goals Section ======= -->
  <section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-6 img-bg" style="background-image: url('{{ asset('assets/img/alt-services.jpg') }}');" data-aos="zoom-in" data-aos-delay="100"></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>{{ __('index.Our Strategic Goals') }}</h3>

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <i class="mx-3 fa-solid fa-hotel"></i>
            <div>
              <h4>{{ __('index.Urban Development') }}</h4>
              <p>
                {{ __('index.Contribute to urban development through distinguished real estate projects.') }}
              </p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="mx-3 fa-solid fa-seedling"></i>
            <div>
              <h4>{{ __('index.Environment Caring') }}</h4>
              <p>
                {{ __('index.Caring for the environment and contributing to community service.') }}
              </p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="mx-3 fa-solid fa-sack-dollar"></i>
            <div>
              <h4>{{ __('index.Cash Flow Sustainability') }}</h4>
              <p>
                {{ __('index.Maintaining the continuity growth of cash flows.') }}
              </p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="mx-3 bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4>{{ __('index.Innovation') }}</h4>
              <p>
                {{ __('index.Providing diverse and innovative profitable Real estate investment products.') }}
              </p>
            </div>
          </div><!-- End Icon Box -->

        </div>
      </div>

    </div>
  </section><!-- End Our Strategic Goals Section -->
 
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>{{ __('index.Testimonials') }}</h2>
        <p>{{ __('index.Client Testimonials: Inspiring Stories from Our Customers') }}</p>
      </div>

      <div class="slides-2 swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->

<div class="text-center my-5 mx-auto">
  <hr class="w-75 m-auto my-5">
  <a href="{{ route('contact') }}">
    <button class="btn-contact-us">{{ __('index.Contact') }}</button>
  </a>
</div>
@endsection
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

</main><!-- End #main -->

<div class="text-center my-5 mx-auto">
  <hr class="w-75 m-auto my-5">
  <a href="{{ route('contact') }}">
    <button class="btn-contact-us">{{ __('index.Contact') }}</button>
  </a>
</div>
@endsection
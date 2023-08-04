@extends('layouts.front')
@section('content')
    
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>{{ __('index.Services') }}</h2>
        <ol>
          <li><a href="index.html">{{ __('index.Home') }}</a></li>
          <li>{{ __('index.Services') }}</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{ __('index.Services') }}</h2>
          <p>{{ __('index.Our Outstanding Services: Quality and Professionalism in Every Real Estate Aspect') }}</p>
        </div>

        <div class="row gy-4">

          <div id="service-1" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-building"></i>
                </div>
                <h3>{{ __('index.Real estate investment and development') }}</h3>
                <p>
                  {{ __('index.service-1') }}
                </p>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-2" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-people-group"></i>
                </div>
                <h3>{{ __('index.Real estate marketing') }}</h3>
                <p>
                  {{ __('index.service-2') }}
                </p>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-3" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-coins"></i>
                </div>
                <h3>{{ __('index.Organize financing') }}</h3>
                <p>
                  <p>
                    {{ __('index.service-3') }}
                  </p>
                </p>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-4" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-compass-drafting"></i>
                </div>
                <h3>{{ __('index.Studies') }}</h3>
                <p>
                  <p>
                    {{ __('index.service-4') }}
                  </p>
                </p>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-5" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-calendar-days"></i>
                </div>
                <h3>{{ __('index.Facility Management Division') }}</h3>
                <p>
                  {{ __('index.service-5') }}
                </p>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-6" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-landmark"></i>
                </div>
                <h3>{{ __('index.Create and manage real estate portfolios and private endowments') }}</h3>
                <p>
                  {{ __('index.service-6') }}
                </p>
              </div>

            </div>
          </div><!-- End Service Item -->

        </div>
      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <div class="text-center my-5 mx-auto">
    <hr class="w-75 m-auto my-5">
    <a href="{{ route('contact') }}">
      <button class="btn-contact-us">{{ __('index.Contact') }}</button>
    </a>
  </div>

@endsection
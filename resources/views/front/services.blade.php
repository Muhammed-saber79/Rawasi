@extends('layouts.front')
@section('content')
    
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>{{ __('index.Services') }}</h2>
        <ol>
        <li><a href="{{ route('index') }}">{{ __('index.Home') }}</a></li>
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
                  <i class="fa-solid fa-money-bill"></i> <!-- Use fa-money-bill icon for Real estate investment -->
                </div>
                <h3>{{ __('index.Real estate investment') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {{ __('index.service-1') }}
                </h6>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-2" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-hammer"></i> <!-- Use fa-hammer icon for Real estate development -->
                </div>
                <h3>{{ __('index.Real estate development') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {{ __('index.service-2') }}
                </h6>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-3" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-people-group"></i>
                </div>
                <h3>{{ __('index.Real estate marketing') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {{ __('index.service-3') }}
                </h6>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-4" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-calendar-days"></i>
                </div>
                <h3>{{ __('index.Asset Management') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {!! __('index.service-4') !!}
                </h6>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-5" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-coins"></i>
                </div>
                <h3>{{ __('index.Fund Management') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {{ __('index.service-5') }}
                </h6>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-6" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-compass-drafting"></i>
                </div>
                <h3>{{ __('index.Studies') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {!! __('index.service-6') !!}
                </h6>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-7" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-cogs"></i>
                </div>
                <h3>{{ __('index.Facility Management') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {{ __('index.service-7') }}
                </h6>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-8" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-landmark"></i>
                </div>
                <h3>{{ __('index.Create and manage real estate portfolios and private endowments') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {{ __('index.service-8') }}
                </h6>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-9" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-tasks"></i> <!-- You can use the fa-tasks icon for Project Management -->
                </div>
                <h3>{{ __('index.Project Management') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {!! __('index.service-9') !!}
                </h6>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div id="service-10" class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-home"></i> <!-- You can use the fa-home icon for Real Estate Mediation -->
                </div>
                <h3>{{ __('index.Real Estate Mediation') }}</h3>
                <h6 style="line-height: 1.5;" class="w-100 text-justify">
                  {{ __('index.service-10') }}
                </h6>
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
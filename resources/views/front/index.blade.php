@extends('layouts.front')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-block">

    <div id="hero-carousel">

      <!-- Video -->
      <video id="intro-video" controls="false" poster playsinline autoplay loop muted>
        <source src="assets/video/intro.mp4" type="video/mp4">
      </video>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="get-started" class="about-index">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{ __('index.About Us') }}</h2>
          <p>
          {{ __('index.Rawasi real estate is a Saudi corporation with limited responsibility, its headquarters in Riyadh. It was established in 2007 by a group of local shareholders with long experience in fields of real estate services,architecture, engineering and contracting in order to work in the field of real estate industry in its comprehensive concept. Listed below services that Rawasi is proud to provide to its clients') }}
          </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item h-100">
              <div class="row">
                {{-- <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-1.jpg);"></div>
                </div> --}}
             
                  <div class="card-body text-center h-100">
                    <h4 class="card-title">{{ __('index.Our Vision') }}</h4>
                    <p style="color: #445f79">
                    {{ __('index.To be a major professional real estate gate in the real estate developing industry in KSA and the region.') }}
                    </p>
                  </div>
              
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item h-100">
              <div class="row">
                {{-- <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-3.jpg);"></div>
                </div> --}}
               
                  <div class="card-body text-center h-100">
                    <h4 class="card-title">{{ __('index.Our Mission') }}</h4>
                    <p style="color: #445f79">
                    {{ __('index.Building a real long-term partnership with the community by producing distinguished real estate development projects according to the highest quality standards available to serve the needs of all segments.') }}
                    </p>
                  </div>
               
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg"> 
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{ __('index.Services') }}</h2>
          <p>{{ __('index.Our Outstanding Services: Quality and Professionalism in Every Real Estate Aspect') }}</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-building"></i>
                </div>
                <h3>{{ __('index.Real estate investment and development') }}</h3>
              </div>

              <div>
                <hr>
                <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                  <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                </a>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-people-group"></i>
                </div>
                <h3>{{ __('index.Real estate marketing') }}</h3>
              </div>

              <div>
                <hr>
                <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                  <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                </a>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-coins"></i>
                </div>
                <h3>{{ __('index.Organize financing') }}</h3>
              </div>

              <div>
                <hr>
                <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                  <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                </a>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-compass-drafting"></i>
                </div>
                <h3>{{ __('index.Studies') }}</h3>
              </div>

              <div>
                <hr>
                <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                  <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                </a>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-calendar-days"></i>
                </div>
                <h3>{{ __('index.Facility Management Division') }}</h3>
              </div>

              <div>
                <hr>
                <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                  <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                </a>
              </div>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
              <div>
                <div class="icon">
                  <i class="fa-solid fa-landmark"></i>
                </div>
                <h3>{{ __('index.Create and manage real estate portfolios and private endowments') }}</h3>
              </div>

              <div>
                <hr>
                <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                  <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                </a>
              </div>

            </div>
          </div><!-- End Service Item -->

        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Strategic Goals Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3 class="text-black">{{ __('index.Our Strategic Goals') }}</h3>

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
   
    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{ __('index.Our Projects') }}</h2>
          <p>{{ __('index.Discover our exceptional real estate ventures, built with expertise and innovation.') }}</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($projects as $project)
          <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="{{asset('images/'.$project->getTranslation('title', 'en').'/'.$project->images[0]->image)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $project->city->name }}</h4>
                <p>{{$project->title}}</p>
                
                <a href="{{ asset('images/'.$project->getTranslation('title', 'en').'/'.$project->images[0]->image) }}" title="{{ $project->city->name }}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route('get_project',$project->id) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->
          @endforeach

          </div><!-- End Projects Container -->

        </div>

      </div>

      {{-- <div class="text-center mt-5 mx-auto">
        <a href="{{ route('projects') }}">
          <button class="btn-contact-us">{{ __('index.More Projects') }}</button>
        </a>
      </div> --}}
    </section><!-- End Our Projects Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
  
    <!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

@endsection
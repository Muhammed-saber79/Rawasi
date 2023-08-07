@extends('layouts.front')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">{{ __('index.Welcome to') }}<span class="gradient-text">{{ __('index.Rawasi') }}</span></h2>
            <h4 data-aos="fade-up" style="color: #91c9c8;">
            {{ __('index.Real estate Saudi corporation') }}
            </h4>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started gradient-bg">{{ __('index.Get Started') }}</a>
          </div>
        </div>
      </div>
    </div>


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
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-1.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">{{ __('index.Our Vision') }}</h4>
                    <p>
                    {{ __('index.To be a major professional real estate gate in the real estate developing industry in KSA and the region.') }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-3.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">{{ __('index.Our Mission') }}</h4>
                    <p>
                    {{ __('index.Building a real long-term partnership with the community by producing distinguished real estate development projects according to the highest quality standards available to serve the needs of all segments.') }}
                    </p>
                  </div>
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
                {{-- <h4>Remodeling 1</h4> --}}
                <p>{{$project->title}}</p>
                
                <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="{{route('get_project',$project->id)}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->
          @endforeach

          </div><!-- End Projects Container -->

        </div>

      </div>

      <div class="text-center mt-5 mx-auto">
        <a href="{{ route('projects') }}">
          <button class="btn-contact-us">{{ __('index.More Projects') }}</button>
        </a>
      </div>
    </section><!-- End Our Projects Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts section-bg">
      <div class="container" data-aos="fade-up">

        <div class=" section-header">
          <h2>{{ __('index.Recent Blog Posts') }}</h2>
          <p>
          {{ __('index.Discover the latest updates and engaging, informative articles covering various topics, providing valuable insights and detailed information to keep you constantly informed about all that is new in the world of real estate.') }}
          </p>
        </div>

        <div class="row gy-5">

          @foreach($articles as $article)
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                <span class="post-date">{{Carbon\Carbon::parse($article->created_at)->format('d M Y')}}</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{$article->title}}</h3>

                {{-- <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Homebuyers Tips</span>
                  </div>
                </div> --}}

                <hr>

                <a href="{{route('get_article',$article->id)}}" class="readmore stretched-link"><span>{{ __('index.Read More') }}</span>
                  <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                </a>

              </div>

            </div>
          </div><!-- End post item -->
          @endforeach
          
        </div>

        <div class="text-center mt-5 mx-auto">
          <a href="{{ route('articles') }}">
            <button class="btn-contact-us">{{ __('index.Move To Blog') }}</button>
          </a>
        </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

@endsection
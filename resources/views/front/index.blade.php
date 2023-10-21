@extends('layouts.front')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-block" style="padding:0 0;">

    <div id="hero-carousel" class="video-container">

      <!-- <div class="vadoo_player" vid="S6Wy8VOgwT6iiLIkqXOIJyMYz5Gve7n8" etype="responsive"></div><script src="https://api.vadoo.tv/static/vadoo_player.min.js" id="player_script" vid="S6Wy8VOgwT6iiLIkqXOIJyMYz5Gve7n8"></script>
       -->


      <video id="intro-video" poster loop playsinline preload="auto" autoplay muted>
        <!-- <source src="https://rawasi.s3.ap-south-1.amazonaws.com/intro6.mp4" type="video/mp4"> -->
        <source src="{{ asset('storage/intro.mp4') }}" type="video/mp4">
      </video>
      
      <button id="btn" onclick="toggleSound()">
        <img src="assets/img/muted.png" width="50px" alt="" id='vol_img'>
      </button>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
            var video = document.getElementById("intro-video");
            video.play();
        });

        let toggleSound = function() {
          var video = document.getElementById("intro-video");
          let image = document.getElementById('vol_img');
          
          if (video.muted) {
            video.muted = false; // Unmute sound
            image.src = "assets/img/unmuted.png";
          } else {
            video.muted = true; // Mute sound
            image.src = "assets/img/muted.png";
          }
        };
      </script>

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
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">

                <div>
                  <div class="icon">
                    <i class="fa-solid fa-money-bill"></i> <!-- Use fa-money-bill icon for Real estate investment -->
                  </div>
                  <h3>{{ __('index.Real estate investment') }}</h3>
                </div>

              </div>
            </a>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">

                <div>
                  <div class="icon">
                    <i class="fa-solid fa-hammer"></i> <!-- Use fa-hammer icon for Real estate development -->
                  </div>
                  <h3>{{ __('index.Real estate development') }}</h3>
                </div>

              </div>
            </a>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-people-group"></i>
                  </div>
                  <h3>{{ __('index.Real estate marketing') }}</h3>
                </div>

                <!-- <div>
                  <hr>
                  <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                    <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                  </a>
                </div> -->

              </div>
            </a>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-calendar-days"></i>
                  </div>
                  <h3>{{ __('index.Asset Management') }}</h3>
                </div>

                <!-- <div>
                  <hr>
                  <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                    <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                  </a>
                </div> -->

              </div>
            </a>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-coins"></i>
                  </div>
                  <h3>{{ __('index.Fund Management') }}</h3>
                </div>

                <!-- <div>
                  <hr>
                  <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                    <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                  </a>
                </div> -->

              </div>
            </a>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-compass-drafting"></i>
                  </div>
                  <h3>{{ __('index.Studies') }}</h3>
                </div>

                <!-- <div>
                  <hr>
                  <a href="{{ route('services') }}" class="readmore stretched-link">{{ __('index.Learn more') }} 
                    <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                  </a>
                </div> -->

              </div>
            </a>
          </div><!-- End Service Item -->

          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">

                <div>
                  <div class="icon">
                    <i class="fa-solid fa-cogs"></i>
                  </div>
                  <h3>{{ __('index.Facility Management') }}</h3>
                </div>

              </div>
            </a>
          </div> -->
          <!-- End Service Item -->

          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">
              
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-landmark"></i>
                  </div>
                  <h3>{{ __('index.Create and manage real estate portfolios and private endowments') }}</h3>
                </div>

              </div>
            </a>
          </div> -->
          <!-- End Service Item -->

          <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">

                <div>
                  <div class="icon">
                    <i class="fa-solid fa-tasks"></i>
                  </div>
                  <h3>{{ __('index.Project Management') }}</h3>
                </div>

              </div>
            </a>
          </div> -->
          <!-- End Service Item -->

          <!-- <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('services') }}">
              <div class="service-item  position-relative  d-flex flex-column justify-content-between">

                <div>
                  <div class="icon">
                    <i class="fa-solid fa-home"></i>
                  </div>
                  <h3>{{ __('index.Real Estate Mediation') }}</h3>
                </div>

              </div>
            </a>
          </div> -->
          <!-- End Service Item -->

        </div>

        <div class="text-center mt-5 mx-auto">
          <a href="{{ route('services') }}">
            <button class="btn-contact-us">{{ __('index.And More Services') }}</button>
          </a>
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
            <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{asset('images/'.$project->getTranslation('title', 'en').'/'.$project->images[0]->image)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $project->city->name }}</h4>
                  <p>{{$project->title}}</p>
                  
                  <a href="{{ asset('images/'.$project->getTranslation('title', 'en').'/'.$project->images[0]->image) }}" title="{{ $project->city->name }}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('get_project',$project->id) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div> -->
            <!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-content">
                <a href="{{ route('get_project',$project->id) }}">
                  <div class="partner-item h-16">
                    <img src="{{asset('images/'.$project->getTranslation('title', 'en').'/'.$project->images[0]->image)}}" class="img-fluid h-100" alt="">
                  </div>
                </a>
              </div>
            </div>
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
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">

        <div class=" section-header">
          <h2>{{ __('index.Media') }}</h2>
          <p>
            {{ __('index.Media-Text') }}
          </p>
        </div>

        <div class="row gy-5">

          @foreach($articles as $article)
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item-home position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('images/'.$article->getTranslation('title','en').'/'.$article->image)}}" class="img-fluid" alt="">
                <span class="post-date">{{Carbon\Carbon::parse($article->created_at)->format('d M Y')}}</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{$article->title}}</h3>

                {{-- <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">جوليا باركر</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">نصائح المشترين</span>
                  </div>
                </div> --}}

                <hr>

                <a href="{{ route('get_article', $article) }}" class="readmore stretched-link">
                  <span>{{ __('index.Read More') }}</span>
                  <i class="bi @if(App::getLocale()=='en'): bi-arrow-right @else bi-arrow-left @endif"></i>
                </a>

              </div>

            </div>
          </div><!-- End post item -->
          @endforeach

        </div>

        <div class="text-center mt-5 mx-auto">
          <a href="{{ route('articles') }}">
            <button class="btn-contact-us">{{ __('index.Move To Media News') }}</button>
          </a>
        </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->
  
  </main><!-- End #main -->

@endsection
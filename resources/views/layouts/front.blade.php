<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @if (Route::current()->uri() == App::getLocale())
  <title>{{ __('index.Rawasi') }} | {{ __('index.Home') }}</title>
  @elseif (Route::current()->uri() == App::getLocale() . '/about')
  <title>{{ __('index.Rawasi') }} | {{ __('index.About') }}</title>
  @elseif (Route::current()->uri() == App::getLocale() . '/services')
  <title>{{ __('index.Rawasi') }} | {{ __('index.Services') }}</title>
  @elseif (Route::current()->uri() == App::getLocale() . '/projects')
  <title>{{ __('index.Rawasi') }} | {{ __('index.Projects') }}</title>
  @elseif (Route::current()->uri() == App::getLocale() . '/articles')
  <title>{{ __('index.Rawasi') }} | {{ __('index.Blog') }}</title>
  @elseif (Route::current()->uri() == App::getLocale() . '/contact')
  <title>{{ __('index.Rawasi') }} | {{ __('index.Contact') }}</title>
  @elseif (Route::current()->uri() == App::getLocale() . '/article/{id}')
  <title>{{ __('index.Rawasi') }} | {{ __('index.Post Details') }}</title>
  @elseif (Route::current()->uri() == App::getLocale() . '/get_project/{id}')
  <title>{{ __('index.Rawasi') }} | {{ __('index.Project Details') }}</title>
  @elseif (Route::current()->uri() == App::getLocale() . '/partners')
  <title>{{ __('index.Rawasi') }} | {{ __('index.Partners') }}</title>
  @endif

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200&display=swap" rel="stylesheet"> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200&family=Noto+Sans+Arabic:wght@500&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  @if (App::getLocale() == 'en')
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  @else
    <link href="{{asset('assets/css/main-ar.css')}}" rel="stylesheet">
  @endif

  <!-- <link rel="prefetch" href="https://rawasi.s3.ap-south-1.amazonaws.com/intro6.mp4"> -->
  <!-- <link rel="prefetch" href="{{ asset('storage/intro.mp4') }}"> -->

  <style>

    #hero, #hero-carousel {
        position: relative;
        width: 100%;
    }
    @media (min-width: 1800px) {
        /* For screens wider than 1701px, apply object-fit: cover */
        #intro-video {
            object-fit: cover;
            height: 90vh;
            width: 100%;
        }

        #hero, #hero-carousel {
            position: relative;
            width: 100%;
        }
    }

    @media (min-width: 1600px) {
        /* For screens up to 1700px wide, take full width */
        #intro-video {
            object-fit: cover;
            height: 90vh;
            width: 100%;
        }

        #hero, #hero-carousel {
            position: relative;
            width: 100%;
        }
    }

    @media (max-width: 1600px) {
        /* For screens up to 1700px wide, take full width */
        #intro-video {
            width: 100%;
        }

        #hero, #hero-carousel {
            position: relative;
            width: 100%;
        }
    }

    #intro-video::-webkit-media-controls-panel {
        display: none !important;
    }
    #intro-video::-webkit-media-controls-play-button {
        display: none !important;
    }
    #intro-video::-webkit-media-controls-start-playback-button {
        display: none !important;
    }

    /* After video modifications */

    #btn {
      position: absolute;
      bottom: 2vh;
      left: 2vw;
      background: none;
      border: none;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header secion-bg d-flex align-items-center" style="height: 5rem;">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between text-danger" style="height: 5rem;">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <img src="{{asset('assets/img/logo.png')}}" alt="Rawasi-logo" height="75">
      </a>      

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list text-info"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{ Route::current()->uri() == App::getLocale() ? 'active' : '' }}" href="{{url('/')}}">{{ __('index.Home') }}</a></li>
          {{-- <li><a class="{{ Route::current()->uri() == App::getLocale() . '/about' ? 'active' : '' }}" href="{{route('about')}}">{{ __('index.About') }}</a></li> --}}
          <li><a class="{{ Route::current()->uri() == App::getLocale() . '/services' ? 'active' : '' }}" href="{{route('services')}}">{{ __('index.Services') }}</a></li>
          
          <li class="dropdown">
            <a href="#"><span>{{ __('index.Projects') }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <?php
                  $projects = App\Models\Project::latest()->take(3)->get();
                ?>
                @foreach($projects as $project)
                    <li>
                        <a rel="alternate" href="{{ route('get_project', $project->id) }}">
                            {{ $project->title }}
                        </a>
                    </li>
                @endforeach
                <li>
                    <a rel="alternate" href="{{ route('projects') }}">
                        {{ __('index.More Projects') }}
                    </a>
                </li>
            </ul>
          </li>
          <li><a class="{{ Route::current()->uri() == App::getLocale() . '/partners' ? 'active' : '' }}" href="{{route('partners')}}">{{ __('index.Partners') }}</a></li> 
          <li><a class="{{ Route::current()->uri() == App::getLocale() . '/articles' ? 'active' : '' }}" href="{{route('articles')}}">{{ __('index.Media') }}</a></li> 
          <li><a class="{{ Route::current()->uri() == App::getLocale() . '/contact' ? 'active' : '' }}" href="{{route('contact')}}">{{ __('index.Contact') }}</a></li>
          <li class="dropdown">
            <a href="#"><span>{{ __('index.Language') }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-sm-4  text-lg-start text-sm-start ">
            <div class="footer-info">
              <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <img src="{{asset('assets/img/logo.png')}}" alt="Rawasi-logo" width="100">
              </a>
              <p @if(App::getLocale() != 'en'): class="text-lg-end text-sm-end" @endif >
                
              </p>
              
            </div>
          </div><!-- End footer info column-->

          <div class="col-sm-4 text-sm-center  footer-links">
            <div class="social-links d-flex justify-content-center mt-3">
              <a href="https://twitter.com/rawasi_ksa?s=21&t=GjS4oYgOowed4nNjDk115A" class="d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                </svg>
              </a>
              <a href="https://youtube.com/@Rawasi_ksa" class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
              <a href="https://instagram.com/rawasi_ksa?igshid=MzRlODBiNWFlZA==" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/company/%D8%B4%D8%B1%D9%83%D8%A9-%D8%B1%D9%88%D8%A7%D8%B3%D9%8A-%D8%A7%D9%84%D9%85%D8%AA%D9%82%D8%AF%D9%85%D8%A9/" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
            <!-- <h4>{{ __('index.Useful Links') }}</h4>
            <ul>
              <li><a href="{{ route('home') }}">{{ __('index.Home') }}</a></li>
              <li><a href="{{ route('about') }}">{{ __('index.About') }}</a></li>
              <li><a href="{{ route('services') }}">{{ __('index.Services') }}</a></li>
              <li><a href="#">{{ __('index.Terms of service') }}</a></li>
              <li><a href="#">{{ __('index.Privacy policy') }}</a></li>
            </ul> -->
          </div><!-- End footer links column-->

          <div class="col-sm-4 @if(App::getLocale() != 'en'): text-lg-start text-sm-start @else text-lg-end text-sm-end @endif footer-links">
            
            <p @if(App::getLocale() != 'en'): class="text-lg-start text-sm-start" @endif >
              <strong>{{ __('index.Phone:') }}</strong> 00966&nbsp;11&nbsp;238&nbsp;60&nbsp;90<br>
              <strong>{{ __('index.Email:') }}</strong> info@rawasi-sa.com<br><br>
              {{ __('index.Riyadh') }}, {{ __('index.Saudi Arabia') }} <br>
            </p>
            <!-- <h4>{{ __('index.Our Services') }}</h4>
            <ul>
              <li><a href="{{ route('services') }}">{{ __('index.Real estate marketing') }}</a></li>
              <li><a href="{{ route('services') }}">{{ __('index.Organize financing') }}</a></li>
              <li><a href="{{ route('services') }}">{{ __('index.Real estate investment and development') }}</a></li>
              <li><a href="{{ route('services') }}">{{ __('index.Studies') }}</a></li>
              <li><a href="{{ route('services') }}">{{ __('index.Facility Management Division') }}</a></li>
            </ul> -->
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          {{ __('index.All Rights Reserved') }} &copy; <strong>
            <a href="{{ route('index') }}">
              <span class="gradient-text">{{ __('index.Rawasi') }}</span></strong>.
            </a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- WhatsApp Button -->
  <div class="whatsapp-button">
      <a href="your-whatsapp-link" target="_blank">
          <i class="bi bi-whatsapp"></i>
      </a>
  </div>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  {{-- <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  <script>
      const languageDropdown = document.getElementById('languageDropdown');
      const languageSubMenu = languageDropdown.querySelector('ul');

      languageDropdown.addEventListener('click', () => {
          languageSubMenu.classList.toggle('show-language-dropdown');
      });

  </script>

</body>

</html>
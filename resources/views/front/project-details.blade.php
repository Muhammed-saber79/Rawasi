@extends('layouts.front')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>{{ __('index.Project Details') }}</h2>
      <ol>
      <li><a href="{{ route('index') }}">{{ __('index.Home') }}</a></li>
        <li>{{ __('index.Project Details') }}</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Projet Details Section ======= -->
  <section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="position-relative h-100">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            @foreach ($images  as $image)
            <div class="swiper-slide">
              <img src="{{asset('images/'.$project->getTranslation('title', 'en').'/'.$image->image)}}" alt="">
            </div>
            @endforeach
            

           
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div>

      <div class="row justify-content-between gy-4 mt-4">

        <div class="col-lg-8">
          <div class="portfolio-description">
            <h2>{{$project->title}}</h2>
            <p>

              {!! $project->description!!}
            </p>
           
          </div>
        </div>

        <div class="col-lg-3">
          <div class="portfolio-info">
            <h3>{{ __('index.Project information') }}</h3>
            <ul>
              <li><strong>{{ __('index.Owner') }}</strong> <span>Private</span></li>
              <li><strong>{{ __('index.Location') }}</strong> <span>Eastern Province</span></li>
              <li><strong>{{ __('index.') }}Space</strong> <span>400,000 m2 approximately</span></li>
              <li><strong>{{ __('index.Type') }}</strong> <span>Recreational, Commercial, Administrative</span></li>
              <li><strong>{{ __('index.Project State') }}</strong> <span>Under studying</span></li>
            </ul>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Projet Details Section -->

</main><!-- End #main -->

<div class="text-center my-5 mx-auto">
  <hr class="w-75 m-auto my-5">
  <a href="{{ route('contact') }}">
    <button class="btn-contact-us">{{ __('index.Contact') }}</button>
  </a>
</div>

@endsection
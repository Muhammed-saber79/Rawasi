@extends('layouts.front')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2 class="text-center">{{ __('index.Project Details') }}</h2>
      <ol>
        <li>
          <a href="{{ route('index') }}">{{ __('index.Home') }}</a>
        </li>
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
              <img style="height: 80vh;" src="{{asset('images/'.$project->getTranslation('title', 'en').'/'.$image->image)}}" alt="">
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
            <p style="overflow: hidden; word-wrap: break-word;">
                {!! $project->description !!}
            </p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="portfolio-info">
            <h3>{{ __('index.Project information') }}</h3>
            <ul>
              <li><strong>{{ __('index.Owner') }}</strong> <span>Private</span></li>
              <li>
                <strong>{{ __('index.Location') }}</strong>
                <span>{{ $project->location }}</span>
                <span>
                  <a href="{{ $project->gps }}">{{ __('index.Move To Location') }}</a>
                </span>
              </li>
              <li><strong>{{ __('index.City') }}</strong> <span>{{ $project->city->name }}</span></li>
              <li>
                <div class="text-center my-5 mx-auto">
                  <hr class="m-auto my-1">
                  
                    <a href="{{asset('images/'.$project->getTranslation('title','en').'/'.$project->prochure)}}" target="_blank" class="btn-contact-us">{{ __('index.Download Brochure') }}</a>
                 
                </div>
              </li>
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
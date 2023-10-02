@extends('layouts.front')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>{{ __('index.Partners') }}</h2>
      <ol>
      <li><a href="{{ route('index') }}">{{ __('index.Home') }}</a></li>
        <li>{{ __('index.Partners') }}</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>{{ __('index.Partners') }}</h2>
        <p>{{ __('index.Partners-Text') }}</p>
      </div>

      <div class="portfolio-isotope">
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach($partners as $partner)

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-content h-100">
              <div class="partner-item">
                <img src="{{ asset('storage/' . $partner->image_path) }}" class="img-fluid" alt="">
              </div>
            </div>
          </div>

          @endforeach
          
        </div>

      </div>

    </div>
  </section><!-- End Our Projects Section -->


</main><!-- End #main -->

<div class="text-center my-5 mx-auto">
  <hr class="w-75 m-auto my-5">
  <a href="{{ route('contact') }}">
    <button class="btn-contact-us">{{ __('index.Contact') }}</button>
  </a>
</div>

@endsection
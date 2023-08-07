@extends('layouts.front')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>{{ __('index.Contact') }}</h2>
      <ol>
      <li><a href="{{ route('index') }}">{{ __('index.Home') }}</a></li>
        <li>{{ __('index.Contact') }}</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-map"></i>
            <h3>{{ __('index.Our Address') }}</h3>
            <p>
            {{ __('index.Riyadh') }}, {{ __('index.Saudi Arabia') }}<br><br>
            </p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>{{ __('index.Email Us') }}</h3>
            <p>info@rawasi-sa.com</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-telephone"></i>
            <h3>{{ __('index.Call Us') }}</h3>
            <p>00966&nbsp;11&nbsp;238&nbsp;60&nbsp;90</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row gy-4 mt-1">

        <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.828887689203!2d46.738586!3d24.774265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDM5JzEwLjIiTiA0NsKwMTUnMTMuMCJF!5e0!3m2!1sen!2sus!4v1627530513507" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>


        </div><!-- End Google Maps -->

        <div class="col-lg-6">
          <form action="{{route('messages.store')}}" method="post"  class="php-email-form">
            @csrf
            <div class="row gy-4">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('index.Your Name') }}" required>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email"  placeholder="{{ __('index.Your Email') }}" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('index.Subject') }}" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="{{ __('index.Message') }}" required></textarea>
            </div>
            {{-- <div class="my-3">
              <div class="loading">{{ __('index.Loading') }}</div>
              <div class="error-message"></div>
              <div class="sent-message">{{ __('index.Your message has been sent. Thank you!') }}</div>
            </div> --}}
            <div class="text-center"><button type="submit" class="btn-contact-us">{{ __('index.Send Message') }}</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection
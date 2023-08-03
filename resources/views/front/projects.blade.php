@extends('layouts.front')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Projects</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Projects</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Projects</h2>
        <p>Discover our exceptional real estate ventures, built with expertise and innovation.</p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

        <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-remodeling">Remodeling</li>
          <li data-filter=".filter-construction">Construction</li>
          <li data-filter=".filter-repairs">Repairs</li>
          <li data-filter=".filter-design">Design</li>
        </ul><!-- End Projects Filters -->
        
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
  </section><!-- End Our Projects Section -->


</main><!-- End #main -->

<div class="text-center my-5 mx-auto">
  <hr class="w-75 m-auto my-5">
  <a href="contact.html">
    <button class="btn-contact-us">Contact US</button>
  </a>
</div>

@endsection
@extends('layouts.front')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Blog</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class=" section-header">
        <h2>Blog Posts</h2>
        <p>
          Discover the latest updates and engaging, informative articles covering various topics, providing valuable insights and detailed information to keep you constantly informed about all that is new in the world of real estate.
        </p>
      </div>

      <hr class="m-auto w-75 my-5">

      <div class="row g-5">
        <div class="col-lg-8">

          @foreach ($articles as $article)
          <div class="w-100 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">
  
              <div class="post-img position-relative overflow-hidden">
                <img src="{{asset('images/'.$article->getTranslation('title','en').'/'.$article->image)}}" class="img-fluid" alt="">
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
  
                <a href="{{route('get_article',$article->id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
  
              </div>
  
            </div>
          </div><!-- End post item -->
  
          @endforeach
    
    
  
        </div>

        <div class="col-lg-4 blog">
          <div class="sidebar">

        
              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Featured Posts</h3>

                <div class="mt-3">

                  @foreach ($favorites as $favorite)
                  <div class="post-item my-3 p-3">
                    <img src="{{asset('images/'.$favorite->getTranslation('title','en').'/'.$favorite->image)}}" alt="">
                    <div>
                      <h6><a href="blog-details.html">{{$favorite->title}}</a></h6>
                      <time datetime="2020-01-01">{{Carbon\Carbon::parse($favorite->created_at)->format('d M Y')}}</time>
                    </div>
                  </div><!-- End recent post item-->

                  @endforeach
                 
             

              </div><!-- End sidebar recent posts-->

          </div><!-- End Blog Sidebar -->
        </div>
      </div>

    </div>
  </section>
  <!-- End Blog Posts Section -->

</main><!-- End #main -->

<div class="text-center my-5 mx-auto">
  <hr class="w-75 m-auto my-5">
  <a href="contact.html">
    <button class="btn-contact-us">Contact US</button>
  </a>
</div>

@endsection
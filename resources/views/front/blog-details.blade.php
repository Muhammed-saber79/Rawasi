@extends('layouts.front')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2 class="text-center">{{ __('index.Post Details') }}</h2>
      <ol>
        <li><a href="index.html">{{ __('index.Home') }}</a></li>
        <li>{{ __('index.Post Details') }}</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img">
              <img src="{{asset('images/'.$article->getTranslation('title','en').'/'.$article->image)}}" alt="" class="img-fluid">
            </div>

            <h2 class="title">{{$article->title}}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{Carbon\Carbon::parse($article->created_at)->format('d M Y')}}</time> </li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> {{$article->comments->where('is_accepted',1)->count()}} {{ __('index.Comments') }} </li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
              <p>
              
                {!!$article->description!!}
              </p>

              

              {{-- <blockquote>
                <p>

                  {{$article->description}}
                </p>
              </blockquote> --}}

            
             

            </div><!-- End post content -->


          </article><!-- End blog post -->

          {{-- <div class="post-author d-flex align-items-center">
            <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
            <div>
              <h4>Jane Smith</h4>
              <p>
                Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
              </p>
            </div>
          </div><!-- End post author --> --}}

          <div class="comments">

            <h4 class="comments-count">{{$article->comments->where('is_accepted',1)->count()}} {{ __('index.Comments') }}</h4>

            @foreach ($comments  as $comment)
            <div id="comment-1" class="comment">
              <div class="d-flex">
                <div class="comment-img"><img src="{{asset('assets/img/blog/user.png')}}" alt=""></div>
                <div>
                  <h5>{{$comment->name}} </h5>
                  <time datetime="2020-01-01">{{Carbon\Carbon::parse($comment->created_at)->format('d M Y')}}</time>
                  <p>
                    {{$comment->comment}}
                  </p>
                </div>
              </div>
            </div><!-- End comment #1 -->

            @endforeach
          
         
            <div class="reply-form">

              <h4>{{ __('index.Leave a Reply') }}</h4>
              <p>{{ __('index.Your email address will not be published. Required fields are marked *') }} </p>
              <form action="{{route('comments.store',$article->id)}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="{{ __('index.Your Name') }}*">
                    <input name="article_id" hidden value="{{$article->id}}" >

                  </div>
                  <div class="col-md-6 form-group">
                    <input name="email" type="text" class="form-control" placeholder="{{ __('index.Your Email') }}*">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col form-group">
                    <textarea name="comment" class="form-control" placeholder="{{ __('index.Your Comment') }}*"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('index.Post Comment') }}</button>

              </form>

            </div>

          </div><!-- End blog comments -->

        </div>

        <div class="col-lg-4 blog">
          <div class="sidebar">

        
              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">{{ __('index.Featured Media News') }}</h3>

                <div class="mt-3">

                  @foreach ($favorites as $favorite)
                  <div class="post-item my-3 p-3">
                    <img src="{{asset('images/'.$favorite->getTranslation('title','en').'/'.$favorite->image)}}" class="mx-3">
                    <div>
                      <h6><a href="{{route('get_article',$favorite->id)}}">{{$favorite->title}}</a></h6>
                      <time datetime="2020-01-01">{{Carbon\Carbon::parse($favorite->created_at)->format('d M Y')}}</time>
                    </div>
                  </div><!-- End recent post item-->

                  @endforeach
                 
              </div><!-- End sidebar recent posts-->

          </div><!-- End Blog Sidebar -->
        </div>
      </div>

    </div>
  </section><!-- End Blog Details Section -->

</main><!-- End #main -->

@endsection
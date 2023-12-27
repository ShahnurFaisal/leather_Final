@extends('frontend.partials.app')
@section('content')
    <!--Contents-->
    <main class="contact-page style-5 ">
          <!--Contents-->
        <!-- ====== start all-news ====== -->
        <section class="all-news section-padding pt-150 blog bg-transparent style-3">
            <div class="container">
                <div class="blog-details-slider mb-100">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20 color-000"> {{ $data['single_blog']->title }} </h2>
                        <small class="d-block date text">
                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold"> news </a>
                            <i class="bi bi-clock me-1"></i>
                            <span class="op-8">{{ \Carbon\carbon::parse($data['single_blog']->created_at)->diffForhumans() }}</span>
                        </small>
                    </div>
                    <div class="content-card">
                        <div class="img" >
                            <img style="width:100% !important;height:500px !important;border-radius:3%" src="{{ asset($data['single_blog']->photo) }}" alt="">
                        </div>
                        <div class="info mt-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="cont">

                                        <h2 class="title">
                                           {{ $data['single_blog']->title }}
                                        </h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-8">


                        <div class="blog-content-info">

                            <div class="text mb-10 color-666">
                                 {{ $data['single_blog']->description }}
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="side-blog style-5 ps-lg-5 mt-5 mt-lg-0">


                            <div class="side-recent-post mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    recent post
                                </h6>
                                @foreach ($data['recent_blogs'] as $single_blog)
                                <a style="display: flex !important" href="{{ route('single.blog',$single_blog->id) }}" class="post-card pb-3 mb-3 border-bottom brd-gray">
                                    <div style="width: 200px !important" class="img me-3">
                                        <img  style="border-radius: 5%" src="{{asset($single_blog->photo)}}" alt="">
                                    </div>
                                    <div class="inf">
                                        <h6> {{ $single_blog->title }} </h6>
                                        <p> {{Str::limit($single_blog->description,30,'...')}} </p>
                                    </div>
                                </a>
                                @endforeach


                            </div>


                            <div class="side-share mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    social
                                </h6>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-goodreads-g"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>

                            {{-- <div class="side-insta mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    our instagram
                                </h6>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <a href="assets/img/blog/1.jpeg" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/1.jpeg" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/10.png" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/10.png" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/11.png" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/11.png" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/12.png" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/12.png" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/2.jpeg" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/2.jpeg" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/3.jpeg" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/3.jpeg" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                </div>
                            </div> --}}

                            <div class="side-tags">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    popular tags
                                </h6>
                                <div class="content">
                                    <a href="#">Leather</a>
                                    <a href="#">SettLeather</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end all-news ====== -->


        <!-- ====== start Popular Posts ====== -->
        <section class="popular-posts related Posts section-padding pb-100 bg-gray5">
            <div class="container">
                <h5 class="fw-bold text-uppercase mb-50">Related Posts</h5>
                <div class="related-postes-slider position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($data['related_blogs'] as $single_blog)
                            <div class="swiper-slide">
                                <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                    <a href="{{ route('single.blog',$single_blog->id) }}" class="img radius-7 overflow-hidden img-cover">
                                        <img style="height: 300px !important" src="{{ asset($single_blog->photo) }}" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body px-0">
                                        <small class="d-block date mt-10 fs-10px fw-bold">
                                            <a href="" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="{{ route('single.blog',$single_blog->id) }}" class="op-8">{{ \Carbon\carbon::parse($single_blog->created_at)->diffForhumans() }}</a>
                                        </small>
                                        <h5 class="fw-bold mt-10 title">
                                            <a href="{{ route('single.blog',$single_blog->id) }}">{{ $single_blog->title}}</a>
                                        </h5>
                                        <p class="small mt-2 op-8">{{ Str::limit($single_blog->description,50) }}

                                        </p>

                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- ====== end Popular Posts ====== -->
    <!--End-Contents-->
    </main>
    <!--End-Contents-->
@endsection

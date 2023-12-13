@extends('frontend.partials.app')
@push('css')
 <!-- ====== font family ====== -->
 {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
 rel="stylesheet"> --}}
{{--
<link rel="stylesheet" href="{{ asset('backend/css/lib/all.min.css')}}" />
<link rel="stylesheet" href="{{ asset('backend/css/lib/animate.css')}}" />
<link rel="stylesheet" href="{{ asset('backend/css/lib/jquery.fancybox.css')}}" />
<link rel="stylesheet" href="{{ asset('backend/css/lib/lity.css')}}" />
<link rel="stylesheet" href="{{ asset('backend/css/lib/swiper.min.css')}}" /> --}}

@endpush
@section('content')
 <!--Contents-->
 <main class="blog-page style-5">


    <!-- ====== start blog-slider ====== -->
    <section class="blog-slider pt-150 pb-50 style-1">
        <div class="container">
            <div class="section-head text-center mb-60 style-5">
                <h2 class="mb-20"> Our  Journal  </h2>
                <div class="text color-666">Get the latest articles from our journal, writing, discuss and share</div>
            </div>
            <div class="blog-details-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($data['blog'] as $blog)
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="img overlay">
                                    <img src="{{ asset($blog->photo ? $blog->photo :'frontend/image/blog/s_blog.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="row">
                                       
                                        <div class="col-lg-6">
                                            <div class="cont">
                                                <small class="date small mb-20"> <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3"> News </a> <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days ago</a> </small>
                                                <h2 class="title">
                                                    <a href="page-single-post-5.html">{{ $blog->title }}</a>
                                                </h2>
                                                <p class="fs-13px mt-10 text-light text-info">
                                                    Embark on a riveting exploration into the world of fine leather exportation with our blog, "Crafting Excellence." Discover the intricate processes, global trends, and the artistry behind being a distinguished leather exporter. From the sourcing of premium materials to the cultural influences that shape our creations, delve into the stories that make our leather goods a symbol of unrivaled craftsmanship.</p>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        {{-- <div class="swiper-slide">
                            <div class="content-card">
                                <div class="img overlay">
                                    <img src="assets/img/blog/1.jpeg" alt="">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="cont">
                                                <small class="date small mb-20"> <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3"> News </a> <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days ago</a> </small>
                                                <h2 class="title">
                                                    <a href="page-single-post-5.html">Leather Horizons: Navigating the Global Export Landscape</a>
                                                </h2>
                                                <p class="fs-13px mt-10 text-light text-info">Embark on a voyage through the intricate tapestry of global trade as we delve into the world of leather exportation. "Leather Horizons" invites you to explore the diverse cultures, craftsmanship techniques, and market dynamics that shape our journey. From the artisan workshops to the international runways, join us in unraveling the stories woven into every leather export, showcasing the artistry and quality that transcend borders.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-card">
                                <div class="img overlay">
                                    <img src="assets/img/blog/2.jpeg" alt="">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="cont">
                                                <small class="date small mb-20"> <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3"> News </a> <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days ago</a> </small>
                                                <h2 class="title">
                                                    <a href="page-single-post-5.html">Beyond Borders: The Art and Business of Leather Export</a>
                                                </h2>
                                                <p class="fs-13px mt-10 text-light text-info">Step into the dynamic realm where art meets commerce with "Beyond Borders." This blog offers an insider's perspective on the challenges and triumphs of being a leather exporter. Discover the strategic insights, trends, and sustainable practices that drive our commitment to delivering exceptional leather goods worldwide. Whether you're a connoisseur of luxury or a business enthusiast, come explore the intersection of craftsmanship and global commerce in the fascinating world of leather exports.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <!-- ====== pagination ====== -->
                <div class="swiper-pagination"></div>
                <!-- ====== arrows ====== -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- ====== end blog-slider ====== -->


    <!-- ====== start Popular Posts ====== -->
    <section class="popular-posts pt-50 pb-100 border-bottom brd-gray">
        <div class="container">
            <h5 class="post-sc-title text-center text-uppercase mb-70">Popular Posts</h5>
            <div class="row gx-5">
                @foreach ($data['blog'] as $blog)
                <div class="col-lg-4 border-end brd-gray">
                    <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                        <div class="img radius-7 overflow-hidden img-cover">
                            <img src="{{asset($blog->photo ? $blog->photo :'frontend/image/blog/1.jpeg')}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body px-0">
                            <small class="d-block date mt-10 fs-10px fw-bold">
                                <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                <i class="bi bi-clock me-1"></i>
                                <a href="#" class="op-8">Posted on 3 Days ago</a>
                            </small>
                            <h5 class="fw-bold mt-10 title">
                                <a href="page-single-post-5.html">{{ $blog->title }}</a>
                            </h5>
                            <p class="small mt-2 op-8 fs-10px">{{ $blog->description }}
                            </p>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                        a
                                    </span>
                                    <a href="#" class="mt-1">
                                        By Admin
                                    </a>
                                </div>
                                <div class="r-side mt-1">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <a href="#">24</a>
                                    <i class="bi bi-eye ms-4 me-1"></i>
                                    <a href="#">774k</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ====== end Popular Posts ====== -->


    <!-- ====== start all-news ====== -->
    <section class="all-news section-padding blog bg-transparent style-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @foreach ($data['blog'] as $blog)
                    <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="img img-cover">
                                    <img src="{{asset($blog->photo ? $blog->photo :'frontend/image/blog/6.png')}}" class="radius-7" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card-body p-0">
                                    <small class="d-block date text">
                                        <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold"> news </a>
                                        <i class="bi bi-clock me-1"></i>
                                        <a href="#" class="op-8">12 Days ago</a>
                                    </small>
                                    <a href="page-single-post-5.html" class="card-title mb-10">{{ $blog->title }}</a>
                                    <p class="fs-13px color-666">{{ $blog->description }}</p>
                                    <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                        <div class="l_side d-flex align-items-center">
                                            <span
                                                class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                a
                                            </span>
                                            <a href="#">
                                                <small class="text-muted">By</small> Admin
                                            </a>
                                        </div>
                                        <div class="r-side mt-1">
                                            <i class="bi bi-chat-left-text me-1"></i>
                                            <a href="#">24</a>
                                            <i class="bi bi-eye ms-4 me-1"></i>
                                            <a href="#">774k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                    <div class="pagination style-5 color-5 justify-content-center mt-60">
                        <a href="#" class="active">
                            <span>1</span>
                        </a>
                        <a href="#">
                            <span>2</span>
                        </a>
                        <a href="#">
                            <span>3</span>
                        </a>
                        <a href="#">
                            <span>4</span>
                        </a>
                        <a href="#">
                            <span>...</span>
                        </a>
                        <a href="#">
                            <span>20</span>
                        </a>
                        <a href="#">
                            <span class="text">next <i class="fas fa-chevron-right"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end all-news ====== -->

</main>
<!--End-Contents-->
@endsection

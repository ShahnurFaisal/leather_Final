@extends('frontend.partials.app')
@section('content')
{{-- start header  --}}
<header class="style-3 overflow-hidden">
    <div class="container">
        <div class="content section-padding">
            <div class="row">
                <div class="col-lg-5">
                    <div class="info">
                        @foreach ($data['banner'] as $banner)
                        <h1 class="h1">{{ $banner->title }}  <span>BDLeather</span></h1>

                        <p class="p">At BD Leather, we help you elevate your style by offering meticulously crafted leather goods that seamlessly blend exquisite design with superior craftsmanship, ensuring a touch of sophistication in every detail.</p>

                        <h5 class="h5">Get Free Quote! <span class="fw-normal ms-1">We’ll contact back in 24h</span>
                        </h5>
                        @endforeach

                        <form action="contact.php" class="form mt-30" method="post">
                            <div class="row gx-3">
                                <div class="col-6">
                                    <div class="form-group input-with-icon">
                                        <input type="text" name="email" class="form-control" placeholder="Your Email *">
                                        <span class="input-icon">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">

                                            <input class="form-control" type="text" name="message" placeholder="Your inquiry about">

                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn dark-butn hover-darkBlue rounded-pill w-100 mt-3">
                                    <span>Request A Consultation</span>
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($data['banner'] as $banner)
    <div class="main-img" style="">
        <img src="{{ asset($banner->photo)}}" alt="" class="pattern">

    </div>
    @endforeach

</header>
<!-- ====== end header ====== -->

<!--Contents-->
<main>

    <!-- ====== start testimonials ====== -->
    <section class="testimonials style-3">
        <div class="container">
            <div class="content section-padding">
                <div class="section-head style-3">
                    <h3>Loved By Thousand <span>Clients</span></h3>
                </div>
                <div class="testimonial-slider style-3">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($data['comments'] as $single_comment)
                            <div class="swiper-slide">
                                <div class="testimonial-card style-3">
                                    <div class="text">
                                        “{{  $single_comment->comment }}”
                                    </div>
                                    <div class="user-img mt-30 d-flex align-items-center">
                                        <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                            <img src="{{ asset('frontend/image/home/testi.jpeg') }}" alt="">
                                        </div>
                                        <div class="inf">
                                            <p class="fw-bold">{{   $single_comment->commentor_name  }}</p>
                                            <small class="text-muted">{{  $single_comment->commentor_designation }}</small>
                                        </div>
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
            <img src="{{ asset('frontend/image/home/testi3_lines.png') }}" alt="" class="testi_lines w-100">
        </div>
    </section>
    <!-- ====== end testimonials ====== -->

    <!-- ====== start services ====== -->
    <section class="services style-3 section-padding pb-70">
        <div class="container">
            <div class="section-head style-3 d-flex align-items-center">
                <h3>Our Main <span>Services</span></h3> <a href="{{ route('services') }}" class="text-muted ms-5 ps-5 mt-2">See full
                    services <i class="bi bi-chevron-right ms-1"></i></a>
            </div>
            <div class="row">
                @foreach ($data['services'] as $single_service)
                <div class="col-lg-3 mb-30 mb-lg-0">
                    <div class="service-card style-3">
                        <div class="icon">
                            <img style="width: 100%;" src="{{ asset($single_service->photo) }}" alt="">
                        </div>
                        <div class="info">
                            <h5 class="title">{{ $single_service->title }}</h5>
                            <div class="text">
                               {{ Str::limit($single_service->description,50) }}
                            </div>
                            <a href="{{ route('services') }}">
                                <span>see Service</span> <i class="bi bi-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- ====== end services ====== -->

    <!-- ====== start about us ====== -->
    <section class="about section-padding style-3">
        <div class="top-content">
            <div class="img img-left">
                <img src="{{asset('frontend/image/home/style_3_1.png')}}" alt="">
                <div class="info-circle">
                    <img style="height: 100% !important;width: 100% !important;" src="{{ asset('frontend/image/categories/category_two.jpg') }}" alt="">

                </div>
                <div class="info-circle">
                    <img style="height: 100% !important;width: 100% !important;" src="{{ asset('frontend/image/categories/category_two.jpg')}}" alt="">

                </div>
                <div class="info-circle">

                    <img style="height: 100% !important;width: 100% !important;" src="{{ asset('frontend/image/categories/category_three.jpg') }}" alt="">

                </div>
                <div class="info-circle">

                        <img style="height: 100% !important;width: 100% !important;" src="{{ asset('frontend/image/categories/category_four.jpg') }}" alt="">

                </div>
            </div>
            <div class="container">
                <div class="row gx-0 justify-content-end">
                    <div class="col-lg-5">
                        <div class="info">
                            <div class="section-head long-shape mb-40 style-3">
                                <h3>Our<span>Mission & Vision</span></h3>
                            </div>

                            <div class="text mb-20">
                                OUR VISION
                                  {{ $data['mission_vission']->vission }}
                            </div>
                            <div class="text mb-20">
                                OUR MISSION
                                {{ $data['mission_vission']->mission }}

                            </div>

                            <a href="{{ route('about.us') }}" class="btn rounded-pill bg-blue2 sm-butn text-white">
                                <span>More About Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btm-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="info pe-lg-5">
                            <div class="section-head mb-40 style-3">
                                <h3>Contact <span>Us</span></h3>
                            </div>
                            <div class="text mb-30">

                            </div>
                            <ul>
                                <li> <i class="bi bi-star-fill me-3">{{ $about_us->web_link }}</i>
                                   </li>
                                <li> <i class="bi bi-star-fill me-3"></i>{{ $about_us->phone }}</li>
                                <li> <i class="bi bi-star-fill me-3"></i>{{ $about_us->email }}</li>
                                <li> <i class="bi bi-star-fill me-3"></i> {{ $about_us->address }} </li>
                            </ul>
                            <a href="{{ route('services') }}" class="btn rounded-pill border-blue2 hover-blue2 mt-60 sm-butn">
                                <span>How We Works</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img img-right">
                <img style="border-radius: 50%; height: 500px !important;width: 400px !important;height:400px!important" src="{{ asset('frontend/image/contactus/Stock_leather_factory.original.avif') }}" alt="">
            </div>
        </div>
    </section>
    <!-- ====== end about us ====== -->

    <!-- ====== start projects  ====== -->
    <section class="projects section-padding style-3">
        <div class="container">
            <div class="section-head style-3 text-center">
                <h3>Our Featured <span>Products</span></h3>
            </div>
            <div class="content">
                <div class="row">
                    @foreach ($data['categories'] as $single_category)
                    <div class="col-lg-4">
                        <div class="project-card d-block mb-30 style-3">
                            <a href="page-single-project-5.html" class="img img-cover d-block">
                                <img src="{{ asset($single_category->photo) }}" alt="">
                            </a>
                            <div class="info">
                                <h5 class="h5"><a href="{{ route('product') }}">Cow Spilit Leather</a></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="text-center">
                    <a href="{{ route('product') }}" class="btn rounded-pill bg-blue2 sm-butn mt-60 text-white">
                        <span>See All Products</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== end projects  ====== -->





    <!-- ====== start blog ====== -->
    <section class="blog section-padding style-3">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-5">
                    <div class="blog-content">
                        <div class="section-head style-3 d-flex align-items-center mb-50">
                            <h3>BDLeather <span>Journal</span></h3> <a href="{{ route('blog') }}" class="text-muted ms-5 ps-5 mt-2">All
                                Articles <i class="bi bi-chevron-right ms-1"></i></a>
                        </div>
                        @foreach ($data['blog'] as $single_blog)
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-4 mb-4">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <a href="{{ route('single.blog',$single_blog->id) }}" class="img img-cover">
                                        <img src="{{ asset($single_blog->photo) }}" class="radius-2" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-light pe-3 me-3 color-blue2 fw-bold">
                                            Blogs</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">{{ \Carbon\Carbon::parse($single_blog->created_at)->diffForHumans() }}</a>
                                        </small>
                                        <h6 class="card-title"><a href="{{  route('single.blog',$single_blog->id) }}">{{ $single_blog->title }}</a></h6>
                                        <div
                                            class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2 text-white">
                                                    S
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> setleather
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="faq style-3">
                        <div class="section-head style-3 text-uppercase mb-50">
                            <h3>FAQS</h3>
                        </div>
                        <div class="accordion" id="accordionExample">
                            @foreach ($data['faqs'] as $key=> $single_faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true"
                                        aria-controls="collapse1">
                                        {{ $single_faq->question }}
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       {{ $single_faq->answer }}
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
            <div class="client-logos mt-100">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-2">
                        <a href="#" class="img d-block">
                            <img src="{{ asset('frontend/image/home/1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#" class="img d-block">
                            <img src="{{ asset('frontend/image/home/2.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#" class="img d-block">
                            <img src="{{ asset('frontend/image/home/3.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#" class="img d-block">
                            <img src="{{ asset('frontend/image/home/4.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#" class="img d-block">
                            <img src="{{ asset('frontend/image/home/5.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-lg-2">
                        <a href="#" class="img d-block">
                            <img src="{{ asset('frontend/image/home/6.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('frontend/image/home/v_lines.png') }}" alt="" class="v_lines">
    </section>
    <!-- ====== end blog ====== -->

    <!-- ====== start chat-banner ====== -->
    <section class="chat-banner style-3 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="info">
                        <h3>Assess Your Business Potentials Now & Find Opportunities For <span>Bigger Success</span></h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bttns text-end">
                        <a href="https://api.whatsapp.com/send?phone=8801308389716&text=Hi%20Nazmul-babu%20here!"  target="wa.link/301wyf" class="btn rounded-pill bg-white border-1 border-white text-dark sm-butn me-2">
                            <span>Let’s Chat</span>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=8801308389716&text=Hi%20Nazmul-babu%20here!" target="_blank" class="btn rounded-pill border-1 border-white text-white sm-butn">
                            <span>Get Information</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end chat-banner ====== -->
</main>
<!--End-Contents-->
@endsection

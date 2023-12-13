@extends('frontend.partials.app')
@section('content')
{{-- start header  --}}
<header class="style-3 overflow-hidden">
    <div class="container">
        <div class="content section-padding">
            <div class="row">
                <div class="col-lg-5">
                    <div class="info">
                        <h1 class="h1">Elevate Your Style with Fine Leather Craftsmanship  <span>BDLeather</span></h1>

                        <p class="p">At BD Leather, we help you elevate your style by offering meticulously crafted leather goods that seamlessly blend exquisite design with superior craftsmanship, ensuring a touch of sophistication in every detail.</p>
                            {{-- <div class="formooo">  --}}
                        <h5 class="h5">Get Free Quote! <span class="fw-normal ms-1">We’ll contact back in 24h</span>
                        </h5>
                        <form action="contact.php" class="form mt-30" method="post">
                            <div class="row gx-3">
                                <div class="col-6">
                                    <div class="form-group input-with-icon">
                                        <input type="text" class="form-control" placeholder="Your Email *">
                                        <span class="input-icon">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-select">
                                            <option value="" selected>Your inquiry about</option>
                                            <option value="">Your inquiry about</option>
                                            <option value="">Your inquiry about</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn dark-butn hover-darkBlue rounded-pill w-100 mt-3">
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
    <div class="main-img" style="">
        <img src="{{ asset('frontend/image/categories/category_four.jpg')}}" alt="" class="pattern">

    </div>
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
                            <div class="swiper-slide">
                                <div class="testimonial-card style-3">
                                    <div class="text">
                                        “Impeccable craftsmanship and timeless style—my go-to for elevating my wardrobe with fine leather essentials”
                                    </div>
                                    <div class="user-img mt-30 d-flex align-items-center">
                                        <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                            <img src="{{ asset('frontend/image/home/testi.jpeg') }}" alt="">
                                        </div>
                                        <div class="inf">
                                            <p class="fw-bold">Robert Downey Jr</p>
                                            <small class="text-muted">Legal Adisor Royal exporter</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style-3">
                                    <div class="text">
                                        “Elevated my fashion game effortlessly with their exquisite leather pieces—true craftsmanship at its finest!”
                                    </div>
                                    <div class="user-img mt-30 d-flex align-items-center">
                                        <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                            <img src="{{ asset('frontend/image/home/testi.jpeg') }}" alt="">
                                        </div>
                                        <div class="inf">
                                            <p class="fw-bold">Conor McGregor</p>
                                            <small class="text-muted">CTO at IBM</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style-3">
                                    <div class="text">
                                        “Exceptional quality and sophistication in every detail—I trust them to consistently elevate my style with their fine leather creations.”
                                    </div>
                                    <div class="user-img mt-30 d-flex align-items-center">
                                        <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                            <img src="{{ asset('frontend/image/home/testi.jpeg') }}" alt="">
                                        </div>
                                        <div class="inf">
                                            <p class="fw-bold">Lucas Digne</p>
                                            <small class="text-muted">Product Management at Invisionapp</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                <h3>Our Main <span>Services</span></h3> <a href="page-services-5.html" class="text-muted ms-5 ps-5 mt-2">See full
                    services <i class="bi bi-chevron-right ms-1"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-30 mb-lg-0">
                    <div class="service-card style-3">
                        <div class="icon">
                            <img style="width: 100%;" src="{{ asset('frontend/image/categories/category_four.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <h5 class="title">Supply Good Leather</h5>
                            <div class="text">
                                We provide best Leather for any type of qualityfull Leather Product
                            </div>
                            <a href="">
                                <span>see Products</span> <i class="bi bi-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-30 mb-lg-0">
                    <div class="service-card style-3">
                        <div class="icon">
                            <img style="width: 100%;" src="{{ asset('frontend/image/categories/category_three.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <h5 class="title">Customer Support</h5>
                            <div class="text">
                                We Provides best Customer Support in Bangladesh
                            </div>
                            <a href="page-portfolio-5.html">
                                <span>see Services</span> <i class="bi bi-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-30 mb-lg-0">
                    <div class="service-card style-3">
                        <div class="icon">
                            <img style="width: 100%;" src="{{ asset('frontend/image/categories/category_two.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <h5 class="title">
                                competitive price and up to date fashion trends

                                 </h5>
                            <div class="text">
                                We Always Care About Customer Satisfaction.
                            </div>
                            <a href="page-portfolio-5.html">
                                <span>see Services</span> <i class="bi bi-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-30 mb-lg-0">
                    <div class="service-card style-3">
                        <div class="icon">
                            <img style="width: 100%;" src="{{asset('frontend/image/categories/category_four.jpg')}}" alt="">
                        </div>
                        <div class="info">
                            <h5 class="title">Quick Response</h5>
                            <div class="text">
                                Quick response to the expectations of our valued customers in terms of quality and
                                  product development
                            </div>
                            <a href="page-portfolio-5.html">
                                <span>see Services</span> <i class="bi bi-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
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
                                <h3>BDLeather <span>Mission & Vision</span></h3>
                            </div>
                            <h5 class="h5">
                                “It is only when they go wrong that machines remind you how powerful they are.”
                            </h5>
                            <div class="text mb-20">
                                OUR VISION
                                Our vision is to attain 100% customer satisfaction worldwide through continual quality
                                improvement of our products.


                                OUR MISSION
                                To understand and satisfy customer’s wants and needs, we always try to add value,
                                reduce costs and provide innovative thinking for improvement of our product quality, with world class compliance and working standards.


                                OUR VALUES
                                To our customers we offer
                                • A commitment to provide best quality product and timely delivery
                                • Production of world-class quality leather, meet the requirements of customers with
                                competitive price and up to date fashion trends
                                • Quick response to the expectations of our valued customers in terms of quality and
                                product development
                                To our employees we offer
                                • A desirable and rewarding place to work
                                • Provide motivation for team work and career development
                                • The opportunity to grow to employee’s maximum potential
                                • Sufficient offsite and on the job training
                                To our shareholders we offer
                                • Attractive return with minimum risk of their investment
                                • A commitment to continuous improvement and adding value through all activities and
                                managing resources.

                                To our suppliers we offer
                                • Easy terms of trade
                                • Payment within due time


                                OUR OBJECTIVES
                                • 100% on time delivery of the services to our valued customers
                                • 100% accuracy in documentation
                                • 100% customers acceptance of our services as valid and usables in accordance with
                                their requirements
                                • Overall reduction of cost by 2% every year
                                • Reduction of customer complaints by 10 % every year.
                            </div>

                            <a href="page-about-5.html" class="btn rounded-pill bg-blue2 sm-butn text-white">
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
                                Our team can assist you in transforming your business through latest tech
                                capabilities to stay ahead of the curve.
                            </div>
                            <ul>
                                <li> <i class="bi bi-star-fill me-3">BDLeather.com</i>
                                   </li>
                                <li> <i class="bi bi-star-fill me-3"></i>+8801308389719</li>
                                <li> <i class="bi bi-star-fill me-3"></i>BDLeather@info.com</li>
                                <li> <i class="bi bi-star-fill me-3"></i>Tenary Moor Hazari Bag Dhanmondi Dhaka 1207</li>
                            </ul>
                            <a href="page-about-5.html" class="btn rounded-pill border-blue2 hover-blue2 mt-60 sm-butn">
                                <span>How We Works</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img img-right">
                <img style="border-radius: 50%; height: 500px !important;width: 500px !important;" src="{{ asset('frontend/image/contactus/Stock_leather_factory.original.avif') }}" alt="">
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
                    <div class="col-lg-4">
                        <div class="project-card d-block mb-30 style-3">
                            <a href="page-single-project-5.html" class="img img-cover d-block">
                                <img src="{{ asset('frontend/image/categories/category_four.jpg') }}" alt="">
                            </a>
                            <div class="info">
                                <h5 class="h5"><a href="page-single-project-5.html">Cow Spilit Leather</a></h5>
                                <!-- <small class="small"><a href="#">Game Development</a></small>  -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-card d-block mb-30 style-3">
                            <a href="page-single-project-5.html" class="img img-cover d-block">
                                <img src="{{ asset('frontend/image/categories/category_three.jpg') }}" alt="">
                            </a>
                            <div class="info">
                                <h5 class="h5"><a href="">Cow Leather</a></h5>
                                <!-- <small class="small"><a href="#">Game Development</a></small>  -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-card d-block style-3 mb-30 mb-lg-0">
                            <a href="page-single-project-5.html" class="img img-cover d-block">
                                <img src="{{ asset('frontend/image/categories/category_three.jpg') }}" alt="">
                            </a>
                            <div class="info">
                                <h5 class="h5"><a href="">Sheep Leather</a></h5>
                                <!-- <small class="small"><a href="#">Game Development</a></small>  -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-card d-block style-3">
                            <a href="page-single-project-5.html" class="img img-cover d-block">
                                <img src="{{ asset('frontend/image/categories/category_two.jpg') }}" alt="">
                            </a>
                            <div class="info">
                                <h5 class="h5"><a href="page-single-project-5.html">Goat Leather</a></h5>
                                <!-- <small class="small"><a href="#">Game Development</a></small>  -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-card d-block style-3">
                            <a href="" class="img img-cover d-block">
                                <img src="{{ asset('frontend/image/categories/category_four.jpg') }}" alt="">
                            </a>
                            <div class="info">
                                <h5 class="h5"><a href="">Buffalo Spilit Leather</a></h5>
                                <!-- <small class="small"><a href="#">Game Development</a></small>  -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-card d-block style-3">
                            <a href="page-single-project-5.html" class="img img-cover d-block">
                                <img src="{{ asset('frontend/image/categories/category_four.jpg') }}" alt="">
                            </a>
                            <div class="info">
                                <h5 class="h5"><a href="">Buffalo Leather</a></h5>
                                <!-- <small class="small"><a href="#">Game Development</a></small>  -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="page-portfolio-5.html" class="btn rounded-pill bg-blue2 sm-butn mt-60 text-white">
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
                            <h3>BDLeather <span>Journal</span></h3> <a href="page-blog-5.html" class="text-muted ms-5 ps-5 mt-2">All
                                Articles <i class="bi bi-chevron-right ms-1"></i></a>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-4 mb-4">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <a href="page-single-post-5.html" class="img img-cover">
                                        <img src="{{ asset('frontend/image/contactus/Stock_leather_factory.original.avif') }}" class="radius-2" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-light pe-3 me-3 color-blue2 fw-bold">
                                            Blogs</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 Days ago</a>
                                        </small>
                                        <h6 class="card-title"><a href="page-single-post-5.html">How To  Export Leather From Bangladesh</a></h6>
                                        <div
                                            class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> BDLeather
                                                </a>
                                            </div>
                                            {{-- <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-4 mb-4">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <a href="page-single-post-5.html" class="img img-cover">
                                        <img src="{{ asset('frontend/image/categories/category_four.jpg') }}" class="radius-2" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-light pe-3 me-3 color-blue2 fw-bold">Blogs</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">5 Days ago</a>
                                        </small>
                                        <h6 class="card-title"><a href="page-single-post-5.html">Which Leather IS Good</a></h6>
                                        <div
                                            class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> BDLeather
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 pb-4 mb-4 pb-lg-0 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <a href="page-single-post-5.html" class="img img-cover">
                                        <img src="{{ asset('frontend/image/categories/category_three.jpg') }}" class="radius-2" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-light pe-3 me-3 color-blue2 fw-bold">
                                                Blogs</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">1 month ago</a>
                                        </small>
                                        <h6 class="card-title"><a href="page-single-post-5.html">Solutions For Export Leather</a></h6>
                                        <div
                                            class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> BDleather
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="faq style-3">
                        <div class="section-head style-3 text-uppercase mb-50">
                            <h3>FAQS</h3>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true"
                                        aria-controls="collapse1">
                                        How To Contact Us?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show"
                                    aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Through the collaboration with customers in discussing needs and demand,
                                        we're able to attain mutual understanding, gain customer trust to offer
                                        appropriate advice
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse2"
                                        aria-expanded="false" aria-controls="collapse2">
                                        Can I Pay With Paypal or Payoneer?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse"
                                    aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Through the collaboration with customers in discussing needs and demand,
                                        we're able to attain mutual understanding, gain customer trust to offer
                                        appropriate advice
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse3"
                                        aria-expanded="false" aria-controls="collapse3">
                                        How Long The Process
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse"
                                    aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Through the collaboration with customers in discussing needs and demand,
                                        we're able to attain mutual understanding, gain customer trust to offer
                                        appropriate advice
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse4"
                                        aria-expanded="false" aria-controls="collapse4">
                                        How About  Security & NDA Agreement
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse"
                                    aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Through the collaboration with customers in discussing needs and demand,
                                        we're able to attain mutual understanding, gain customer trust to offer
                                        appropriate advice
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse5"
                                        aria-expanded="false" aria-controls="collapse5">
                                        which Time Is Good For Supply ?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse"
                                    aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Through the collaboration with customers in discussing needs and demand,
                                        we're able to attain mutual understanding, gain customer trust to offer
                                        appropriate advice
                                    </div>
                                </div>
                            </div>
                            {{-- <a href="page-contact-5.html" class="text-muted text-uppercase mt-50 small">
                                See More
                                <i class="bi bi-chevron-right ms-1"></i>
                            </a> --}}
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

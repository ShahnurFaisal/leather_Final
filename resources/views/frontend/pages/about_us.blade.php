@extends('frontend.partials.app')
@section('content')

   <!-- ====== start inner-header style-5 ====== -->
   <section class="inner-header style-5">
    <div class="container">
        <div class="content">

            <h2> About Our Company </h2>
            <img src="assets/img/header/head7_rock.png" alt="" class="side-img slide_up_down">
        </div>
    </div>
</section>
<!-- ====== end inner-header style-5 ====== -->

<!--Contents-->
<main class="about-page style-2">

    <!-- ====== start careers-features ====== -->
    <section class="about style-2 section-padding">
        <div class="container">
            <div class="row align-items-center">
                {{-- @foreach ($data['about_us'] as $about_us)  --}}
                <div class="col-lg-6">
                    <div class="img img-cover">
                        <img src="{{asset($about_us->image ? $about_us->image :'frontend/image/about/about2.png')}}" alt="about2">
                    </div>
                </div>
                {{-- @endforeach  --}}

                <div class="col-lg-6">
                    <div class="info px-lg-5">
                        <div class="section-head style-5 mb-40">
                            <h2 class="mb-20">{{ $about_us->title }}</h2>
                        </div>
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="abt1-tab" data-bs-toggle="pill" data-bs-target="#abt1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    Our Mission
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="abt2-tab" data-bs-toggle="pill" data-bs-target="#abt2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                    Our vision
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="abt3-tab" data-bs-toggle="pill" data-bs-target="#abt1" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Our Goal
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="abt1" role="tabpanel">
                                <p class="text">{{ $about_us->description }}</p>
                                <div class="d-flex align-items-center mt-40">
                                    <div class="btns">
                                        <a href="#" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                            <span> Learn More </span>
                                        </a>
                                    </div>
                                    <div class="inf ms-3">
                                        <p class="color-999"> Support Email </p>
                                        <a href="#" class="fw-bold color-000"> {{ $about_us->email }} </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="abt2" role="tabpanel">
                                <p class="text"> Embark on a journey through the artistry of leather at [Your Business Name]. Our about section is a testament to our commitment to fine craftsmanship, where every stitch and detail tells a story of timeless elegance. Discover the essence of style, meticulously crafted for those who seek to elevate their every moment .</p>
                                <div class="d-flex align-items-center mt-40">
                                    <div class="btns">
                                        <a href="#" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                            <span> Learn More </span>
                                        </a>
                                    </div>
                                    <div class="inf ms-3">
                                        <p class="color-999"> Support Email </p>
                                        <a href="#" class="fw-bold color-000"> info@webmail.com </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/img/about/about2_pattern_l.png" alt="" class="pattern_l">
        <img src="assets/img/about/about2_pattern_r.png" alt="" class="pattern_r">
    </section>
    <!-- ====== end careers-features ====== -->


    <!-- ====== start timeline ====== -->
    <section class="timeline section-padding bg-gray5">
        <div class="container">
            <div class="section-head text-center mb-70 style-5">
                <h2 class="mb-20"> Journey Was <span> Started </span> </h2>
                <p>More than 15,000 companies trust and choose Itech</p>
            </div>
            <div class="timeline-content">
                <div class="timeline-card">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-lg-4">
                            <div class="card-year text-lg-end wow left_to_right_apperance ">
                                <h3> 2000 </h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-info wow left_to_right_apperance ">
                                <h6>  A Vision Takes Root </h6>
                                <p> In the dawn of the new millennium, our journey began with a vision – a vision to redefine the standards of quality and craftsmanship in the world of [Your Industry]. Founded in the year 2000, we set out on a mission to create products that seamlessly blend innovation and tradition, setting the stage for what would become a legacy of excellence. </p>
                                <span class="num"> 01 </span>
                            </div>
                        </div>
                    </div>
                    <div class="line wow"></div>
                </div>
                <div class="timeline-card">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-lg-4">
                            <div class="card-info wow left_to_right_apperance">
                                <h6> Nurturing Growth and Innovation </h6>
                                <p> Five years into our journey, we witnessed growth and evolution. With a commitment to innovation and a focus on customer satisfaction, we expanded our offerings and embraced new technologies. The year 2005 marked a pivotal moment as we carved our niche in the market, earning the trust of discerning customers seeking the perfect blend of style and substance.

                                </p>
                                <span class="num"> 02 </span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-year wow left_to_right_apperance ">
                                <h3> 2005 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="line wow"></div>
                </div>
                <div class="timeline-card">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-lg-4">
                            <div class="card-year text-lg-end wow left_to_right_apperance ">
                                <h3> 2015 </h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-info wow left_to_right_apperance ">
                                <h6> Milestones and Unwavering Dedication </h6>
                                <p> A decade into our journey, the year 2015 was marked by milestones and achievements. Fueled by unwavering dedication, we introduced groundbreaking designs and further refined our craftsmanship. This year symbolized a testament to our commitment to becoming a brand synonymous with quality and sophistication.

                                </p>
                                <span class="num"> 03 </span>
                            </div>
                        </div>
                    </div>
                    <div class="line wow"></div>
                </div>
                <div class="timeline-card">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-lg-4">
                            <div class="card-info wow left_to_right_apperance ">
                                <h6> Global Recognition and Expansion </h6>
                                <p> In 2018, our journey took a global turn. Recognized for our exceptional products, we expanded our reach beyond borders, making our mark on the international stage. This year was a testament to the perseverance of our team and the loyalty of our growing community of patrons.

                                </p>
                                <span class="num"> 04 </span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-year wow left_to_right_apperance ">
                                <h3> 2018 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="line wow"></div>
                </div>
                <div class="timeline-card">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-lg-4">
                            <div class="card-year text-lg-end wow left_to_right_apperance ">
                                <h3> 2022 </h3>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-info wow left_to_right_apperance ">
                                <h6> Crafting the Future </h6>
                                <p> As we reflect on the years gone by, we are grateful for the support of our customers, the dedication of our team, and the inspiration drawn from our rich history. The journey continues, and we invite you to be a part of the narrative as we shape the future together. Here's to the next milestone, the next innovation, and the next chapter in our extraordinary journey. </p>
                                <span class="num"> 05 </span>
                            </div>
                        </div>
                    </div>
                    <div class="line wow"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end timeline ====== -->


    <!-- ====== start career form ====== -->
    {{-- <section class="clients-imgs pt-100">
        <div class="container">
            <div class="section-head text-center mb-70 style-5">
                <h2 class="mb-20"> Trusted By Thousands <span> Business </span> </h2>
            </div>
            <div class="clients-content">
                <a href="#" class="client-logo">
                    <img src="{{asset('frontend/image/logo/2.png')}}" alt="">
                </a>
                <a href="#" class="client-logo">
                    <img src="{{asset('frontend/image/logo/7.png')}}" alt="">
                </a>
                <a href="#" class="client-logo">
                    <img src="{{asset('frontend/image/logo/11.png')}}" alt="">
                </a>
                <a href="#" class="client-logo">
                    <img src="a{{asset('frontend/image/logo/12.png')}}" alt="">
                </a>
                <a href="#" class="client-logo">
                    <img src="{{asset('frontend/image/logo/15.png')}}" alt="">
                </a>
                <a href="#" class="client-logo">
                    <img src="{{asset('frontend/image/logo/16.png')}}" alt="">
                </a>
                <a href="#" class="client-logo">
                    <img src="{{asset('frontend/image/logo/18.png')}}" alt="">
                </a>
                <a href="#" class="client-logo">
                    <img src="{{asset('frontend/image/logo/3.png')}}" alt="">
                </a>
                <a href="#" class="client-logo">
                    <img src="{{asset('frontend/image/logo/5.png')}}" alt="">
                </a>
            </div>
            <h5 class="text-center mt-50 mb-50"> More <span class="color-blue5"> 15,000 </span> Companies & partners trusted & choice Itekseo </h5>
        </div>

    </section> --}}
    <!-- ====== end career form ====== -->



</main>
<!--End-Contents-->
@endsection

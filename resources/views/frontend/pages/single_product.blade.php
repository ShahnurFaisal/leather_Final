@extends('frontend.partials.app')
@section('content')
<!--Contents-->
<main class="product-page style-5">
    <!-- ====== start product ====== -->
    <section class="product pt-150">
        <div class="container">
            <div class="section-head text-center mb-80 style-5">
                <div class="page-links color-999">
                    <a href="#" class="me-2">
                        Home
                    </a>
                    <span class="me-2">/</span>
                    <a href="#" class="me-2">
                       Our Product
                    </a>
                    <span class="me-2">/</span>
                    <a href="#" class="color-000">
                      Cow spilit Leather
                    </a>
                </div>
            </div>

            <div class="content">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="product-slider">
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img style="width: 100%; height:100%" src="{{ asset('frontend/image/categories/category_four.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img src="{{ asset("frontend/image/categories/category_two.jpg") }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img src="{{ asset('frontend/image/contactus/Stock_leather_factory.original.avif') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img src="{{ asset('frontend/image/contactus/Stock_leather_factory.original.avif') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img src="{{ asset('frontend/image/contactus/Stock_leather_factory.original.avif') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img src="{{ asset('frontend/image/contactus/Stock_leather_factory.original.avif') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img src="{{ asset('frontend/image/contactus/Stock_leather_factory.original.avif') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img">
                                            <img src="{{ asset('frontend/image/contactus/Stock_leather_factory.original.avif') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-info">
                            <h6 class="category">Category</h6>
                            <h5 class="title">Product Name</h5>
                            <div class="rate">
                                <div class="stars">
                                    <i class="fas fa-star active"></i>
                                    <i class="fas fa-star active"></i>
                                    <i class="fas fa-star active"></i>
                                    <i class="fas fa-star active"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                            <div class="info-text">
                                Without a strong digital platform, time and money are wasted, content sits
                                unnoticed, and prospective clients disappear.lorem lorem lorem
                            </div>

                            <div class="socail-icons">
                                <a href="#"
                                    class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#"
                                    class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#"
                                    class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#"
                                    class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#"
                                    class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end product ====== -->


    <!-- ====== start product details ====== -->
    <section class="product-details pt-100">
        <div class="container">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description"
                        aria-selected="true">Description</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-information-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information"
                        aria-selected="false">Specification</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                    <div class="content-info text-center pb-0">
                        <div class="text mb-30">
                            Nulla velit turpis, tincidunt eget elit vitae, congue sodales metus. Sed sed neque luctus, sollicitudin sem sed, consectetur libero. Nunc mollis turpis velit, vitae laoreet sapien vehicula nec. Curabitur blandit ac libero eu dictum. Nullam vehicula hendrerit nisl eu laoreet. Cras non velit est. Vivamus tincidunt lacus est, at auctor elit finibus et. Maecenas a consequat metus. Aliquam ac nisl nec est mollis faucibus eget vitae eros. Duis bibendum vestibulum felis id mattis.
                        </div>
                        <div class="text">
                            Suspendisse metus sapien, lacinia eu lectus sit amet, consequat mollis felis. Mauris convallis augue quis semper venenatis. Vivamus imperdiet leo at neque efficitur, id faucibus arcu eleifend. Vivamus in massa bibendum, aliquet est quis, ornare lacus.
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab">
                    <div class="content-info pb-0">
                        <div class="additional-info">
                            <ul>
                                <li>
                                    <strong>Weight</strong>
                                    <span> 0.6 kg </span>
                                </li>
                                <li>
                                    <strong>Dimensions</strong>
                                    <span> 40 × 30 × 30 cm </span>
                                </li>
                                <li>
                                    <strong>Color</strong>
                                    <span> White, Black, Red </span>
                                </li>
                                <li>
                                    <strong>Year</strong>
                                    <span> 2021 </span>
                                </li>
                                <li>
                                    <strong>Style</strong>
                                    <span> Classic, Modern </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end product details ====== -->


    <!-- ====== start Related products ====== -->
    <section class="related-products section-padding">
        <div class="container">
            <div class="text-center title">
                <h3>Related Products</h3>
            </div>
            <div class="related-products-slider position-relative">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img">
                                    <img src="assets/img/shop/products/1.png" alt="">
                                    <span class="label new">new</span>
                                    <span class="fav-btn active"> <i class="fas fa-heart"></i> </span>
                                </div>
                                <div class="info">
                                    <h6 class="category">asus</h6>
                                    <h5 class="title">ASUS Chromebook Flip -10.2 inch, 256GB</h5>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rev">3 Reviews</span>
                                    </div>
                                </div>
                                <div class="price">
                                    $197.00
                                </div>

                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-20" target="_blank">
                                    <span> Add To Cart </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img">
                                    <img src="assets/img/shop/products/2.png" alt="">
                                    <span class="label sale-off">15% off</span>
                                    <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                </div>
                                <div class="info">
                                    <h6 class="category">apple</h6>
                                    <h5 class="title">Macbook Air 2018, 1 TB</h5>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                        </div>
                                        <span class="rev">3 Reviews</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <span class="price-sale">$421.00</span> <span class="old-price">$521.00</span>
                                </div>

                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-20" target="_blank">
                                    <span> Add To Cart </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img">
                                    <img src="assets/img/shop/products/3.png" alt="">
                                    <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                </div>
                                <div class="info">
                                    <h6 class="category">Samsung</h6>
                                    <h5 class="title">Samsung New VR Headset, Oculus 2.0</h5>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rev">3 Reviews</span>
                                    </div>
                                </div>
                                <div class="price">
                                    $197.00
                                </div>

                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-20" target="_blank">
                                    <span> Add To Cart </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img">
                                    <img src="assets/img/shop/products/4.png" alt="">
                                    <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                </div>
                                <div class="info">
                                    <h6 class="category">brand name</h6>
                                    <h5 class="title">iPhone 6s Gold 64GB, Retina Ready</h5>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rev">3 Reviews</span>
                                    </div>
                                </div>
                                <div class="price">
                                    $197.00
                                </div>

                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-20" target="_blank">
                                    <span> Add To Cart </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img">
                                    <img src="assets/img/shop/products/5.png" alt="">
                                    <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                </div>
                                <div class="info">
                                    <h6 class="category">Xbox</h6>
                                    <h5 class="title">Xbox One Controller</h5>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rev">3 Reviews</span>
                                    </div>
                                </div>
                                <div class="price">
                                    $197.00
                                </div>

                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-20" target="_blank">
                                    <span> Add To Cart </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img">
                                    <img src="assets/img/shop/products/6.png" alt="">
                                    <span class="label sale-off">15% off</span>
                                    <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                </div>
                                <div class="info">
                                    <h6 class="category">amcrest</h6>
                                    <h5 class="title">Amcrest Outdoor Camera</h5>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rev">3 Reviews</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <span class="price-sale">$421.00</span> <span class="old-price">$521.00</span>
                                </div>

                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-20" target="_blank">
                                    <span> Add To Cart </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img">
                                    <img src="assets/img/shop/products/7.png" alt="">
                                    <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                </div>
                                <div class="info">
                                    <h6 class="category">dji2</h6>
                                    <h5 class="title">DJI II Phantom 4 Quad Drone With Camera</h5>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rev">3 Reviews</span>
                                    </div>
                                </div>
                                <div class="price">
                                    $197.00
                                </div>

                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-20" target="_blank">
                                    <span> Add To Cart </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <div class="img">
                                    <img src="assets/img/shop/products/8.png" alt="">
                                    <span class="fav-btn"> <i class="fas fa-heart"></i> </span>
                                </div>
                                <div class="info">
                                    <h6 class="category">gopro</h6>
                                    <h5 class="title">Gopro Hero 4 Sliver 4K HD, Wireles Sport Camera</h5>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rev">3 Reviews</span>
                                    </div>
                                </div>
                                <div class="price">
                                    $197.00
                                </div>

                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-20" target="_blank">
                                    <span> Add To Cart </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- ====== end Related products ====== -->

</main>
<!--End-Contents-->
@endsection

<!-- ====== start footer ====== -->
<footer class="style-3">
    <div class="container">
        <div class="row gx-0 justify-content-between">
            <div class="col-lg-3">
                <div class="items">
                    <div class="title">
                        BDLeather - 1st Choice for Leather Export
                    </div>
                    <small class="text">
                        Over 25 years working in Exporting Best Quality Leather Product With Affordable Price .
                    </small>
                    @foreach ($data['about_us'] as $about_us)
                        
                    @endforeach
                    <div class="socail-icons">
                        <a href="#" class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="{{ $about_us->web_link }}" class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            @foreach ($data['about_us'] as $about_us)
            <div class="col-lg-3">
                <div class="items">
                    <div class="title">
                        Information
                    </div>
                    <small class="text mb-10 d-block">
                        {{ $about_us->address }}
                    </small>
                    <small class="text mb-10 d-block">
                        {{ $about_us->phone }}
                    </small>
                    <small class="text d-block">
                        {{ $about_us->email }}
                    </small>
                </div>
            </div>
            @endforeach
            
            <div class="col-lg-2">
                <div class="items">
                    <div class="title">
                        Useful Links
                    </div>
                    <ul>
                        <li>
                            <a href="home-software-company.html"> Home </a>
                        </li>
                        <li>
                            <a href="page-about-5.html"> About Iteck </a>
                        </li>
                        <li>
                            <a href="page-portfolio-5.html"> Products </a>
                        </li>
                        <li>
                            <a href="page-about-5.html"> How It Works </a>
                        </li>
                        <li>
                            <a href="page-blog-5.html"> Blog </a>
                        </li>
                        <li>
                            <a href="page-contact-5.html"> Contact </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="items">
                    <div class="title">
                        Services
                    </div>
                    <ul>
                        <li>
                            <a href="page-services-5.html"> Product Supply </a>
                        </li>
                        <li>
                            <a href="page-services-5.html"> Product Manufactering </a>
                        </li>
                        <li>
                            <a href="page-services-5.html"> Exporting </a>
                        </li>
                        <li>
                            <a href="page-services-5.html"> Client Satisfaction </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="foot">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <!-- <img  src="assets/image/logo/WhatsApp Image 2023-10-22 at 12.10.10 PM.jpeg" alt=""> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <small class="small">
                        © 2022 Copyrights by <a href="#" class="fw-bold text-decoration-underline">BDLeather.</a> All Rights Reserved. Designed by <a href="#" class="fw-bold text-decoration-underline">Us</a>
                    </small>
                </div>
            </div>
            <img src="assets/img/testimonials/testi3_lines.png" alt="" class="testi_lines w-100">
        </div>
    </div>
    <img src="assets/img/contact_globe.svg" alt="" class="contact_globe">
</footer>
<!-- ====== end footer ====== -->

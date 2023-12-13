@extends('frontend.partials.app')
@section('content')
   <!--Contents-->
   <main class="contact-page style-5">
    <!-- ====== start contact page ====== -->
    <section class="community section-padding style-5">
        <div class="container">
            <div class="section-head text-center style-4 mb-40">
                <small class="title_small">Contact us</small>
                <h2 class="mb-20">Get In  <span> Touch </span> </h2>
                <p>We will contact again after receive your request in 24h</p>
            </div>
            <div class="content rounded-pill">
                <div class="commun-card">
                    <div class="icon icon-45">
                        <img src="assets/img/icons/mail3d.png" alt="">
                    </div>
                    <div class="inf">
                        <h5>settgroup@gmail.com</h5>
                    </div>
                </div>
                <div class="commun-card">
                    <div class="icon icon-45">
                        <img src="assets/img/icons/map3d.png" alt="">
                    </div>
                    <div class="inf">
                        <h5>58 Howard St, Dhanmondi, Dhaka</h5>
                    </div>
                </div>
                <div class="commun-card">
                    <div class="icon icon-45">
                        <img src="assets/img/icons/msg3d.png" alt="">
                    </div>
                    <div class="inf">
                        <h5>(+880)1678-138530</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact section-padding pt-0 style-6">
        <div class="container">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        @include('error');
                        @if (session('success'))
                        <div class="text-success">{{ session('success') }}</div>
                        @elseif (session('error'))
                        <div class="text-danger">{{ session('error') }}</div>
                        @endif
                        <form action="{{ route('customer.request.add') }}" class="form" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="name" class="form-control" placeholder="Name *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 offset-3">
                                    <div class="form-group mb-20">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number " >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea rows="10" name="message" class="form-control" placeholder="How can we help you?*"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-3 text-center">
                                    <input type="submit" value="Send Your Request" class="btn rounded-pill bg-blue4 fw-bold text-white text-light fs-12px">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <img src="assets/img/icons/contact_a.png" alt="" class="contact_a">
                <img src="assets/img/icons/contact_message.png" alt="" class="contact_message">
            </div>
        </div>
    </section>
    <!-- ====== end contact page ====== -->

    <!-- ====== start contact page ====== -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29218.769607746333!2d90.34088855895915!3d23.735030821581525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf486a645f2d%3A0x16f8f87df710d4af!2sHazaribag%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1698764780103!5m2!1sen!2sbd" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ====== start contact page ====== -->
</main>
<!--End-Contents-->
@endsection

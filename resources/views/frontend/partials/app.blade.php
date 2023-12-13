<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>{{ isset($data['page_title']) ?  $data['page_title'] :  'SettLeather.com' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/fav.png') }}" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->

    <link rel="stylesheet" href="{{ asset('frontend/css/lib/bootstrap.min.css') }}">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/css/lib/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{asset('frontend/css/lib/jquery.fancybox.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/lib/lity.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/lib/swiper.min.css')}}" />
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    @stack('css')
</head>

<body>
    {{-- <div id="preloader">
    </div> --}}
    @include('frontend.partials.navbar')
    @yield('content')
    @include('frontend.partials.footer')
    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="{{asset('frontend/js/lib/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/lib/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/lib/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/js/lib/wow.min.js')}}"></script>
    <script src="{{asset('frontend/js/lib/jquery.fancybox.js')}}"></script>
    <script src="{{asset('frontend/js/lib/lity.js')}}"></script>
    <script src="{{asset('frontend/js/lib/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/js/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/lib/jquery.counterup.js')}}"></script>
    <script src="{{asset('frontend/js/lib/pace.js')}}"></script>
    <script src="{{asset('frontend/js/lib/scrollIt.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
  @stack('js')

</body>

</html>

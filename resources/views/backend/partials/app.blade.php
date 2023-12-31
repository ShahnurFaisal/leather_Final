<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{ isset($data['page_title']) ? $data['page_title'] : 'leather' }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('backend/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('backend/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/css/demo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('backend') }}/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('backend') }}/js/config.js"></script>
    @stack('css')
  </head>

  <body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        @include('backend.partials.sideBar')
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @include('backend.partials.navbar')
            <!-- Content -->
            @yield('content')
            <!-- Footer -->
            @include('backend.partials.footer')
            <!-- / Footer -->
    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
{{-- <script>
  @if(Session::has('message'))
  toastr.options = {
      'closeButton': true,
      'progressBar': true
  }
  toastr.success("{{session('message')}}");
  @endif
  </script> --}}
<script src="{{ asset('backend') }}/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('backend') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('backend') }}/vendor/js/bootstrap.js"></script>
<script src="{{ asset('backend') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('backend') }}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('backend') }}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('backend') }}/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('backend') }}/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
@stack('js')
</body>
</html>

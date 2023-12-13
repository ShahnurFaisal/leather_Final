    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-dark style-3 position-absolute w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img style="border-radius: 50%; height: 50px; width: 50px"
                    src="{{ asset('frontend/image/logo/WhatsApp Image 2023-10-22 at 12.10.10 PM.jpeg')}}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ $data['active_menu'] == 'home' ? 'active' : '' }}" href="{{ route('home') }}" id="" role="button" aria-expanded="false">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $data['active_menu'] == 'about_us' ? 'active' : '' }}" href="{{ route('about.us') }}"> About Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $data['active_menu'] == 'product' ? 'active' : '' }}" href="{{ route('product') }}"> Our Product </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="page-portfolio-5.html"> Services </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ $data['active_menu'] == 'home' ? 'blog' : '' }}" href="{{ route('blog')}}"> Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $data['active_menu'] == 'home' ? 'contact' : '' }}" href="{{ route('contact') }}"> Contact Us </a>
                    </li>
                </ul>
                <div class="nav-side">
                    <div class="d-flex ps-4">

                        {{-- <div class="dropdown">
                            <button
                                class="icon-35 dropdown-toggle p-0 border-0 bg-transparent rounded-circle img-cover text-white"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Gallery
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">PHOTO</a></li>
                                <li><a class="dropdown-item" href="#">VIDEO</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

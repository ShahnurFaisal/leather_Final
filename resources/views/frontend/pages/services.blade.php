@extends('frontend.partials.app')
@section('content')
    <!-- ====== start inner-header style-5 ====== -->
    <section class="inner-header style-5">
        <div class="container">
            <div class="content text-center">

                <h2> Our Services </h2>
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
                @foreach ($data['services'] as $single_service)

                <div class="card mb-3">
                    <div class="single_service">
                        <div class="row">
                            <div class="col-lg-4">
                                <img style="height: 300px;width:500px" src="{{ asset($single_service->photo) }}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <div class="title" style="color: blue">{{$single_service->title}}</div>
                                <div class="title">{{$single_service->description}}</div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- ====== end careers-features ====== -->
    </main>
    <!--End-Contents-->
@endsection

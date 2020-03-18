@extends('layouts.frontend')
@section('content')
    <!-- Start Breadcrumbs -->
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">about</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- About US -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="single-image overlay">
                        <img src="{{asset('assets/frontend/images/about.jpg')}}" alt="#">
                        <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-text">
                        <h2>About Our Education</h2>
                        <p>As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality.</p>
                        <p>face physical experiences, and bringing their essence to life, not only through digital immersion creativity but through new technology as well including Virtual Reality As marketing professionals in the experiential world, we have become accusto to the idea of an ever evolving industry. Brands today are moving away from purely face to face physical experiences,</p>
                        <div class="button">
                            <a href="#" class="btn">Our Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End About US -->
@endsection

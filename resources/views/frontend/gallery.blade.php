@extends('layouts.frontend')

@section('additionalCSS')
    <link rel="stylesheet" href="{{asset('assets/frontend/lightbox2/css/lightbox.min.css')}}">

@stop

@section('content')

    <!-- Start Breadcrumbs -->
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$gallery_category->name}} </h2>
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">{{$gallery_category->name}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- Features -->
    <section class="our-features section ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Your <span> Photo</span> Gallery</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($galleries as $gallery)
                    <div class="col-lg-4 col-md-4 col-12">
                    <!-- Single Feature -->
                    <a href="{{asset($gallery->image)}}" data-lightbox="album" data-title="{{$gallery->title}}" data-alt="not">
                    <div class="single-feature">
                        <div class="feature-head">
                            <img src="{{asset($gallery->image)}}" alt="#">
                        </div>

                    </div>
                    <!--/ End Single Feature -->
                </a>

            </div>
                @endforeach
        </div>
        </div>

    </section>
    <!-- End Features -->

<div class="container">
    <div class="row">
        <div class="col-12 text-center">

            <!-- Start Pagination -->
            <div class="pagination-main">
                {{$galleries->links()}}
            </div>
            <!--/ End Pagination -->
        </div>
    </div>
</div>

@endsection

@section('additionalJS')
    <script src="{{asset('assets/frontend/lightbox2/js/lightbox.min.js')}}"></script>
@endsection

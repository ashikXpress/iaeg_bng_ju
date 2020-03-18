<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="SITE KEYWORDS HERE" />
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>{{config('app.name')}}</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/frontend/images/favicon.png')}}">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.fancybox.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slicknav.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">

    <!-- Learedu Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">

    <!-- Learedu Color -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/color/color1.css')}}">

{{--    <link rel="stylesheet" href="{{asset('assets/frontend/css/color/color2.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('assets/frontend/css/color/color3.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('assets/frontend/css/color/color4.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('assets/frontend/css/color/color5.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('assets/frontend/css/color/color6.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('assets/frontend/css/color/color7.css')}}">--}}

{{--    <link rel="stylesheet" href="{{asset('assets/frontend/css/color/color8.css')}}">--}}

    <link rel="stylesheet" href="#" id="colors">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
        .contact .form-head .form-group select {
            height: 50px;
            width: 100%;
            padding-left: 15px;
            box-shadow: none;
            text-shadow: none;
            border: 1px solid #eeeeee;
            color: #666666;
            font-size: 15px;
        }

        .archives.section .pagination li a,.pagination li a,.courses.archives .pagination li a,.page-item.active .page-link,.page-item.disabled .page-link{
            padding: 20px 29px;
            border: none;
            display: block;
            background: #f6f6f6;
            color: #252525;
        }
        .page-item.active .page-link{
            background: #00B16A;
            color: #fff;
        }
        .page-item.disabled .page-link{
            pointer-events: none;
        }

    </style>
    @yield('additionalCSS')
</head>
<body>

<!-- Book Preloader -->
<div class="book_preload">
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>
</div>
<!--/ End Book Preloader -->

<!-- Mp Color -->

<!--/ End Mp Color -->

<!-- Header -->
<header class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <!-- Contact -->
                    <ul class="content">
                        <li><i class="fa fa-phone"></i>123-456-789</li>
                        <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"></i>contact@yourdomain.com</a></li>
{{--                        <li><i class="fa fa-clock-o"></i>Opening: 10:00am - 5:00pm</li>--}}
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Social -->
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus "></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                    <!-- End Social -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('assets/frontend/images/logo.png')}}" alt="#"></a>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <div class="single-widget">
                            <i class="fa fa-phone"></i>
                            <h4>Call Now<span>(+121) 1800 567 980</span></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-envelope-o"></i>
                            <h4>Send Message<a href="mailto:mailus@mail.com"><span>support@education.com</span></a></h4>
                        </div>
                        <div class="single-widget">
                            <i class="fa fa-map-marker"></i>
                            <h4>Our Location<span>211 Ronad, California, Us</span></h4>
                        </div>
                    </div>
                    <!--/ End Header Widget -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
    <!-- Header Menu -->
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-collapse">
                            <!-- Main Menu -->

                            <ul id="nav" class="nav menu navbar-nav">
                                <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
                                <li  class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}"><a href="{{route('about')}}">About US</a></li>
                                <li class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}"><a href="#">News<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        @foreach($news_category as $item)
                                            <li><a href="{{route('news',$item->id)}}">{{$item->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">Events<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        @foreach($event_category as $item)
                                            <li><a href="{{route('event',$item->id)}}">{{$item->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="{{ Route::currentRouteName() === 'gallery' ? 'active' : '' }}"><a href="#">Gallery<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        @foreach($gallery_category as $item)
                                            <li><a href="{{route('gallery',$item->id)}}">{{$item->name}}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="{{ Route::currentRouteName() === 'member.list' ? 'active' : '' }}"><a href="#">Member<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        @foreach($member_types as $item)
                                            <li><a href="{{route('member.list',$item->id)}}">{{$item->name}}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="{{ Route::currentRouteName() === 'contact' ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                            <!-- End Main Menu -->
                            <!-- button -->

                            @if(!Auth::guard('member')->check())
                            <div class="button">
                                <a href="{{route('member.login.form')}}" class="btn"><i class="fa fa-pencil"></i>Log In</a>
                                    Or
                                <a href="{{route('member.register.form')}}" class="btn"><i class="fa fa-pencil"></i>Register</a>
                            </div>
                            @else
                                <div class="button dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::guard('member')->user()->first_name }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class=" dropdown-item" href="{{route('member.dashboard')}}">Dashboard</a>
                                        <a class=" dropdown-item" href="{{route('member.logout')}}">Logout</a>
                                    </div>
                                </div>
                            @endif
                            <!--/ End Button -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Menu -->
</header>
<!-- End Header -->
@yield('content')
<!-- Footer -->
<footer class="footer overlay section">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- About -->
                    <div class="single-widget about">
                        <div class="logo"><a href="#"><img src="{{asset('assets/frontend/images/logo2.png')}}" alt="#"></a></div>
                        <p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur</p>
                        <ul class="list">
                            <li><i class="fa fa-phone"></i>Phone: +123 456-7890 </li>
                            <li><i class="fa fa-envelope"></i>Email: <a href="mailto:info@youremail.com">Info@youremail.com</a></li>
                            <li><i class="fa fa-map-o"></i>Address: 211 Ronad, California, Us</li>
                        </ul>
                    </div>
                    <!--/ End About -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Useful Links -->
                    <div class="single-widget useful-links">
                        <h2>Useful Links</h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>About Us</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Courses</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Events</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Blogs</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Contact</a></li>
                        </ul>
                    </div>
                    <!--/ End Useful Links -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Latest News -->
                    <div class="single-widget latest-news">
                        <h2>Latest Posts</h2>
                        <div class="news-inner">
                            <div class="single-news">
                                <img src="{{asset('assets/frontend/images/blog/blog1.jpg')}}" alt="#">
                                <h4><a href="blog-single.html">Our Teacher the best Link to Savc</a></h4>
                                <p>Nunc purus orci, blandit condimentum rhoncus vels</p>
                            </div>
                            <div class="single-news">
                                <img src="{{asset('assets/frontend/images/blog/blog2.jpg')}}" alt="#">
                                <h4><a href="blog-single.html">Student Have the best Link to Ronae</a></h4>
                                <p>Nunc purus orci, blandit condimentum rhoncus vels</p>
                            </div>
                            <div class="single-news">
                                <img src="{{asset('assets/frontend/images/blog/blog3.jpg')}}" alt="#">
                                <h4><a href="blog-single.html">Sekker the best Link to build</a></h4>
                                <p>Nunc purus orci, blandit condimentum rhoncus vele</p>
                            </div>
                        </div>
                    </div>
                    <!--/ End Latest News -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Newsletter -->
                    <div class="single-widget newsletter">
                        <h2>Subscribe Newsletter</h2>
                        <div class="mail">
                            <p>Don't miss to  subscribe to our news feed, Get the latest updates from us!</p>
                            <div class="form">
                                <input type="email" placeholder="Enter your email">
                                <button class="button" type="submit"><i class="fa fa-envelope"></i></button>
                            </div>
                        </div>
                    </div>
                    <!--/ End Newsletter -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-head">
                        <div class="row">
                            <div class="col-12">
                                <!-- Social -->
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                <!-- End Social -->
                                <!-- Copyright -->
                                <div class="copyright">
                                    <p>© Copyright {{date('Y')}} IAEG - BANGLADESH NATIONAL GROUP. All Rights Reserved |  <a href="http://2aitbd.com/" target="_blank">Design and Developed by 2A IT</a></p>
                                </div>
                                <!--/ End Copyright -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Bottom -->
</footer>
<!--/ End Footer -->

<!-- Jquery JS-->
<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-migrate.min.js')}}"></script>
<!-- Popper JS-->
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!-- Colors JS-->
<script src="{{asset('assets/frontend/js/colors.js')}}"></script>
<!-- Jquery Steller JS -->
<script src="{{asset('assets/frontend/js/jquery.stellar.min.js')}}"></script>
<!-- Particle JS -->
<script src="{{asset('assets/frontend/js/particles.min.js')}}"></script>
<!-- Fancy Box JS-->
<script src="{{asset('assets/frontend/js/facnybox.min.js')}}"></script>
<!-- Magnific Popup JS-->
<script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Masonry JS-->
<script src="{{asset('assets/frontend/js/masonry.pkgd.min.js')}}"></script>
<!-- Circle Progress JS -->
<script src="{{asset('assets/frontend/js/circle-progress.min.js')}}"></script>
<!-- Owl Carousel JS-->
<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<!-- Waypoints JS-->
<script src="{{asset('assets/frontend/js/waypoints.min.js')}}"></script>
<!-- Slick Nav JS-->
<script src="{{asset('assets/frontend/js/slicknav.min.js')}}"></script>
<!-- Counter Up JS -->
<script src="{{asset('assets/frontend/js/jquery.counterup.min.js')}}"></script>
<!-- Easing JS-->
<script src="{{asset('assets/frontend/js/easing.min.js')}}"></script>
<!-- Wow Min JS-->
<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
<!-- Scroll Up JS-->
<script src="{{asset('assets/frontend/js/jquery.scrollUp.min.js')}}"></script>
<!-- Google Maps JS -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
<script src="{{asset('assets/frontend/js/gmaps.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/map-script.js')}}"></script>
<!-- Main JS-->
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker({
            dateFormat: 'yy-mm-dd'
        });
    } );
</script>
@yield('additionalJS')
</body>
</html>

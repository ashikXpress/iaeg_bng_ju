@extends('layouts.frontend')
@section('content')

    <!-- Start Breadcrumbs -->
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                    <ul class="bread-list">
                        <li><a href="{{url('/')}}">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- Contact Us -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2><span>Contact</span> Information</h2>
                        <p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendrerit, sollicitudin nec ante.  </p>
                    </div>
                </div>
            </div>
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="contact-map">
                            <!-- Map -->
                            <div id="map"></div>
                            <!--/ End Map -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        @if(session()->has('success'))
                            <h5 class="alert alert-success">{{session()->get('success')}}</h5>
                        @endif
                        <div class="form-head">

                            <!-- Form -->
                            <form class="form" method="post" action="{{route('contact.mail')}}">
                                @csrf
                                <div class="form-group">
                                    <input name="name" value="{{old('name')}}" type="text" placeholder="Enter Name" >
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                                <div class="form-group">
                                    <input name="email" value="{{old('email')}}" type="email" placeholder="Email Address" >
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                </div>
                                <div class="form-group">
                                    <input name="phone_number" value="{{old('phone_number')}}" type="number" placeholder="Phone Number" >
                                    <span class="text-danger">{{$errors->first('phone_number')}}</span>
                                </div>
                                <div class="form-group">
                                    <input name="subject" value="{{old('subject')}}" type="text" placeholder="Subject" >
                                    <span class="text-danger">{{$errors->first('subject')}}</span>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message" >{{old('message')}}</textarea>
                                    <span class="text-danger">{{$errors->first('message')}}</span>
                                </div>
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn primary">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-bottom">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-map"></i></div>
                            <h3>Location</h3>
                            <p>60 Grant Ave. Central New Road 0708, UK 9766 Tanner</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h3>Email Address</h3>
                            <a href="mailto:information@gmail.com">information@yourwebsite.com</a>
                            <a href="mailto:admission@myuniversity.com">admission@yourwebsite.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Contact-Info -->
                        <div class="contact-info">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h3>Get in Touch</h3>
                            <p>+ (234) 853 232 455669</p>
                            <p>+ (533) 232 423 455600</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->

@endsection

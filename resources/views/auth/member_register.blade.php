@extends('layouts.frontend')
@section('content')
    <!-- Start Breadcrumbs -->
    <section class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Member or Event Joining Registration</h2>
                    <ul class="bread-list">
                        <li><a href="{{route('home')}}">Home<i class="fa fa-angle-right"></i></a></li>
                        <li class="active"><a href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2><span>Registration</span> Information</h2>
                    </div>
                </div>
            </div>
            <div class="contact-head">

            </div>
            <div class="contact-bottom">
                <div class="row">
                    <div class="col-md-8 offset-2">
                        @if(session()->has('success'))
                            <h5 class="alert alert-success">{{session()->get('success')}}</h5>
                        @endif
                        <div class="form-head">

                            <!-- Form -->
                            <form class="form" enctype="multipart/form-data" method="post" action="{{route('member.register')}}">
                                @csrf
                                <div class="form-group">
                                    <input name="first_name" value="{{old('first_name')}}" type="text" placeholder="Enter First Name" >
                                    <span class="text-danger">{{$errors->first('first_name')}}</span>
                                </div>
                                <div class="form-group">
                                    <input name="middle_name" value="{{old('middle_name')}}" type="text" placeholder="Enter Middle Name" >
                                    <span class="text-danger">{{$errors->first('middle_name')}}</span>
                                </div>
                                <div class="form-group">
                                    <input name="last_name" value="{{old('last_name')}}" type="text" placeholder="Enter Last Name" >
                                    <span class="text-danger">{{$errors->first('last_name')}}</span>
                                </div>

                                <div class="form-group">
                                    <input id="datepicker" name="date_of_birth" value="{{old('date_of_birth')}}" type="text" placeholder="Enter Date of Birth" >
                                    <span class="text-danger">{{$errors->first('date_of_birth')}}</span>
                                </div>
                                <div class="form-group">
                                    <input name="email" value="{{old('email')}}" type="email" placeholder="Email Address" >
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                </div>
                                <div class="form-group">
                                    <input name="mobile_number" value="{{old('mobile_number')}}" type="text" placeholder="Enter Mobile Number" >
                                    <span class="text-danger">{{$errors->first('mobile_number')}}</span>
                                </div>
                                <div class="form-group">
                                    <textarea cols="2" name="contact_address" placeholder="Enter Contact Address" >{{old('contact_address')}}</textarea>
                                    <span class="text-danger">{{$errors->first('contact_address')}}</span>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" name="profile_image" value="{{old('profile_image')}}" type="file">
                                    <span class="text-danger">{{$errors->first('profile_image')}}</span>
                                </div>

                                <div class="form-group">
                                    <input name="password" value="{{old('password')}}" type="password" placeholder="Enter Password" >
                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                </div>
                                <div class="form-group">
                                    <input name="confirm_password" value="{{old('confirm_password')}}" type="password" placeholder="Enter Confirm Password" >
                                    <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                                </div>

                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn primary">Register</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

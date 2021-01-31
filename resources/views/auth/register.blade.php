@extends('frontend.layouts.master')
@include('frontend.layouts.partials.breadcrumbs')

@section('content')

    @yield('signup')

<section class="login_register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-12">
                <h1>Register Now</h1>
                <div class="login-container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="login-form">
                                    <div class="login-logo">
                                        <a href="index.html"><img src="images/login-register/logo.svg" alt=""></a>
                                    </div>
                                    <div class="create-text"><h4>Create Your Account</h4></div>
                                    <div class="form-group">
{{--                                        <input type="text" class="video-form" id="fullName" placeholder="Full Name">--}}
                                        <input id="fullName" type="text" class="video-form @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
{{--                                        <input type="email" class="video-form" id="emailAddress"--}}
{{--                                               placeholder="Email Address">--}}
                                        <input id="emailAddress" type="email" class="video-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
{{--                                        <input type="password" class="video-form" id="password1" placeholder="Password">--}}
                                        <input id="password1" type="password" class="video-form @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="signup-checkbox text-left">
                                        <input type="checkbox" id="c1" name="cb">
                                        <label for="c1">I agree to Natto's
                                            <span>Terms of Service, Policy</span>and<span>Content Policies</span>.</label>
                                    </div>
                                    <button type="submit" class="login-btn btn-link">Register Now</button>
                                    <div class="forgot-password">
                                        <p>If you have an account?<a href="{{route('login')}}"><span style="color:#ffa803;"> - Login Now</span></a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@extends('frontend.layouts.master')
@include('frontend.layouts.partials.breadcrumbs')

@section('content')

    @yield('login')

    <section class="login_register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <h1>Login Now</h1>
                    <div class="login-container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="login-form">
                                        <div class="login-logo">
                                            <a href="index.html"><img src="images/login-register/logo.svg" alt=""></a>
                                        </div>
                                        <div class="social-btns">
                                            <button class="facebook-btn"><i class="fab fa-facebook-f"></i>Continue with
                                                facebook
                                            </button>
                                            <button class="google-btn"><i class="fab fa-google"></i>Continue with Google
                                            </button>
                                        </div>
                                        <div class="or">
                                            <p> Or </p>
                                        </div>
                                        <div class="form-group">
                                            <input id="emailphonenumber" type="text" class="video-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Type Email or Phone Number" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="yourPassword" type="password" class="video-form @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="signup-checkbox text-left">
                                            <input type="checkbox" id="c1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="c1">Remember me</label>
                                        </div>
                                        <button type="submit" class="login-btn btn-link">{{ __('Login') }}</button>
                                        <div class="forgot-password">
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                            <p>Don’t have an account? <a href="{{route('register')}}"><span style="color:#ffa803;">- Register Now</span></a>
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

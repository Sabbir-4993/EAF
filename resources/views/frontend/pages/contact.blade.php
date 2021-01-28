@extends('frontend.layouts.master')
@include('frontend.layouts.partials.breadcrumbs')

@section('content')

    @yield('contact')
    <section class="contact-us">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.364781211289!2d75.81453061461437!3d30.87645488574378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a822f922427e3%3A0xff19eac2cb42723!2s2070%2C+Pakhowal+Rd%2C+Karnail+Singh+Nagar+Phase-II%2C+Karnail+Singh+Nagar%2C+Ludhiana%2C+Punjab+141013!5e0!3m2!1sen!2sin!4v1556636382296!5m2!1sen!2sin"
                style="border:0" allowfullscreen></iframe>
            <div class="contact-location-tooltip">
                <div class="tooltip-1 tooltip-main-1">
                    <span class="tooltip-item-1"></span>
                    <h6 class="tooltip-content-1">Natto Comapny</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="contact-heading">
                        <h1>Contact Information</h1>
                    </div>
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="contact-item">
                                    <img src="{{asset('frontend/images/contact/icon-1.svg') }}" alt="">
                                    <h4>Address</h4>
                                    <p>66 Town St - Suite 522 Newyork, United States, GA 11112</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="contact-item">
                                    <img src="{{asset('frontend/images/contact/icon-2.svg') }}" alt="">
                                    <h4>Email Address</h4>
                                    <p><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                          data-cfemail="0947687d7d7d66496e64686065276a6664">[email&#160;protected]</a><br><a
                                            href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="672e0901082709061313084904080a">[email&#160;protected]</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="contact-item">
                                    <img src="{{asset('frontend/images/contact/icon-3.svg') }}" alt="">
                                    <h4>Phone Number</h4>
                                    <p>+2 123 456 789<br>+2 987 654 3210</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="contact-item">
                                    <img src="{{asset('frontend/images/contact/icon-4.svg') }}" alt="">
                                    <h4>24 Support</h4>
                                    <p><a href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                          data-cfemail="064c696e686269636069736862637446616b676f6a2865696b">[email&#160;protected]</a><br><a
                                            href="https://gambolthemes.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="df95beacacb6bcbebcbab09fb8b2beb6b3f1bcb0b2">[email&#160;protected]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="contact-heading">
                        <h1>Write To Us</h1>
                    </div>
                    <div class="contact-info">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="userName">Name*</label>
                                        <input type="text" class="video-form" id="userName" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="emailAddress">Email*</label>
                                        <input type="email" class="video-form" id="emailAddress" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="telNumber">Phone Number*</label>
                                        <input type="tel" class="video-form" id="telNumber" placeholder="Your Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="webSite">Website*</label>
                                        <input type="Text" class="video-form" id="webSite" placeholder="Your Website">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="typeMessage">Message*</label>
                                        <textarea class="text-area" id="typeMessage" placeholder="Type Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <button type="submit" class="contact-btn btn-link">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

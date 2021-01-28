@section('css')
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/mega.menu.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/owlslider.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('js')
    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="{{asset('frontend/vendor/OwlCarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/js/owlslider.js')}}"></script>
@endsection

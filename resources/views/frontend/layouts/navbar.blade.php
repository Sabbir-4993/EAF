@include('frontend.layouts.partials.scripts')
@include('frontend.layouts.partials.menu')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{asset('frontend/images/fav.png')}}" rel="shortcut icon" type="image/x-icon" />
    <title>Natto | Home </title>

    @yield('css')
</head>
<body oncontextmenu="return false;">

<header id="header" class="default">
    @yield('topbar')
    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="menu-left text-center text-md-left">
                        <div class="logo-box">
                            <a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="menu-items">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light menu-right">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            @yield('main_menu')
                        </nav>
                        <div class="icons-set">
                            <ul class="list-inline">
                                <li class="icon-items nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle-no-caret" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">
                                        <div class="notification-item">
                                            <div class="search-details">
                                                <form class="form-inline">
                                                    <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                                                    <button class="s-btn btn-link " type="submit"><i class="fas fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="icon-items nav-item dropdown">
                                    <a class="nav-link dropdown-toggle-no-caret" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown2">
                                        <div class="notification-item">
                                            <div class="property">
                                                <ul>
                                                    <li><div class="setting"><a href="#">Setting</a></div></li>
                                                    <li><div class="clear"><a href="#">Clear</a></div></li>
                                                </ul>
                                            </div>
                                            <div class="notification-details">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#"><img src="{{asset('frontend/images/notification-img-2.png') }}" alt=""></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Jassica William</h4>
                                                        <p>comment on your Video.</p>
                                                        <div class="comment-date">10 min ago</div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#"><img src="{{asset('frontend/images/notification-img-3.png') }}" alt=""></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Congratulations!</h4>
                                                        <p>Your Order is Accepted.</p>
                                                        <div class="comment-date">
                                                            15 min ago
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#"><img src="{{asset('frontend/images/notification-img-4.png') }}" alt=""></a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Order Delivered!</h4>
                                                        <p>Your Order is Delivered.</p>
                                                        <div class="comment-date">20 min ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="partner-btn">
                                    <a href="#" class="b-btn btn-link">Become a Partner</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

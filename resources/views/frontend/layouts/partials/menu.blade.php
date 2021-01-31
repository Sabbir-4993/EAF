@section('topbar')
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="topbar-left text-center text-md-left">
                        <ul class="list-inline">
                            <li> <a href="#"> Contact </a></li>
                            <li> <a href="#"> About Us </a></li>
                            <li> <a href="#"> Blog </a></li>
                            <li> <a href="{{route('partner_with_us')}}"> Become a Partner </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="topbar-right text-center text-md-right">
                        <ul class="list-inline">
                            <li><a href="#"><i class="far fa-calendar-alt"></i> Table Bookings</a> </li>
                            <li><a href="#"><i class="far fa-bookmark"></i> Bookmarks <span class="badge badge-secondary"></span></a></li>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i> Food Orders <span class="badge badge-secondary"></span></a></li>
                            <li><a href="{{route('login')}}"><i class="fas fa-user-circle"></i> Login </a></li>
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="dropdown-toggle-no-caret" href="{{route('login')}}" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    <i class="fas fa-user-circle"></i> Login--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">--}}
{{--                                    <a class="dropdown-item" href="#"> My Profile</a>--}}
{{--                                    <a class="dropdown-item" href="#"> Bookmarks</a>--}}
{{--                                    <a class="dropdown-item" href="#"> Booking Tables</a>--}}
{{--                                    <a class="dropdown-item" href="#"> Find Friends</a>--}}
{{--                                    <a class="dropdown-item" href="#"> Setting</a>--}}
{{--                                    <a class="dropdown-item" href="#"> Logout</a>--}}
{{--                                    <a href="{{ route('logout') }}" class="dropdown-item"--}}
{{--                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                                        <i class="nav-icon fas fa-sign-out-alt"></i> Logout--}}
{{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">--}}
{{--                                            {{ csrf_field() }}--}}
{{--                                        </form>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main_menu')
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto nav-text">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('recipes')}}">Recipes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('howtoorder')}}">How To Orders?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('partners')}}">Partners</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
        </ul>
    </div>
@endsection

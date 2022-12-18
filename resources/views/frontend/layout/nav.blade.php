<!---------------- Start Nav ---------------- -->
<div class="container-fluid full-header">
    <div class="row bg-info hidden-xs">
        <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs text-center">
            <a href="{{ url('/') }}"> <img src="{{asset('frontend/photo/logo/logo.png')}}" alt=""></a>
        </div>
        <div class="col-lg-8 col-md-8 hidden-sm hidden-xs">
            <div class="row">
                <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                    <div class="content-step">
                        <div class="text">SanYakeNyine 2 street,<br> Hledan, Yangon.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4  hidden-sm hidden-xs">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <div class="content-step">
                        <div class="title">Phone us</div>
                        <div class="text">(+959) 7780339</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="content-step">
                        <div class="title">E-mail us</div>
                        <div class="text">amt@gmail.com</div>
                    </div>
                </div>
                <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                    <a class="btn btn-primary" role="button" href="{{ url('/book') }}" style="text-decoration: none;background-color: orange">Book
                        a Service</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row ">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img src="{{ asset('photo/logo/logo.png') }}" alt=""
                         class="hidden-lg   hidden-md hidden-sm text-center">
                    <button type="button" class="navbar-toggle pull-left" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/project') }}">Projects</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Service
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/inno') }}">Main Services</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/why') }}">Why Choose Us</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Info
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/threeblog') }}">Blog</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/career') }}">Career</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/price') }}">Price</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                    {{--navbar right end--}}
                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::check())
                            @if(Auth::user()->hasRole('manager'))
                                <li><a href="{{url('admin/')}}">AdminPanel</a></li>
                            @endif
                        @endif
                    <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="fa fa-user"></span> Membership
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="text-center"><a href=""
                                                               data-toggle="modal" data-target="#myModal"></span>Log
                                            In</a></li>
                                    <li class="divider"></li>
                                    <li class="text-center"><a href=""
                                                               data-toggle="modal" data-target="#myModalRegister">Register</a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{route('logout')}}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{route('logout')}}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    {{--navbar right end--}}

                </div>

            </div>
        </nav>
    </div>
</div>
<!------------------end nav ------------------ -->
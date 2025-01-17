<!doctype html>
<html lang="en">


<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Edubin -</title>


    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/website') }}/images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/app.min.css">
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/icons.min.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/animate.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/nice-select.css">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/font-awesome.min.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('assets/website') }}/css/responsive.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header id="header-part">
        <div class="navigation navigation-2 navigation-3">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-11 col-md-10 col-sm-9 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="">
                                <img src="{{ asset('assets/website') }}/images/logo-2.png
                                " alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            @if (Route::has('login'))
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        @auth
                                            {{-- <li class="nav-item">
                                                <a class="active" href="{{ route('home') }}">Home</a>
                                                <ul class="sub-menu">

                                                </ul>
                                            </li> --}}
                                            {{-- <li class="nav-item">
                                                <a href="{{ route('about') }}">About us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('courses') }}">Courses</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('teacher') }}">Our teachers</a>
                                            </li> --}}
                                            {{-- <li class="nav-item">
                                                <a href="{{ route('examlist') }}">Quizz</a>
                                            </li> --}}
                                            {{-- <li class="nav-item">
                                                <a href="{{ route('contacts') }}">Contact Us</a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                    <div class="dropdown d-inline-block">
                                        <button type="button" class="btn header-item waves-effect"
                                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            @guest
                                                @if (Route::has('login'))
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                @endif

                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                @if (Auth::check() && Auth::user()->role_id == '2')
                                                    <img class="rounded-circle header-profile-user"
                                                        src="/{{ Auth::user()->image }}" alt="">
                                                    <span class="d-none d-xl-inline-block ms-1" key="t-henry"
                                                        style="    font-size: 17px;
                                                    font-family: 'Montserrat', sans-serif;
                                                    font-weight: 700;
                                                    color:rgb(247, 245, 242)">{{ Auth::user()->name }}</span>
                                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                {{-- <a class="dropdown-item" href="{{ route('profile.user') }}"><i
                                                        class="bx bx-user font-size-16 align-middle me-1"></i> <span
                                                        key="t-profile">My
                                                        Profile</span></a> --}}

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();"><i
                                                        class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                                    <span key="t-logout">Logout</span></a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>

                                            </div>
                                      @endif

                                @endguest
                        </div>
                    @else
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="active" href="">Home</a>
                                    <ul class="sub-menu">
                                        {{-- <li><a href="">Home 01</a></li>
                                                <li><a href="{{ asset('assets/website') }}/index-3.html">Home 02</a></li> --}}
                                        {{-- <li><a class="active" href="{{ asset('assets/website') }}/index-4.html">Home 03</a></li> --}}
                                    </ul>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{ route('about') }}">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('courses') }}">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('teacher') }}">Our teachers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('examlist') }}">Exam</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contacts') }}">Contact Us</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="" href="{{ route('login') }}">Login</a>
                                </li>
                                {{-- @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">Register</a>
                                                </li>
                                            @endif --}}
                            @endauth
                    </div>
                    </ul>
                </div>
                @endif
                </nav> <!-- nav -->
            </div>
            {{-- <div class="col-lg-1 col-md-2 col-sm-3 col-3">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                                <li><a href="{{ asset('assets/website') }}/#"><i class="fa fa-shopping-bag"></i><span>0</span></a></li>
                            </ul>
                        </div> <!-- right icon -->
                    </div> --}}

        </div> <!-- row -->
        </div> <!-- container -->
        </div>
    </header>

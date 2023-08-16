<!DOCTYPE html>
<html lang="en" data-random-animation="false" data-animation="11">

<!-- Mirrored from watson-vcard.netlify.app/index-dark-slider by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 14:08:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="vcard, resume, personal, portfolio, cv, card, responsive" />
    <meta name="description" content="vCard / Resume / Personal Template" />
    <meta name="author" content="cosmos-themes" />

    <!--Page Title-->
    <title>Quiz Test</title>

    <!--Plugins Css-->
    <link rel="stylesheet" href="{{ asset('assets/website/new') }}/css/plugins.css">
    <!--Main Styles Css-->
    <link rel="stylesheet" href="{{ asset('assets/website/new') }}/css/style-dark.css">

    <link rel="stylesheet" href="{{ asset('assets/website/new') }}/css/style-demo.css">

    <!--Color Css-->
    <link class="site-color" rel="stylesheet" href="{{ asset('assets/website/new') }}/css/blue-color.css">

    <!--Modernizr Js-->
    <script src="{{ asset('assets/website/new') }}/js/modernizr.js"></script>

    <!--Favicons-->
    <link rel="shortcut icon" href="{{ asset('assets/website/new') }}/img/favicon.ico" type="image/x-icon">
    <!--Jquery JS-->
    <script src="{{ asset('assets/website/new') }}/js/jquery.min.js"></script>
    <!--Plugins JS-->
    <script src="{{ asset('assets/website/new') }}/js/plugins.min.js"></script>
    <!--Google Map Api-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>
    <!--Site Main JS-->
    <script src="{{ asset('assets/website/new') }}/js/main.js"></script>

    <script src="{{ asset('assets/website/new') }}/js/main-demo.js"></script>

    <script>
        //Super Slider
        $('#slides').superslides({
            animation: 'fade',
            play: 3000
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122650090-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-122650090-3');
    </script>

</head>

<body>

    <div class="theme-options dark">
        <div class="toggle-btn">
            <span><i class="fas fa-cog"></i></span>
        </div>
        <div class="theme-menu">
            <div class="page-transitions">
                <h4>Page Animation</h4>
                <select class="demo-select form-control" id="anim-type">
                    <option>Choose</option>
                    <option value="0">Random</option>
                </select>
            </div>
            <div class="theme-color">
                <h4 class="mt-20">Colors</h4>
                <ul>
                    <li><a href="{{ asset('assets/website/new') }}/css/blue-color.css"
                            style="background-color: #00A3E1;;"></a></li>
                    <li><a href="{{ asset('assets/website/new') }}/css/red-color.css"
                            style="background-color: #E82A2A;"></a></li>
                    <li><a href="{{ asset('assets/website/new') }}/css/green-color.css"
                            style="background-color: #6ac045;"></a></li>
                    <li><a href="{{ asset('assets/website/new') }}/css/yellow-color.css"
                            style="background-color: #D1A71D;"></a></li>
                    <li><a href="{{ asset('assets/website/new') }}/css/pink-color.css"
                            style="background-color: #FF1493;"></a></li>
                    <li><a href="{{ asset('assets/website/new') }}/css/purple-color.css"
                            style="background-color: #5078FF;"></a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- <!--Preloader Start-->
    <div class="preloader">
        <div class="loader">
            <!--Your Name-->
            <h4>Quiz Test</h4>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--Preloader End--> --}}

    <div id="page">

        <!--Header Start-->
        <header>
            <div class="header-content">

                <!--Mobile Header-->
                <div class="header-mobile">
                    <a class="header-toggle"><i class="fas fa-bars"></i></a>
                    <h2>{{ Auth::user()->name }}</h2>
                </div>

                <!--Main Header-->
                <div class="header-main" data-simplebar>
                    <div class="image-container">
                        <h2 class="header-name">{{ Auth::user()->name }}</h2><br>
                        <h6 class="header-name">{{ Auth::user()->load('user_role')->user_role->title }}</h6>
                        <img src="/{{ Auth::user()->image }}" alt="profile-pic">
                    </div>

                    <!--Nav Menus-->
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="{{ asset('assets/website/new') }}/#home" class="pt-link active"><span
                                        class="nav-menu-icon"><i class="lnr lnr-home"></i></span>Home </a> </li>
                            <li><a href="{{ asset('assets/website/new') }}/#about" class="pt-link"><span
                                        class="nav-menu-icon"><i class="lnr lnr-user"></i></span>About Me</a></li>
                        </ul>
                    </nav>

                    <!--Nav Footer-->
                    <div class="nav-footer">
                        <!--Social Links-->
                        <ul class="social">
                            <li><a href="{{ asset('assets/website/new') }}/#"><i
                                        class="fab fa-facebook-square"></i></a></li>
                            <li><a href="{{ asset('assets/website/new') }}/#"><i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li><a href="{{ asset('assets/website/new') }}/#"><i class="fab fa-youtube-square"></i></a>
                            </li>
                            <li><a href="{{ asset('assets/website/new') }}/#"><i
                                        class="fab fa-dribbble-square"></i></a></li>
                            <li><a href="{{ asset('assets/website/new') }}/#"><i class="fab fa-behance-square"></i></a>
                            </li>
                        </ul>
                        <!--Copyright Text-->
                        <div class="copy">
                            <p>2023 &copy; MD.SHARIF HOSEN.<br>All Right Reserved.</p>
                        </div>
                    </div>

                </div>
            </div>
        </header>

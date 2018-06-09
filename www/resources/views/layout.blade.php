<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Rosdyana Kusuma">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Home</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Main-Stylesheets -->
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                    <h2>Deep Ion Channel</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="{{ url('/') }}#home-page">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/submission') }}">Submission</a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}#team-page">Team</a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}#faq-page">FAQ</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact-us') }}">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->



    
    @yield('content')
    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id corrupti architecto consequuntur, laborum
                            quaerat sed nemo temporibus unde, beatae vel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2018 All right resurved. This template is made with
                            <i class="ti-heart" aria-hidden="true"></i> by
                            <a href="https://colorlib.com">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--Vendor-JS-->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <!--Plugin-JS-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- <script src="{{ asset('js/contact-form.js') }}"></script> -->
    <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!--Main-active-JS-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive bootstrap 5 landing template">
        <meta name="author" content="Themesbrand">

        <link rel="shortcut icon" href="images/favicon.ico">

         <title>Montia - Responsive Bootstrap 5 Landing Page </title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="{{asset('front/css/materialdesignicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/mobiriseicons.css')}}" rel="stylesheet">

        <!--Magnific popup -->
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/magnific-popup.css')}}" />

        <!--Slider-->
        <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}" />
        <link rel="stylesheet" href="{{asset('front/css/owl.theme.css')}}" />
        <link rel="stylesheet" href="{{asset('front/css/owl.transitions.css')}}" />

        <!-- Custom styles for this template -->
        <link href="{{asset('front/css/menu.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

        <!--Template Color-->
        <link href="{{asset('front/css/colors/default.css')}}" rel="stylesheet">

    </head>

    <body>
        <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
            <i class="mdi mdi-weather-sunny mode-light"></i>
            <i class="mdi mdi-weather-night mode-dark"></i>
        </a>
        <!-- Navigation Bar-->
        <header id="topnav" class="defaultscroll fixed-top sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a href="{{url('/')}}" class="logo text-uppercase">
                        <img src="{{asset('front/images/logo-light.png')}}" alt="" class="logo-light" height="38" />
                        <img src="{{asset('front/images/logo-dark.png')}}" alt="" class="logo-dark" height="38" />
                    </a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                    <li class="">
                            <a href="{{url('How_It_Works')}}">How It Works</a>
                        </li>
                        <li class="">
                            <a href="{{url('invest')}}">Invest</a>
                        </li>
                        <li class="">
                            <a href="{{url('Portfolio')}}">Portfolio </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Learn More</a>
                            <span class="menu-arrow"></span>

                            <ul class="submenu">
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.html">FAQs</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="services.html">Blog</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="login.html">Contact</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#" class="btn-custom btn-rounded">Download APP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
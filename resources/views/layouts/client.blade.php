<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> FootballPredictions - Premium Football Betting Tips</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <!-- fontawesome icon  -->
        <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}">
        <!-- flaticon css -->
        <link rel="stylesheet" href="{{ URL::asset('/fonts/flaticon.css') }}">
        <!-- animate.css -->
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/odometer.min.css') }}">
        <!-- stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <!-- responsive -->
        <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    </head>

    <body>

    
        
        <!-- header begin -->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-sm-6">
                            <div class="left-area">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                        <span class="text">
                                            <span id="date"></span>
                                            <span id="month"></span>
                                            <span id="year"></span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <i class="far fa-clock"></i>
                                        </span>
                                        <span class="text clocks">
                                            <span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6">
                            <div class="right-area">
                                <ul>
                                    <li>
                                        <select>
                                            <option>EN</option>
                                            <option>FR</option>
                                            <option>ES</option>
                                        </select>
                                    </li>
                                    <li>
                                        <a class="link" href="bet-slip.html">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="dolly" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-dolly fa-w-18 fa-fw fa-2x"><path fill="currentColor" d="M575.6 309.8l-5.1-15.2c-1.4-4.2-5.9-6.5-10.1-5.1L526 301.1 451.5 77.9c-2.7-8.1-8.4-14.7-16-18.5-7.7-3.8-16.3-4.4-24.4-1.7L176.3 136l-18-50.7C146.9 53.3 116.7 32 82.8 32H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h74.8c20.3 0 38.4 12.8 45.2 31.9l96.7 271.9c-23.3 17.2-37.2 46.5-31.4 78.9 5.6 31.3 30.4 57 61.5 63.5 51.7 10.7 97.2-28.4 97.2-78.2 0-13.1-3.4-25.2-9-36.1l227.5-76c4.2-1.4 6.5-5.9 5.1-10.1zM187 166.1l106.4-35.5 25 74.9c1.4 4.2 5.9 6.5 10.1 5.1l15.2-5.1c4.2-1.4 6.5-5.9 5.1-10.1l-25-74.9L421.2 88l74.5 223.3-174.4 58.1C307.6 358.7 290.7 352 272 352c-6.3 0-12.3.9-18.1 2.3L187 166.1zM272 480c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z" class=""></path></svg>
                                            Prediction Slip
                                        </a>
                                    </li>
                                    <li>
                                        <a class="link" href="#">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-user-circle fa-w-16 fa-fw fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z" class=""></path></svg>
                                            Hi, John Doe
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="navbar" class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{ URL::asset('/img/logo.png') }}" alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 d-xl-none d-lg-none d-block">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="mainmenu">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            
                                             
                                              <li class="nav-item">
                                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('about') }}">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('premium') }}">Premium Tips</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('free') }}">Free Tips</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('contact') }}">Contact US</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('login') }}">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('register') }}">Register</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header end -->

        @yield('content')
        <!-- footer begin -->
        <div class="footer" id="contact">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5 col-md-10">
                        <div class="about-widget">
                            <a class="logo" href="index.html">
                                <img src="{{ URL::asset('/img/logo.png') }}" alt="">
                            </a>
                            <p>FootballPredictions offers you all the best online prediction from every corner of the planet with thousands of online prediction markets.</p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="support">
                                <ul>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('/img/svg/email.svg') }}" alt="">
                                        </span>
                                        <span class="text">
                                            <span class="title">Mail Us</span>
                                            <span class="descr">don't@reply.com</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ URL::asset('/img/svg/phone-call.svg') }}" alt="">
                                        </span>
                                        <span class="text">
                                            <span class="title">Get In Touch</span>
                                            <span class="descr">+254 700 000 0000</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="useful-links">
                            <h3>Useful links</h3>
                            <ul>
                                <li>
                                    <a href="#">IN-PLAY</a>
                                </li>
                                <li>
                                    <a href="#">PROMOTIONS</a>
                                </li>
                                <li>
                                    <a href="#">STATICS</a>
                                </li>
                                <li>
                                    <a href="#">RESULTS</a>
                                </li>
                                <li>
                                    <a href="#">Predict now</a>
                                </li>
                                <li>
                                    <a href="#">GAME RESULTS</a>
                                </li>
                                <li>
                                    <a href="#">STANDINGS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3">
                        <div class="useful-links">
                            <h3>Connect With Us</h3>
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Blog Details</a>
                                </li>
                                <li>
                                    <a href="#">Service</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>
                                <li>
                                    <a href="#">TEAM OVERVIEW</a>
                                </li>
                                <li>
                                    <a href="#">SCHEDULE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="useful-links">
                            <h3>Contact US</h3>
                            <ul>
                                <li>
                                    <a href="#">FOOTBALL</a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="payment-method">
                                    <h6 class="payment-method-title">
                                        Payment methods are We accept 
                                    </h6>
                                    <div class="all-method">
                                        <div class="single-method">
                                            <img src="assets/img/brand-1.png" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="assets/img/brand-2.png" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="assets/img/brand-3.png" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="assets/img/brand-4.png" alt="">
                                        </div>
                                        <div class="single-method">
                                            <img src="assets/img/brand-5.png" alt="">
                                        </div>
                                        
                                        <div class="single-method">
                                            <img src="assets/img/brand-5.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

        <!-- notes begin -->
        <div class="notes">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        Winabettips is a sports prediction 
                    </div>
                </div>
            </div>
        </div>
        <!-- notes end -->

        <!-- copyright footer begin -->
        <div class="copyright-footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-md-6 col-lg-6 d-lg-flex d-lg-flex d-block align-items-center">
                        <p class="copyright-text">
                            <a href="#">Winabettips</a> © 2022. PRIVACY POLICY
                        </p>
                    </div>
                    <div class="text-right col-md-6 col-xl-4 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                        <p class="copyright-text">
                            Powerd By <a href="https://nupresstechnologies.com/">nupresstechnologies</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright footer end -->
        
        <!-- jquery -->
        <!-- <script src="assets/js/jquery.js"></script> -->
        <script src="assets/js/jquery-3.4.1.min.js"></script>
        <!-- bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- owl carousel -->
        <script src="assets/js/owl.carousel.js"></script>
        <!-- magnific popup -->
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <!-- filterizr js -->
        <script src="assets/js/jquery.filterizr.min.js"></script>
        <!-- wow js-->
        <script src="assets/js/wow.min.js"></script>
        <!-- clock js -->
        <script src="assets/js/clock.min.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/oddometer-active.js"></script>
        <!-- main -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
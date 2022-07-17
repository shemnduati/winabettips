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
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Home
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item" href="index.html">Home One</a>
                                                  <a class="dropdown-item" href="index-2.html">Home Two</a>
                                                </div>
                                              </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="about.html">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="statics.html">Statics</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="promotions.html">Promotions</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Blog
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                    <a class="dropdown-item" href="blog.html">Blog Post</a>
                                                    <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Pages
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                                    <a class="dropdown-item" href="result.html">Result</a>
                                                    <a class="dropdown-item" href="latest-result.html">Latest Result</a>
                                                    <a class="dropdown-item" href="standing.html">Standing</a>
                                                    <a class="dropdown-item" href="schedule.html">Schedule</a>
                                                    <a class="dropdown-item" href="bet-slip.html">Bet Slip</a>
                                                    <a class="dropdown-item" href="login.html">Login</a>
                                                    <a class="dropdown-item" href="register.html">Register</a>
                                                    <a class="dropdown-item" href="error.html">Error 404</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.html">Contact US</a>
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

        <!-- banner begin -->
        <div class="banner">
            <div class="container">
                <div class="banner-content">
                    <div class="row justify-content-xl-start justify-content-lg-center justify-content-md-center">
                        <div class="col-xl-7 col-lg-11 col-md-10 col-12 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="text-content">
                                <h1>FootballPredictions Premium Football Betting Tips.</h1>
                                <h4>Providing Free Betting tips  and Premium Football Betting Tips every day.</h4>
                                <p>FootballPredictions provides you with nothing but the best Premium Betting predictions</p>
                                <div class="banner-button">
                                    <ul>
                                        <li>
                                            <a href="#" class="bet-btn bet-btn-base">Purchase now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4">
                            <div class="banner-img">
                                <img src="{{ URL::asset('/img/banner-img-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner end -->
    
        <!-- feature begin -->
        <div class="feature" id="feature_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="section-title">
                            <h2>FootballPredictions Features</h2>
                            <p>FootballPredictions shows real time odds for betting with the higher stakes you can get. We place your bets in various bMakers to do highest liquidity</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="{{ URL::asset('/img/svg/music-and-multimedia.svg') }}" alt="">
                            </div>
                            <div class="part-text">
                                <h3 class="title">Accurate Premium tips</h3>
                                <p>At FootballPredictions, we acknowledge that punters hate losing bets, and that’s why we are here to ensure you are on track. We make you bet winners. Our soccer betting tips are provided by professional experts with analysts’ knowledge. They also use statistics, history, and any other factor that affects each match. They ensure that the tips are very accurate to increase your chances of making profits. With Betwinner360 accurate Premium betting predictions Victory is assured.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="{{ URL::asset('/img/svg/announcement.svg') }}" alt="">
                            </div>
                            <div class="part-text">
                                <h3 class="title">VIP Tipsters</h3>
                                <p>FootballPredictions has a team of professionals who provide punters with the best betting tips on daily basics. Our VIP tipsters are well trained, have statistics and analytical backgrounds. We provide them with 3 months of training before they start providing you with daily betting tips. Betwinner360 VIP tipsters are also provided with Free Football Tips and Jackpot Predictions. To get our tips and predictions subscribe now.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-feature">
                            <div class="part-icon">
                                <img src="{{ URL::asset('/img/svg/usability.svg') }}" alt="">
                            </div>
                            <div class="part-text">
                                <h3 class="title">Premium Tips and predictions</h3>
                                <p>FootballPredictions is the best soccer prediction website that guarantees accurate football predictions on every market available. On daily basis, our team of tipsters, expert analysts, and statisticians are working to guarantee our daily returns on their stakes.

                                    Different Payment Methods are available: Mpesa, PayPal, World Remit, Western Union, and Skrill. We also accept other payment methods. </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- feature end -->

        <!-- betting begin -->
        <div class="betting" id="in_play">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="section-title">
                            <h2>Latest VIP Winning Tips</h2>
                            <p>FootballPredictions shows real time odds for betting with the higher stakes you can get. We place your bets in various bMakers to do highest liquidity</p>
                        </div>
                    </div>
                </div>
                <div class="betting-table">
                    <div class="row">
                        
                        <div class="col-xl-12 col-lg-12">
                            <div class="tab-content bet-tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="all-sports" role="tabpanel" aria-labelledby="all-sports-tab">
                                    <div class="sport-content-title">
                                        <h3>All Games 
                                            <span class="sport-content-conter">[30]</span>
                                        </h3>
                                    </div>
                                    <div class="sports-list">
                                        <h4 class="title">England International League</h4>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            arsenal
                                                        </span>
                                                        <span class="score-number">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            everton
                                                        </span>
                                                        <span class="score-number">
                                                            4
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.00</span>
                                                        <span class="result-for-final">
                                                            arsenal
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">4.30</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">5.75</span>
                                                        <span class="result-for-final">
                                                            everton
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            Aston Villa
                                                        </span>
                                                        <span class="score-number">
                                                            4
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Norwich City
                                                        </span>
                                                        <span class="score-number">
                                                            3
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.52</span>
                                                        <span class="result-for-final">
                                                            Aston Villa
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.35</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">3.65</span>
                                                        <span class="result-for-final">
                                                            Norwich City
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            West Ham United
                                                        </span>
                                                        <span class="score-number">
                                                            1
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Bournemouth
                                                        </span>
                                                        <span class="score-number">
                                                            6
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.50</span>
                                                        <span class="result-for-final">
                                                            West Ham United
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">4.45</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.75</span>
                                                        <span class="result-for-final">
                                                            Bournemouth
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sports-list">
                                        <h4 class="title">English Premier League</h4>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            arsenal
                                                        </span>
                                                        <span class="score-number">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            everton
                                                        </span>
                                                        <span class="score-number">
                                                            4
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.00</span>
                                                        <span class="result-for-final">
                                                            arsenal
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">4.30</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">5.75</span>
                                                        <span class="result-for-final">
                                                            everton
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            Aston Villa
                                                        </span>
                                                        <span class="score-number">
                                                            4
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Norwich City
                                                        </span>
                                                        <span class="score-number">
                                                            3
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.52</span>
                                                        <span class="result-for-final">
                                                            Aston Villa
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.35</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">3.65</span>
                                                        <span class="result-for-final">
                                                            Norwich City
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            West Ham United
                                                        </span>
                                                        <span class="score-number">
                                                            1
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Bournemouth
                                                        </span>
                                                        <span class="score-number">
                                                            6
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.50</span>
                                                        <span class="result-for-final">
                                                            West Ham United
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">4.45</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.75</span>
                                                        <span class="result-for-final">
                                                            Bournemouth
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sports-list">
                                        <h4 class="title">Portugal Premiere Liga</h4>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            arsenal
                                                        </span>
                                                        <span class="score-number">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            everton
                                                        </span>
                                                        <span class="score-number">
                                                            4
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.00</span>
                                                        <span class="result-for-final">
                                                            arsenal
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">4.30</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">5.75</span>
                                                        <span class="result-for-final">
                                                            everton
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            Aston Villa
                                                        </span>
                                                        <span class="score-number">
                                                            4
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Norwich City
                                                        </span>
                                                        <span class="score-number">
                                                            3
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.52</span>
                                                        <span class="result-for-final">
                                                            Aston Villa
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.35</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">3.65</span>
                                                        <span class="result-for-final">
                                                            Norwich City
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            West Ham United
                                                        </span>
                                                        <span class="score-number">
                                                            1
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Bournemouth
                                                        </span>
                                                        <span class="score-number">
                                                            6
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.50</span>
                                                        <span class="result-for-final">
                                                            West Ham United
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">4.45</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.75</span>
                                                        <span class="result-for-final">
                                                            Bournemouth
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane fade" id="football" role="tabpanel" aria-labelledby="football-tab">
                                    <div class="sport-content-title">
                                        <h3>Football 
                                            <span class="sport-content-conter">[3]</span>
                                        </h3>
                                    </div>
                                    <div class="sports-list">
                                        <h4 class="title">England International League</h4>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            arsenal
                                                        </span>
                                                        <span class="score-number">
                                                            2
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            everton
                                                        </span>
                                                        <span class="score-number">
                                                            4
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.00</span>
                                                        <span class="result-for-final">
                                                            arsenal
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">4.30</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">5.75</span>
                                                        <span class="result-for-final">
                                                            everton
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            Aston Villa
                                                        </span>
                                                        <span class="score-number">
                                                            4
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Norwich City
                                                        </span>
                                                        <span class="score-number">
                                                            3
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.52</span>
                                                        <span class="result-for-final">
                                                            Aston Villa
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.35</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">3.65</span>
                                                        <span class="result-for-final">
                                                            Norwich City
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-football"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            West Ham United
                                                        </span>
                                                        <span class="score-number">
                                                            1
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Bournemouth
                                                        </span>
                                                        <span class="score-number">
                                                            6
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.50</span>
                                                        <span class="result-for-final">
                                                            West Ham United
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">4.45</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.75</span>
                                                        <span class="result-for-final">
                                                            Bournemouth
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="basketball" role="tabpanel" aria-labelledby="basketball-tab">
                                    <div class="sport-content-title">
                                        <h3>basketball
                                            <span class="sport-content-conter">[3]</span>
                                        </h3>
                                    </div>
                                    <div class="sports-list">
                                        <h4 class="title">League of europe</h4>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-basketball-ball-variant"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            Kenny Schepper
                                                        </span>
                                                        <span class="score-number">
                                                            3
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Quentin Robert
                                                        </span>
                                                        <span class="score-number">
                                                            6
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">3.25</span>
                                                        <span class="result-for-final">
                                                            Kenny Schepper
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.62</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.44</span>
                                                        <span class="result-for-final">
                                                            Quentin Robert
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-basketball-ball-variant"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            Christian Langmo
                                                        </span>
                                                        <span class="score-number">
                                                            5
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Manuel Pena Lopez
                                                        </span>
                                                        <span class="score-number">
                                                            2
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">1.70</span>
                                                        <span class="result-for-final">
                                                            Christian Langmo
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.30</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.05</span>
                                                        <span class="result-for-final">
                                                            Manuel Pena Lopez
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                        <div class="single-sport-box">
                                            <div class="part-icon">
                                                <i class="flaticon-basketball-ball-variant"></i>
                                            </div>
                                            <div class="part-team">
                                                <ul>
                                                    <li>
                                                        <span class="team-name">
                                                            Stade Bordelais
                                                        </span>
                                                        <span class="score-number">
                                                            3
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="team-name">
                                                            Nantes II
                                                        </span>
                                                        <span class="score-number">
                                                            3
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="part-match">
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">3.22</span>
                                                        <span class="result-for-final">
                                                            Stade Bordelais
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">4.00</span>
                                                        <span class="result-for-final">
                                                            draw
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="single-place-to-bet">
                                                    <a href="#">
                                                        <span class="bet-price">2.45</span>
                                                        <span class="result-for-final">
                                                            Nantes II
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="part-bnonus">
                                                <span class="bonus-number">+336</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- betting end -->

        <!-- upcoming match begin -->
        <div class="upcoming-match" id="upcoming_match">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="section-title">
                            <h2>Upcoming Match</h2>
                            <p>FootballPredictions shows real time odds for betting with the higher stakes you can get. We place your bets in various bMakers to do highest liquidity</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-match">
                            <div class="part-head">
                                <h5 class="match-title">BBPL 2019 Semi Final</h5>
                                <span class="match-venue">Venue : Sher-e-Bangla National Stadium. Mirpur, Dhaka</span>
                            </div>
                            <div class="part-team">
                                <div class="single-team">
                                    <div class="logo">
                                        <img src="{{ URL::asset('/img/team-1.png') }}" alt="">
                                    </div>
                                    <span class="team-name">Khulna Tigers</span>
                                </div>
                                <div class="match-details">
                                    <div class="match-time">
                                        <span class="date">Fri 09 Oct 2019</span>
                                        <span class="time">09:00 am</span>
                                    </div>
                                    <span class="versase">vs</span>
                                    <div class="buttons">
                                        <a href="#" class="buy-ticket bet-btn bet-btn-dark-light">buy ticket</a>
                                    </div>
                                </div>
                                <div class="single-team">
                                    <div class="logo">
                                        <img src="{{ URL::asset('/img/team-2.png') }}" alt="">
                                    </div>
                                    <span class="team-name">Dhaka Platoon</span>
                                </div>
                            </div>
                            <span class="to-begin-time">
                                Starting on
                            </span>
                            <div class="part-timer timer" data-date="30 April 2020 9:56:00 GMT+01:00">
                                <div class="single-time">
                                    <span class="number day">01</span>
                                    <span class="title">Days</span>
                                </div>
                                <div class="single-time">
                                    <span class="number hour">24</span>
                                    <span class="title">Hours</span>
                                </div>
                                <div class="single-time">
                                    <span class="number minute">48</span>
                                    <span class="title">Minutes</span>
                                </div>
                                <div class="single-time">
                                    <span class="number second">11</span>
                                    <span class="title">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="upcoming-match-list">
                            <div class="single-upcoming-match">
                                <div class="single-team">
                                    <div class="part-logo">
                                         <img src="{{ URL::asset('/img/team-1.png') }}" alt="">
                                    </div>
                                    <div class="part-text">
                                        <span class="team-name">
                                            Khulna tigers
                                        </span>
                                    </div>
                                </div>
                                <span class="versase">vs</span>
                                <div class="single-team">
                                    <div class="part-text">
                                        <span class="team-name">
                                            dhaka platoon
                                        </span>
                                    </div>
                                    <div class="part-logo">
                                         <img src="{{ URL::asset('/img/team-2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="single-upcoming-match">
                                <div class="single-team">
                                    <div class="part-logo">
                                         <img src="{{ URL::asset('/img/team-3.png') }}" alt="">
                                    </div>
                                    <div class="part-text">
                                        <span class="team-name">
                                            Cumilla Viking
                                        </span>
                                    </div>
                                </div>
                                <span class="versase">vs</span>
                                <div class="single-team">
                                    <div class="part-text">
                                        <span class="team-name">
                                            Barishal Bulls
                                        </span>
                                    </div>
                                    <div class="part-logo">
                                         <img src="{{ URL::asset('/img/team-4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="single-upcoming-match">
                                <div class="single-team">
                                    <div class="part-logo">
                                         <img src="{{ URL::asset('/img/team-5.png') }}" alt="">
                                    </div>
                                    <div class="part-text">
                                        <span class="team-name">
                                            CG challenge
                                        </span>
                                    </div>
                                </div>
                                <span class="versase">vs</span>
                                <div class="single-team">
                                    <div class="part-text">
                                        <span class="team-name">
                                            r.shahi royals
                                        </span>
                                    </div>
                                    <div class="part-logo">
                                         <img src="{{ URL::asset('/img/team-6.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="single-upcoming-match">
                                <div class="single-team">
                                    <div class="part-logo">
                                         <img src="{{ URL::asset('/img/team-7.png') }}" alt="">
                                    </div>
                                    <div class="part-text">
                                        <span class="team-name">
                                            Khulna tigers
                                        </span>
                                    </div>
                                </div>
                                <span class="versase">vs</span>
                                <div class="single-team">
                                    <div class="part-text">
                                        <span class="team-name">
                                            dhaka platoon
                                        </span>
                                    </div>
                                    <div class="part-logo">
                                         <img src="{{ URL::asset('/img/team-8.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="vew-more-news bet-btn bet-btn-dark-light">
                        <i class="fas fa-redo"></i> See More match
                    </a>
                </div>
                <span class="text-special">
                    <b>Note:</b>  The timing of each match will depend on the weather conditions.
                </span>
            </div>
        </div>
        <!-- upcoming match end -->

        <!-- statics begin -->
        <div class="statics">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-counter">
                            <span class="number odometer" data-count="1854">1324</span>
                            <span class="title">Free Tips</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-counter">
                            <span class="number odometer" data-count="3254">+10,343</span>
                            <span class="title">Odds Won</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-counter">
                            <span class="number odometer" data-count="584">234</span>
                            <span class="title">Tickets Won</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-counter">
                            <span class="number odometer" data-count="1731">1299</span>
                            <span class="title">Satisfied Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- statics end -->

        <!-- blog begin -->
        <div class="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="section-title">
                            <h2>Our Latest news</h2>
                            <p>PerediOn shows real time odds for betting with the higher stakes you can get. We place your bets in various bMakers to do highest liquidity</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="part-img">
                                <img src="{{ URL::asset('/img/blog-1.jpg') }}" alt="">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <div class="post-date">
                                    <span class="date">16</span>
                                    <span class="month">Dec</span>
                                </div>
                            </div>
                            <div class="part-text">
                                <a href="#" class="title">How could the Premier League resume?</a>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis sint esse vel atque asperiores eligendi vero blanditiis, totam eos beatae hic harum commodi quisquam debitis ipsam obcaecati deserunt nihil? Sed.</p>
                               <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="part-img">
                                <img src="{{ URL::asset('/img/blog-2.jpg') }}" alt="">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <div class="post-date">
                                    <span class="date">26</span>
                                    <span class="month">JAn</span>
                                </div>
                            </div>
                            <div class="part-text">
                                <a href="#" class="title">When coronavirus stops your league</a>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis sint esse vel atque asperiores eligendi vero blanditiis, totam eos beatae hic harum commodi quisquam debitis ipsam obcaecati deserunt nihil? Sed.</p>
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-sidebar">
                            <div class="popular-news">
                                <div class="single-post">
                                    <div>
                                        <div class="part-img">
                                            <img src="{{ URL::asset('/img/popular-news-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <a href="#">How could the Premier League resume?</a>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div>
                                        <div class="part-img">
                                            <img src="{{ URL::asset('/img/popular-news-2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <a href="#">How could the Premier League resume?</a>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div>
                                        <div class="part-img">
                                            <img src="{{ URL::asset('/img/popular-news-3.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <a href="#">How could the Premier League resume?</a>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div>
                                        <div class="part-img">
                                            <img src="{{ URL::asset('/img/popular-news-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="part-text">
                                        <a href="#">How could the Premier League resume?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="vew-more-news bet-btn bet-btn-base">
                        <i class="fas fa-redo"></i> See More News
                    </a>
                </div>
            </div>
        </div>
        <!-- blog end -->

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
                            Powerd By <a href="https://themeforest.net/user/autworks/portfolio">Autworks ( Envato Author )</a>
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
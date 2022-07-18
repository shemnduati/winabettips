@extends('layouts.client')
@section('content')
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
                        <img src="{{ URL::asset('/img/player.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
  <!-- result begin -->
  <div class="result">
    <div class="container">
        <div class="result-sheet-cover">
            <div class="result-sheet">
                <h4 class="result-title">Tips For this week</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Match</th>
                            <th scope="col">Half Time</th>
                            <th scope="col">Full time</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <span class="icon">
                                    <i class="flaticon-football"></i>
                                </span>
                            </th>
                            <td class="date">Jan 25/2020, 09:00 am </td>
                            <td class="team-name">Khulna Tigers <span class="versace">vs</span> Dhaka Platoon</td>
                            <td class="score">5 : 3</td>
                            <td class="score">5 : 5</td>
                            <td>
                                <a href="#">
                                    <span class="view-icon">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <span class="icon">
                                    <i class="flaticon-football"></i>
                                </span>
                            </th>
                            <td class="date">Jan 25/2020, 09:00 am </td>
                            <td class="team-name">Khulna Tigers <span class="versace">vs</span> Dhaka Platoon</td>
                            <td class="score">5 : 3</td>
                            <td class="score">5 : 5</td>
                            <td>
                                <a href="#">
                                    <span class="view-icon">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <span class="icon">
                                    <i class="flaticon-football"></i>
                                </span>
                            </th>
                            <td class="date">Jan 25/2020, 09:00 am </td>
                            <td class="team-name">Khulna Tigers <span class="versace">vs</span> Dhaka Platoon</td>
                            <td class="score">5 : 3</td>
                            <td class="score">5 : 5</td>
                            <td>
                                <a href="#">
                                    <span class="view-icon">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <span class="icon">
                                    <i class="flaticon-football"></i>
                                </span>
                            </th>
                            <td class="date">Jan 25/2020, 09:00 am </td>
                            <td class="team-name">Khulna Tigers <span class="versace">vs</span> Dhaka Platoon</td>
                            <td class="score">5 : 3</td>
                            <td class="score">5 : 5</td>
                            <td>
                                <a href="#">
                                    <span class="view-icon">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <span class="icon">
                                    <i class="flaticon-football"></i>
                                </span>
                            </th>
                            <td class="date">Jan 25/2020, 09:00 am </td>
                            <td class="team-name">Khulna Tigers <span class="versace">vs</span> Dhaka Platoon</td>
                            <td class="score">5 : 3</td>
                            <td class="score">5 : 5</td>
                            <td>
                                <a href="#">
                                    <span class="view-icon">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
<!-- result end -->
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
@endsection
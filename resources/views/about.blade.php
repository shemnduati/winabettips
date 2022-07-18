@extends('layouts.client')
@section('content')
<!-- breadcrumb begin -->
<div class="breadcrumb-bettix blog-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="breadcrumb-content">
                    <h2>About Us</h2>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            About
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- about begin -->
<div class="about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-xl-8 col-lg-8">
                <div class="part-img">
                    <img src="{{ URL::asset('/img/about.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex d-block align-items-center">
                <div>
                    <div class="part-text">
                        <h2>Introducing Our Words</h2>
                        <p>The bigger the sports event the more interest, excitement and media attention on the action. And the more betting markets we have available here at Peredion to turn your opinions into winning bets. And few events come any bigger than the World Cup and the Olympics.</p>
                    </div>
                    <a href="#" class="about-btn">Buy Ticket</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->


@endsection
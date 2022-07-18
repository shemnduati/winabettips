@extends('layouts.client')
@section('content')
     <!-- contact begin -->
     <div class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="section-title">
                        <h2>Get In Touch</h2>
                        <p>FootballPredictions is the most advanced sports trading & affialiate platform and highest stakes across multiple bookmakers and exchanges.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" id="fullName" placeholder="Ex: John Doe">
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label for="phoneNo">Phone No</label>
                                    <input type="text" id="phoneNo" placeholder="+254 xxx xxx xxx">
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label for="emailAdd">Email</label>
                                    <input type="text" id="emailAdd" placeholder="Ex: yourmail@do.main">
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <label for="mailSubject">Subject</label>
                                    <input type="text" id="mailSubject" placeholder="Ex: Service">
                                </div>
                            </div>
                            <label for="yourMessage">Subject</label>
                            <textarea id="yourMessage" placeholder="Ex: Hello Admin!"></textarea>
                            <button class="submit-btn">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="contact-information">
                        <div class="about-site">
                            <img src="{{ URL::asset('/img/logo.png') }}" alt="" class="logo">
                            <p>FootballPredictions offers you all the best online betting from every corner of the planet with thousands of online betting markets.</p>
                        </div>
                        <ul class="info-list">
                            <li>
                                <span class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <span class="text">
                                    2870 Whitetail Lane, Dallas, TX 75240
                                </span>
                            </li>
                            
                            <li>
                                <span class="icon">
                                    <i class="fas fa-phone"></i>
                                </span>
                                <span class="text">
                                    469-280-5769
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="far fa-envelope"></i>
                                </span>
                                <span class="text">
                                support@footballpredictionsa.net
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-globe"></i>
                                </span>
                                <span class="text">
                                    footballpredictionsa.net
                                </span>
                            </li>
                        </ul>
                        <ul class="social-link">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d656168.0432930731!2d115.35539228254618!3d40.17440721560081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35f05296e7142cb9%3A0xb9625620af0fa98a!2sBeijing%2C%20China!5e0!3m2!1sen!2sbd!4v1584906265895!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
    <!-- contact end -->
@endsection
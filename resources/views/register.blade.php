@extends('layouts.client')
@section('content')
 <!-- breadcrumb begin -->
 <div class="breadcrumb-bettix register-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="breadcrumb-content">
                    <h2>Register</h2>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li>
                            Contact
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- regsiter begin -->
<div class="register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-8">
                <div class="section-title">
                    <h2>Register To Predict Now</h2>
                    <p>FootballPredictions is the most advanced sports trading & affialiate platform and highest stakes across multiple bookmakers and exchanges.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9">
                <div class="sign-up-step">
                    <ul>
                        <li class="active">
                            <span class="icon">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-user-circle fa-w-16 fa-fw fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z" class=""></path></svg>
                            </span>
                            <span class="text">Getting Started</span>
                        </li>
                        <li id="2nd-confirm">
                            <span class="icon">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="address-book" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-address-book fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64v384c0 35.3 28.7 64 64 64h288c35.3 0 64-28.7 64-64v-32h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-52 288c0 17.6-14.4 32-32 32H64c-17.6 0-32-14.4-32-32V64c0-17.6 14.4-32 32-32h288c17.6 0 32 14.4 32 32v384zM208 272c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-128c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zm46.8 144c-19.5 0-24.4 7-46.8 7s-27.3-7-46.8-7c-21.2 0-41.8 9.4-53.8 27.4C100.2 326.1 96 339 96 352.9V392c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-39.1c0-7 2.1-13.8 6-19.6 5.6-8.3 15.8-13.2 27.3-13.2 12.4 0 20.8 7 46.8 7 25.9 0 34.3-7 46.8-7 11.5 0 21.7 5 27.3 13.2 3.9 5.8 6 12.6 6 19.6V392c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-39.1c0-13.9-4.2-26.8-11.4-37.5-12.3-18-32.9-27.4-54-27.4z" class=""></path></svg>
                            </span>
                            <span class="text">Contact Details</span>
                        </li>
                        <li id="3rd-confirm">
                            <span class="icon">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shield-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-shield-alt fa-w-16 fa-fw fa-2x"><path fill="currentColor" d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM262.2 478.8c-4 1.6-8.4 1.6-12.3 0C152 440 48 304 48 128c0-6.5 3.9-12.3 9.8-14.8l192-80c3.9-1.6 8.4-1.6 12.3 0l192 80c6 2.5 9.9 8.3 9.8 14.8.1 176-103.9 312-201.7 350.8zM256 411V100l-142.7 59.5c10.1 120.1 77.1 215 142.7 251.5zm-32-66.8c-36.4-39.9-65.8-97.8-76.1-164.5L224 148z" class=""></path></svg>
                            </span>
                            <span class="text">Security Details</span>
                        </li>
                        <li id="final-confirm">
                            <span class="icon">
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-check-circle fa-w-16 fa-fw fa-2x"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" class=""></path></svg>
                            </span>
                            <span class="text">Almost Done</span>
                        </li>
                    </ul>
                </div>
                <div class="all-form">
                    <div class="single-form" id="first-step">
                        <form>
                            <div>
                                <input type="text" value="" id="firstName" required>
                                <label for="firstName">First Name</label>
                            </div>
                            <div>
                                <input type="text" value="" id="lastName" required>
                                <label for="lastName">Last Name</label>
                            </div>
                            <div>
                                <input type="email" id="emailAdd" required>
                                <label for="emailAdd">Email Address</label>
                            </div>
                            <div>
                                <input type="text" value="" id="dOb" required>
                                <label for="dOb">Date Of Birth</label>
                            </div><p>By clicking "NEXT", you confirm that you have read and understood the Bettix <a href="#">Privacy & Coockie Policy</a>, and agree to its terms.</p>
                            <button class="next" type="submit">Next</button>
                        </form>
                    </div>
                    <div class="single-form" id="second-step">
                        <form>
                            <div>
                                <input type="text" id="countryName">
                                <label for="countryName">Country</label>
                            </div>
                            <div>
                                <input type="text" id="address-line">
                                <label for="address-line">address line 1</label>
                            </div>
                            <div>
                                <input type="text" id="address-line-2">
                                <label for="address-line-2">address line 2</label>
                            </div>
                            <div>
                                <input type="text" id="cityName">
                                <label for="cityName">city Name</label>
                            </div>
                            <div>
                                <input type="text" id="mobileNumber">
                                <label for="mobileNumber">mobile Number</label>
                            </div>
                            <p>By clicking "NEXT", you confirm that you have read and understood the Bettix <a href="#">Privacy & Coockie Policy</a>, and agree to its terms.</p>
                            <button class="next">Next</button>
                        </form>
                    </div>
                    <div class="single-form" id="third-step">
                        <form>
                            <div>
                                <input type="text" id="userName">
                                <label for="userName">user Name</label>
                            </div>
                            <div>
                                <input type="password" id="passwordNo">
                                <label for="passwordNo">password</label>
                            </div>
                            <div>
                                <input type="password" id="passwordAgain">
                                <label for="passwordAgain">re-enter password</label>
                            </div>
                            <div>
                                <input type="text" id="securityQuote">
                                <label for="securityQuote">security Quote</label>
                            </div><p>By clicking "NEXT", you confirm that you have read and understood the Bettix <a href="#">Privacy & Coockie Policy</a>, and agree to its terms.</p>
                            <button class="next">Next</button>
                        </form>
                    </div>
                    <div class="final-step" id="fourth-step">
                        <div class="icon-completed">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
                                <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
                            </svg>
                            <span class="text">Yeah! Almost Done!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- regsiter end -->
@endsection
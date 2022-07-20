@extends('layouts.client')

@section('content')
<!-- breadcrumb begin -->
<div class="breadcrumb-bettix register-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="breadcrumb-content">
                    <h2>Login</h2>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li>
                            Login
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<!-- login begin -->
<div class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="section-title">
                    <h2>Login To get betting Tips</h2>
                    <p>FootballPredictions is the most advanced sports trading & affialiate platform and highest stakes across multiple bookmakers and exchanges.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div class="login-form">
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach

                    </div> 
                    <!-- end .flash-message -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                                @php
                                    Session::forget('message');
                                @endphp
                            </div>
                        @endif
                        <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <input type="password" placeholder="Enter Your Password"  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <button type="submit">{{ __('Login') }}</button>

                        
                        <div class="row mb-0">
                            <div class="col-md-8">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </div>
                            <p>Do not have an account? <a href="/register">Sign Up Here</a> </p>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login end -->
@endsection
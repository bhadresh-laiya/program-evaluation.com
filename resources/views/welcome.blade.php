@extends('layouts.master')

@section('content')

    <div class="slider-sec">
        <div class="slider single-item">
            <div><img src="{{ asset('images/slide1.jpg') }}" alt=" " /></div>
            <div><img src="{{ asset('images/slide2.jpg') }}" alt=" " /></div>
        </div>
        <div class="row">
            <div class="large-12 columns no-pad">
                <div class="banner-txt">
                    <h1>Ready To Promote<br />Your New Business</h1>
                    <a href="#" class="button round">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-sec">
        <div class="row">
        
            @include('partials.messages')

            <div class="large-12 columns text-center">
                <h2>Welcome to Our Company</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#" class="button round grey">Read More</a> 
            </div>
        </div>
    </div>

    <div class="services-sec">
        <div class="row">
            <div class="large-12 columns"><h2>Our Services</h2></div>
            <div class="large-4 medium-4 small-12 columns">
                <div class="img-box">
                    <img src="{{ asset('images/service1.jpg') }}" alt="Service1">
                </div>
                <div class="txt-box text-center">
                    <h3>Service Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="button radius"> Read More</a>
                </div>
            </div>

            <div class="large-4 medium-4 small-12 columns">
                <div class="img-box">
                    <img src="{{ asset('images/service2.jpg') }}" alt="Service1">
                </div>
                <div class="txt-box text-center">
                    <h3>Service Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="button radius"> Read More</a>
                </div>
            </div>

            <div class="large-4 medium-4 small-12 columns">
                <div class="img-box">
                    <img src="{{ asset('images/service3.jpg') }}" alt="Service1">
                </div>
                <div class="txt-box text-center">
                    <h3>Service Name</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="button radius"> Read More</a>
                </div>
            </div>

        </div>
    </div>

    <div class="newsletter">
        <div class="row">
            <div class="large-12 columns">
                <h2 class="white">Subscribe to our newsletter</h2>
                <p>Sign up for our mailing list to get latest updates and offers.</p>
            </div>
            <div class="large-2 medium-2 columns hide-for-small">&nbsp;</div>
            <div class="large-8 medium-8 small-12 columns">
            <form action="">
                <input placeholder="Email Address..." class="radius" type="text">
                <input name="" class="button radius" value="Subscribe" type="submit">
            </form>

            </div>
            <div class="large-2 medium-2 columns hide-for-small">&nbsp;</div>
        </div>
    </div>

@endsection
@extends('layouts.master')

@section('content')

<div class="inner-banner">
    <img src="{{ asset('images/slide1.jpg') }}" alt="Welcome to Program Evaluation" style="height: 351px;"> 
</div>

<div class="content-sec inner-sec">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>{{ __('Login') }}</h2>

                <form method="POST" action="{{ route('login') }}" class="frm">
                    @csrf

                    <div class="large-6 medium-6 small-12 columns">
                        <p>{{ __('E-Mail Address') }}</p>

                        <input id="email" type="email" class="radius @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="large-6 medium-6 small-12 columns">
                        <p>{{ __('Password') }}</p>

                        <input id="password" type="password" class="radius @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="large-6 medium-6 small-12 columns">
                        <label class="container" for="remember">
                            <input class="radius" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="large-12 columns"><input name="submit" type="submit" value="{{ __('Login') }}" class="button round"></div>

                    <!-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

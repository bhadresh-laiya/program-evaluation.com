@extends('layouts.master')

@section('content')

<div class="inner-banner">
    <img src="{{ asset('images/slide2.jpg') }}" alt="Welcome to Program Evaluation" style="height: 351px;"> 
</div>
    
<div class="content-sec inner-sec">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>{{ __('Register') }}</h2>

                    <form method="POST" action="{{ route('register') }}" class="frm">
                        @csrf

                        <div class="large-6 medium-6 small-12 columns">
                            <p>{{ __('Name') }}</p>

                            <input id="name" type="text" class="radius @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="large-6 medium-6 small-12 columns">
                            <p>{{ __('E-Mail Address') }}</p>

                            <input id="email" type="email" class="radius @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="large-6 medium-6 small-12 columns">
                            <p>{{ __('Password') }}</p>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="large-6 medium-6 small-12 columns">
                            <p>{{ __('Confirm Password') }}</p>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="large-12 columns"><input name="submit" type="submit" value="{{ __('Register') }}" class="button round"></div>

                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

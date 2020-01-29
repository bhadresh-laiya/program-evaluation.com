@extends('layouts.master')

@section('css')
<style type="text/css">
    .newsletter a {
        float: left;
        margin-left: 10px;
        padding: 12px 40px;
        background: #6bbfff;
        color: #fff;
        text-align: center;
        font-family: 'ProximaNovaRegular';
        font-size: 22px;
        text-transform: uppercase;
        height: auto;
        border-radius: 6px;
    }
</style>
@section('content')

    <div class="inner-banner">
        <img src="{{ asset('images/service3.jpg') }}" alt="Welcome to Program Evaluation" style="height: 351px;"> 
    </div>

    <div class="content-sec">
        <div class="row">

            @include('partials.messages')

            <div class="large-12 columns text-center">
                <h2>Welcome to Program Evaluation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="{{ route('submit-evaluation') }}" class="button round grey" title="Submit Program Evaluation" >Submit Program Evaluation</a>

                <a href="{{ route('search-evaluation') }}" class="button round grey" title="Search Program Evaluation" >Search Program Evaluation</a>
            </div>
        </div>
    </div>

    <!-- <div class="newsletter">
        <div class="row">
            <div class="large-12 columns">
                <h2 class="white">Program Evaluation</h2>
                <p>Do a program evaluation that really counts! </p>
            </div>
            <div class="large-1 medium-2 columns hide-for-small">&nbsp;</div>
            <div class="large-10 medium-8 small-12 columns">

                <a href="{{ route('submit-evaluation') }}" class="button round grey" title="Submit Program Evaluation" >Submit Program Evaluation</a>

                <a href="{{ route('submit-evaluation') }}" class="button round grey" title="Search Program Evaluation" >Search Program Evaluation</a>

            </div>
            <div class="large-2 medium-2 columns hide-for-small">&nbsp;</div>
        </div>
    </div> -->

@endsection
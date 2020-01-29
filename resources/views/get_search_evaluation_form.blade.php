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
        <img src="{{ asset('images/slide2.jpg') }}" alt="Welcome to Program Evaluation" style="height: 351px;"> 
    </div>

    <div class="content-sec inner-sec">
        <div class="row">

            @include('partials.messages')

            <div class="large-12 columns">
                <h2>Search Program Evaluation</h2>
                <p>Search a program evaluation that really counts! That will help other students and will put really make universities and colleges take students experiences to heart!</p>
            </div>
            <div class="clearfix"></div>

            <form action="{{ route('search-evaluation') }}" method="get" class="frm">
                
                <div class="large-6 medium-6 small-12 columns">
                    <p>University or College:</p>
                    <input name="university" placeholder="University" type="text" class="radius" value="{{ request('university') }}">
                </div>

                <div class="large-6 medium-6 small-12 columns">
                    <p>City:</p>
                    <input name="city" placeholder="City" type="text" class="radius" value="{{ request('city') }}">
                </div>

                <div class="large-6 medium-6 small-12 columns">
                    <p>Program/Degree:</p>
                    <input name="program_degree" placeholder="Program/Degree" type="text" class="radius" value="{{ request('program_degree') }}">
                </div>

                <div class="large-12 columns"><input name="submit" type="submit" value="Search" class="button round"></div>
            </form>
        </div>
    </div>

    @if(count($result))
    <div class="content-sec inner-sec">
        <div class="row">
            <table class="table large-12 medium-12 small-12">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>University</th>
                    <th>Course Name</th>
                    <th>Course Number</th>
                    <th>City</th>
                    <th>Program/Degree</th>
                    <th>About the University/College/Program</th>
                    <th>Verified.PRO member</th>
                    <th>About Course</th>
                    <th>How's instructors</th>
                    <th>Comments</th>
                    <th>Followed Up For Employment</th>
                </thead>
                <tbody>
                    @foreach($result as $program)
                    <tr>
                        <td>{{$program->name}}</td>
                        <td>{{$program->email}}</td>
                        <td>{{$program->university}}</td>
                        <td>{{$program->course_name}}</td>
                        <td>{{$program->course_number}}</td>
                        <td>{{$program->city_state_country}}</td>
                        <td>{{$program->program_degree_pursuing}}</td>
                        <td>{{Str::limit($program->program_course_description, $limit = 80, $end = '...')}}</td>
                        <td>@if($program->verified_pro_member == 'yes') Yes @else No @endif</td>
                        <td>{{Str::limit($program->program_course_long_description, $limit = 80, $end = '...')}}</td>
                        <td>{{Str::limit($program->hows_instructors, $limit = 80, $end = '...')}}</td>
                        <td>{{Str::limit($program->comments, $limit = 80, $end = '...')}} </td>
                        <td>@if($program->followed_up_for_employment == 'yes') Yes @else No @endif</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $result->appends(Request::all())->links() !!}
        </div>
    </div>
    @else
        <div class="row">
            <table class="large-12 medium-12 small-12 columns">
                <tr>
                    <td>
                    No record(s) found, Try different search filter.
                    </td>
                </tr>
            </table>
        </div>
    @endif

@endsection
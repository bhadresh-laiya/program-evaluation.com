@extends('layouts.master')

@section('content')

    <div class="inner-banner">
        <img src="{{ asset('images/about-banner.jpg') }}" alt="Program Evaluation"> 
    </div>

    <div class="content-sec inner-sec">
        <div class="row">

            @include('partials.messages')

            <div class="large-12 columns">
                <h2>Program Evaluation</h2>
                <p>Do a program evaluation that really counts! That will help other students and will put really make universities and colleges take students experiences to heart!</p>

                <label style="color: darkred;">Please note we will never share your name, email address, or any contact information.</label>
            </div>
            <div class="clearfix"></div>

            <form action="{{ route('submit-evaluation') }}" method="post" class="frm">
                {{ csrf_field() }}
                <div class="large-6 medium-6 small-12 columns">
                    <p>Your name (if comfortable providing it):</p>
                    <input name="name" placeholder="Your name (if comfortable providing it)" type="text" class="radius" value="{{ old('name') }}">
                </div>

                <div class="large-6 medium-6 small-12 columns">
                    <p>Email:</p>
                    <input name="email" placeholder="Email" type="email" class="radius" value="{{ old('email') }}">
                </div>

                <div class="large-6 medium-6 small-12 columns">
                    <p>University:</p>
                    <input name="university" placeholder="University" type="text" class="radius" value="{{ old('university') }}" required="">
                </div>

                <div class="large-6 medium-6 small-12 columns">
                    <p>Course Name:</p>
                    <input name="course_name" placeholder="Course Name" type="text" class="radius" value="{{ old('course_name') }}" required="">
                </div>

                <div class="large-6 medium-6 small-12 columns">
                    <p>Course Number:</p>
                    <input name="course_number" placeholder="Course Number" type="text" class="radius" value="{{ old('course_number') }}">
                </div>

                <div class="large-6 medium-6 small-12 columns">
                    <p>City:</p>
                    <input name="city" placeholder="City" type="text" class="radius" value="{{ old('city') }}" required="">
                </div>

                <div class="large-12 medium-12 small-12 columns">
                    <p>What program are you in? What degree are you pursuing? Engineering, Computer Science, Technical, Arts and Science, Law, Medicine, Nursing, Biology, Communications, Trades, Education, Other.</p>
                    <input name="program_degree_pursuing" placeholder="What program are you in? What degree are you pursuing?" type="text" class="radius" value="{{ old('program_degree_pursuing') }}" required="">
                </div>

                <div class="large-12 columns">
                    <p>Can you tell us something about the university/college/or program that shows you are really in the course?</p>
                    <textarea placeholder="Can you tell us something about the university/college/or program that shows you are really in the course?" name="program_course_description" class="radius">{{ old('program_course_description') }}</textarea>
                </div>

                <div class="large-6 medium-6 small-12 columns">
                    <!-- <p>Are a Verified.PRO member? &nbsp;&nbsp;&nbsp;&nbsp; <input name="verified_pro_member" type="checkbox" value="yes" class="radius"></p> -->

                    <label class="container">Are a Verified.PRO member? 
                        <input name="verified_pro_member" type="checkbox" value="yes" class="radius" @if(old('verified_pro_member') == 'yes') checked="" @endif>
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="large-12 columns">
                    <p>Tell us about your course? Was the course load too hard, too easy, or about right? Was the cost for the course reasonable?</p>
                    <textarea placeholder="Tell us about your course? Was the course load too hard, too easy, or about right? Was the cost for the course reasonable?" name="program_course_long_description" class="radius">{{ old('program_course_long_description') }}</textarea>
                </div>

                <div class="large-12 columns">
                    <p>How were the instructors?</p>
                    <textarea placeholder="How were the instructors?" name="hows_instructors" class="radius">{{ old('hows_instructors') }}</textarea>
                </div>

                <div class="large-12 columns">
                    <p>Any other comments you would like to share to other students thinking of taking this course?</p>
                    <textarea placeholder="Any other comments you would like to share to other students thinking of taking this course?" name="comments" class="radius">{{ old('comments') }}</textarea>
                </div>

                <div class="large-12 columns">
                    <!-- <p>Would you mind if we followed up with you to see if you ended up finding employment in this field after graduation? &nbsp;&nbsp;&nbsp;&nbsp; <input name="followed_up_for_employment" type="checkbox" value="yes" class="radius"></p> -->

                    <label class="container">Would you mind if we followed up with you to see if you ended up finding employment in this field after graduation?
                        <input name="followed_up_for_employment" type="checkbox" value="yes" class="radius" @if(old('followed_up_for_employment') == 'yes') checked="" @endif>
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="large-12 columns"><input name="submit" type="submit" value="Submit Form" class="button round"></div>
            </form>
        </div>
    </div>

@endsection
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Program Evaluation') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/foundation.css') }}" rel="stylesheet">
    <link href="{{ asset('slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
    <div id="app">
        <div class="row">
            <div class="large-4 medium-4 small-12 columns">
                <div id="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Pogram Evaluation">
                    </a>
                </div>
            </div>
            <div class="large-8 medium-8 small-12 columns">
                <nav class="top-bar" data-topbar role="navigation">
                    <ul class="title-area">
                        <li class="name"> </li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>

                    <section class="top-bar-section">
                        <!-- Right Nav Section -->
                        <ul class="right">
                            <li class="{{ (request()->is('evaluation') || request()->is('submit-evaluation') || request()->is('search-evaluation')) ? 'active' : '' }}"><a href="{{ route('evaluation') }}">Evaluation</a></li>
                            <li><a href="#">About Us</a></li>
                            <!-- <li><a href="#">Services</a></li> -->
                            <li><a href="#">Contact</a></li>
                            @guest
                                @if (Route::has('login'))
                                <li class="{{ (request()->is('login')) ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>    
                                @endif

                                @if (Route::has('register'))  
                                <li class="{{ (request()->is('register')) ? 'active' : '' }}"><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @else
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </section>
                </nav>
            </div>
        </div>

        @yield('content')

        <div class="footer-sec">
            <div class="row">
                <div class="large-3 medium-3 small-12 columns">
                    <div class="foot-1">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="{{ route('evaluation') }}">Evaluation</a></li>
                            <li><a href="#" title="About Us">About Us</a></li>
                            <!-- <li><a href="#" title="FAQs">FAQs</a></li>
                            <li><a href="#" title="Services">Services</a></li> -->
                            <li><a href="#" title="Contact">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="large-3 medium-3 small-12 columns">
                    <!-- <div class="foot-1">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#" title="Services">Lorem Ipsum</a></li>
                            <li><a href="#" title="Services">Lorem Ipsum</a></li>
                            <li><a href="#" title="Services">Lorem Ipsum</a></li>
                            <li><a href="#" title="Services">Lorem Ipsum</a></li>
                            <li><a href="#" title="Services">Lorem Ipsum</a></li>
                        </ul>
                    </div> -->
                </div>

                <div class="large-4 medium-3 small-12 columns">
                    <div class="foot-1">
                        <h4>Address</h4>
                        <p>44 New Design Street, Melbourne 005<br>
                        +1 (123) 456-7890-321</p>
                        <ul>
                            <li><a href="mailto:info@pogramevaluation.com" target="_blank">info@pogramevaluation.com</a></li>
                            <li><a href="tel:(01) 800 854 633" target="_blank">(01) 800 854 633</a></li>
                        </ul>
                    </div>
                </div>

                <div class="large-2 medium-3 small-12 columns">
                    <div class="foot-1">
                        <h4>Follow Us</h4>
                        <div class="social">
                            <div class="facebook"><a href="#" class="facebook"></a></div>
                            <div class="twitter"><a href="#" class="twitter"></a></div>
                            <div class="gplus"><a href="#" class="gplus"></a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="copy">
            <div class="row">
                <div class="large-12 columns">
                    Copyright &copy; 2020 PogramEvaluation. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/vendor/jquery.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/vendor/modernizr.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/foundation.min.js') }}" defer></script>
    <script type="text/javascript">
      $('.single-item').slick();
      $(document).foundation();
    </script>
    <script type="text/javascript" src="{{ asset('js/all.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('slick/slick.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}" defer></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Care4All</title>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dce93f02d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/templatemo-kind-heart-charity.css') }}" media="all" />
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/img/Favicon/android-icon-192x192.png') }}">
</head>

<body>
    <header class="default-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ Route('index') }}">
                    <img src="{{ asset('assets/img/images/logo0.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li>
                            <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ Route('index') }}">Home</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('about_us') ? 'active' : '' }}" href="{{ Route('about') }}">About Us</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('view_events', 'view_eventDetail/*') ? 'active' : '' }}" href="{{ Route('view_e') }}">Event</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('view_causes', 'view_causesDetail/*') ? 'active' : '' }}" href="{{ Route('view_c') }}">Causes</a>
                        </li>
                    </ul>
                    @guest
                    <div class="justify-content-between">
                        @if (Route::has('login'))
                        <a class="nav-link genric-btn success small" href="{{ route('login') }}"><i
                                class="fa-solid fa-arrow-right-to-bracket"></i> {{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="nav-link genric-btn primary small" href="{{ route('register') }}">{{ __('Register')
                            }}</a>
                        @endif
                    </div>
                    @else
                    <div class="justify-content-between">
                        <a class="nav-link genric-btn border small" href="{{ Route('history') }}">{{ Auth::user()->name
                            }}</a>

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            class="genric-btn primary small"><i class="icon-feather-log-in"></i> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    @endguest
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="footer">
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title"><img src="{{ asset('assets/img/images/logo0.png') }}"
                                    alt="Logo" style="width: 50%;"></h4>
                            <p>
                                Copyright &copy; All rights reserved <a href="{{ Route('index') }}"
                                    target="_blank">Care4All</a>
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-5">
                                <p class="sm-head">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    Head Office
                                </p>
                                <p>Jl. Ketintang, Surabaya</p>

                                <p class="sm-head">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    Phone Number
                                </p>
                                <p>(+62) 823545687531</p>

                                <p class="sm-head">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    Email
                                </p>
                                <p>care4all.official@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
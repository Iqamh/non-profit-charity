<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

  <title>Dashboard</title>

  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('dashboardassets/images/favicon/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('dashboardassets/images/favicon/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('dashboardassets/images/favicon/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboardassets/images/favicon/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114"
    href="{{ asset('dashboardassets/images/favicon/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120"
    href="{{ asset('dashboardassets/images/favicon/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144"
    href="{{ asset('dashboardassets/images/favicon/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152"
    href="{{ asset('dashboardassets/images/favicon/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180"
    href="{{ asset('dashboardassets/images/favicon/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"
    href="{{ asset('dashboardassets/images/favicon/android-icon-192x192.png') }}">
  <link rel="manifest" href="{{ asset('dashboardassets/images/favicon/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link href="{{ asset('dashboardassets/styles/all.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboardassets/styles/icon.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboardassets/styles/icons.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboardassets/styles/new.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboardassets/styles/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboardassets/styles/aragon-dashboards.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboardassets/styles/extras.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboardassets/styles/animated.1.1.0.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboardassets/styles/quill.snow.css') }}" rel="stylesheet">
  <script async defer src="{{ asset('dashboardassets/scripts/buttons.js') }}"></script>
</head>

<body class="h-100">
  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 m-auto" href="{{ Route('user')}}" style="line-height: 25px;">
              <div class="m-auto justify-content-center">
                <span class="text-monospace">Care<span class="text-danger font-weight-bold">4All</span></span>
              </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="icon-material-outline-arrow-back"></i>
            </a>
          </nav>
        </div>
        <div class="nav-wrapper">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('homes') ? 'active' : '' }}" href="{{ Route('user') }}">
                <i class="icon-material-outline-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('events', 'events/create', 'events/edit/*', 'events/view/*') ? 'active' : '' }}"
                href="{{ Route('events') }}">
                <i class="icon-feather-file-text"></i>
                <span>Events</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('causes', 'causes/create', 'causes/edit/*', 'causes/view/*') ? 'active' : '' }}"
                href="{{ Route('causes') }}">
                <i class="icon-material-outline-assignment"></i>
                <span>Causes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('galleries') ? 'active' : '' }}" href="{{ Route('galleries') }}">
                <i class="icon-feather-file-text"></i>
                <span>Galleries</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- End Main Sidebar -->
      <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <div class="main-navbar sticky-top bg-white">
          <!-- Main Navbar -->
          <nav class="navbar d-flex justify-content-end navbar-light flex-md-nowrap p-0">
            <ul class="navbar-nav border-left flex-row ">
              <li class="nav-item border-right dropdown notifications">
                <a class="nav-link nav-link-icon text-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                  <div class="nav-link-icon__wrapper">
                    <i class="icon-feather-log-out text-danger"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item notifications">
                <a class="nav-link nav-link-icon px-3" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-feather-users"></i>
                  <span class="d-none d-md-inline-block mr-2 ml-1" style="font-size:18px;">{{ Auth::user()->name }}</span>
                </a>
              </li>
            </ul>
            <nav class="nav">
              <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
                data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                <i class="icon-material-outline-dashboard"></i>
              </a>
            </nav>
          </nav>
        </div>
        <!-- / .main-navbar -->
        @yield('dashboardcontent')
        <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
          <span class="copyright ml-auto my-auto mr-2">Copyright © 2023
            <a href="https://MillionCourses.com" rel="nofollow">Care4All</a>
          </span>
        </footer>
      </main>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/jquery-3.3.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/bootstrap-tagsinput.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/Chart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/aragon.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/aragon.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/jquery.sharrre.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/extras.1.1.0.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/aragon-dashboards.1.1.0.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('dashboardassets/scripts/app/view.js') }}"></script>
</body>

</html>
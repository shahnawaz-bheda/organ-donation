<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Medick Responsive web template, Bootstrap Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <title>Organ Donation Laravel Project</title>
  <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{url('clientside/assets/css/style-starter.css')}}">
</head>

<body>
  <!--header-->
  <div class="header-w3l">
    <!-- header -->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
          <a class="navbar-brand" href="/">
          Organ <span class="sub-logo">D</span>onation</span>
          </a>
          <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-lg-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link"href="/blank">Blank Page</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link"href="/donate">Donate Now</a>
              </li>
              @if(Auth::guard('web')->check())
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Donations <i class="fa fa-angle-down"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <a class="dropdown-item" href="/donations">Browse Donations</a>
                    <a class="dropdown-item" href="/my-donations">My Donations</a>
                    <a class="dropdown-item" href="/my-requests">My Donation Requests</a>
                  </div>
                </li>
              
              {{-- <li class="nav-item">
                <a class="nav-link"href="/donations">Browse Donations</a>
              </li> --}}
              @endif
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
              @if(Auth::guard('web')->check())
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user fa-lg"></i> {{Auth::user()->name}} <i class="fa fa-angle-down"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <a class="dropdown-item" href="/profile">Profile</a>
                    <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  </div>
                </li>
              @else
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user fa-lg"></i>  <i class="fa fa-angle-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                  <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                </div>
              </li>
              @endif
              <!-- <li class="search-bar ml-lg-3 mr-lg-5 mt-lg-0 mt-4"> -->
                <!--/search-right-->
                <!-- <form class="search position-relative">
                  <input type="search" class="search__input" name="search" placeholder="Search here.."
                    onload="equalWidth()" required="">
                  <span class="fa fa-search search__icon"></span>
                </form> -->

                <!--//search-right-->
              <!-- </li> -->

            </ul>

          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
            <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox">
                  <div class="mode-container">
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                  </div>
                </label>
              </div>
            </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
        </nav>
      </div>
    </header>
    </div>
    <!-- //header -->

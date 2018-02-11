{{-- @Author : Kuntal Gupta
@E-Mail : kuntal1230@gmail.com
@Cell : +88 01744968888--}}

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.png"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="@yield('author')">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

      <title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body class="stretched">
  <!-- Document Wrapper-->
    <div id="wrapper" class="clearfix">
            <!-- Header-->
            <header id="header" class="full-header">
                <div id="header-wrap">
                    <div class="container clearfix">
                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                        <!-- Logo-->
                        <div id="logo">
                            <a href="/" class="standard-logo" data-dark-logo="{{ asset('images/dollar-logo.png') }}"><img src="{{ asset('images/dollar-logo.png') }}" alt="Logo"></a>
                            <a href="/" class="retina-logo" data-dark-logo="{{ asset('images/dollar-logo.png') }}"><img src="{{ asset('images/dollar-logo.png') }}" alt="Logo"></a>
                        </div>
                        <!-- #logo end -->

                        <!-- Primary Navigation -->
                        <nav id="primary-menu">
                            <ul>
                                <li class="@yield('class-home')"><a href="{{ route('home') }}"><div>Home</div></a></li>
                                <li class="@yield('class-sell')"><a href="{{ url('sell-currency') }}"><div>Sell Currency</div></a></li>
                                <li class="@yield('class-buy')"><a href="{{ url('buy-currency') }}"><div>Buy Currency</div></a></li>
                                <li class="@yield('class-exchange')"><a href="{{ url('exchange-currency') }}"><div>Exchange Currency</div></a></li>
                                <li class="@yield('class-contactus')"><a href="{{ route('contactus') }}"><div>Contact Us</div></a></li>
                                @guest
                                  <li class="@yield('class-login')"><a href="{{ url('login') }}"><div><i style="margin-top: 5px;" class="fa fa-user"></i> Log In | Register</div></a></li>
                                @else
                                  <li class="sub-menu"><a href="#" class="sf-with-ul"><div><i style="margin-top: 5px;" class="fa fa-user"></i>Hi. kuntal<b><i style="margin-top: 5px;" class="fa fa-angle-down"></i></b></div></a>
                                    <ul class="menu-pos-invert" style="display: none;">
                                        <li><a href="member/member-dashboard.html"><div><i class="fa fa-dashboard"></i> Dashboard</div></a></li>
                                        <li><a href="member/member-edit.html"><div><i class="fa fa-edit"></i> Edit Profile</div></a></li>
                                        <li><a href="member/member-password-change.html"><div><i class="fa fa-cogs"></i> Change Password</div></a></li>
                                        <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('user-logout-form').submit();">
                                          <i class="fa fa-sign-out"></i> Log Out</a>
                                            <form id="user-logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                              {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                  </li>
                                @endguest
                            </ul>
                        </nav>
                      <!-- #primary-menu end -->
                    </div>
                </div>
            </header>
          <!-- #header end -->
          @yield('session_message')

          @yield('banar')

          @yield('content')

        <!-- Footer-->
        <footer id="footer" class="dark">
            <!-- Copyrights-->
            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col_half">
                        © All copyright Reserved<br>
                    </div>
                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            <a href="" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>
                            <a href="" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div><!-- #copyrights end -->
        </footer>
        <!-- #footer end -->
    </div>
    <!-- #wrapper end -->

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/marquee.js') }}"></script>
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

        <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('app-assets/arq/img/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{asset('app-assets/arq/img/icon57.png')}}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{asset('app-assets/arq/img/icon72.png')}}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{asset('app-assets/arq/img/icon76.png')}}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{asset('app-assets/arq/img/icon114.png')}}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{asset('app-assets/arq/img/icon120.png')}}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{asset('app-assets/arq/img/icon144.png')}}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{asset('app-assets/arq/img/icon152.png')}}" sizes="152x152">
        <link rel="apple-touch-icon" href="{{asset('app-assets/arq/img/icon180.png')}}" sizes="180x180">
        <!-- END Icons -->
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{asset('app-assets/arq/css/bootstrap.min.css')}}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{asset('app-assets/arq/css/plugins.css')}}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{asset('app-assets/arq/css/main.css')}}">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{asset('app-assets/arq/css/themes.css')}}">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="{{asset('app-assets/arq/js/vendor/modernizr.min.js')}}"></script>
    </head>
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container">
            <!-- Site Header -->
            <header>
                <div class="container">
                    <!-- Site Logo -->
                    <a class="site-logo" href="{{ url('/') }}">
                        {{ config('app.name', 'site') }}
                        <i class="gi gi-flash"></i> <strong>Pro</strong>UI
                    </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- END Menu Toggle -->
                            <li>
                                <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>Home</a>
                                <ul>
                                    <li>
                                        <a href="index.html">Full Width</a>
                                    </li>
                                    <li>
                                        <a href="index_alt.html">Full Width (Dark)</a>
                                    </li>
                                    <li>
                                        <a href="index_parallax.html">Full Width Parallax</a>
                                    </li>
                                    <li>
                                        <a href="index_video.html">Full Width Video</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed.html">Boxed</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed_alt.html">Boxed (Dark)</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed_parallax.html">Boxed Parallax</a>
                                    </li>
                                    <li>
                                        <a href="index_boxed_video.html">Boxed Video</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>Pages</a>
                                <ul>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="blog_post.html">Blog Post</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_4.html">Portfolio 4 Columns</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_3.html">Portfolio 3 Columns</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_2.html">Portfolio 2 Columns</a>
                                    </li>
                                    <li>
                                        <a href="portfolio_single.html">Portfolio Single</a>
                                    </li>
                                    <li>
                                        <a href="team.html">Team</a>
                                    </li>
                                    <li>
                                        <a href="helpdesk.html">Helpdesk</a>
                                    </li>
                                    <li>
                                        <a href="jobs.html">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="how_it_works.html">How it works</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i>eCommerce</a>
                                <ul>
                                    <li>
                                        <a href="ecom_home.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="ecom_search_results.html">Search Results</a>
                                    </li>
                                    <li>
                                        <a href="ecom_product_list.html">Product List</a>
                                    </li>
                                    <li>
                                        <a href="ecom_product.html">Product</a>
                                    </li>
                                    <li>
                                        <a href="ecom_product_comparison.html">Product Comparison</a>
                                    </li>
                                    <li>
                                        <a href="ecom_shopping_cart.html">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="ecom_checkout.html">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="features.html">Features</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            @guest
                                <li>
                                    <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li >
                                        <a href="{{ route('register') }}" class="btn btn-success">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->
            @yield('content')
                <!-- Footer -->
            <footer class="site-footer site-section">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">About Us</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="about.html">Company</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact.html">Support</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">Legal</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="javascript:void(0)">Licensing</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">Follow Us</h4>
                            <ul class="footer-nav footer-nav-social list-inline">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading"><span id="year-copy">2014</span> &copy; <a href="http://goo.gl/TDOSuC">ProUI Frontend</a></h4>
                            <ul class="footer-nav list-inline">
                                <li>Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I">pixelcave</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Footer Links -->
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="{{asset('app-assets/arq/js/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('app-assets/arq/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('app-assets/arq/js/plugins.js')}}"></script>
        <script src="{{asset('app-assets/arq/js/app.js')}}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Load and execute javascript code used only in this page-->
    </body>
</html>
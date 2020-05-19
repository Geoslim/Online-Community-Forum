<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('dashboard-assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- modernizr css -->
    <script src="{{ asset('dashboard-assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('dashboard-assets/images/icon/logo.png')}}" alt="LOGO"></a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        
                        @guest

                        @else
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                                <li class="dropdown">
                                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span>2</span>
                                    </i>
                                    <div class="dropdown-menu bell-notify-box notify-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Commetns On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                        
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                    <div class="dropdown-menu notify-box nt-enveloper-box">
                                        <span class="notify-title">You have 2 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                          
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="{{ asset('dashboard-assets/images/author/author-img1.jpg')}}" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="{{ asset('dashboard-assets/images/author/author-img3.jpg')}}" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                             
                            </ul>
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="{{ asset('dashboard-assets/images/author/'.Auth()->user()->avatar)}}" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth()->user()->name }} <i class="fa fa-angle-down"></i></h4>
                                
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                                   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                   
                                    <li><a href="{{ url('/') }}"><i class="ti-home"></i> <span>Forum</span></a></li>

                                    {{-- <li>
                                        <a href="javascript:void(0)"><i class="ti-pie-chart"></i><span>Charts</span></a>
                                        <ul class="submenu">
                                            <li><a href="">bar chart</a></li>
                                            <li><a href="">line Chart</a></li>
                                            <li><a href="">pie chart</a></li>
                                        </ul>
                                    </li> --}}
                                 
                                    @guest
                                        <li><a href="{{ route('login') }}"><i class="ti-user"></i> <span>My Account</span></a></li>
                                    @else
                                        <li><a href="dashboard"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- nav and search button -->
                    <div class="col-lg-3 clearfix">
                        <div class="search-box">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->


        <!-- page title area end -->
        <div class="main-content-inner">

            @include('includes.messages')
            @yield('content')
            


        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2020. All right reserved.  <a href="">Forum</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- main wrapper start -->
   
    <!-- jquery latest version -->
    <script src="{{ asset('dashboard-assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('dashboard-assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('dashboard-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dashboard-assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('dashboard-assets/js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('dashboard-assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="{{ asset('dashboard-assets/js/line-chart.js')}}"></script>
    <!-- all pie chart -->
    <script src="{{ asset('dashboard-assets/js/pie-chart.js')}}"></script>
    <!-- all bar chart -->
    <script src="{{ asset('dashboard-assets/js/bar-chart.js')}}"></script>
    <!-- all map chart -->
    <script src="{{ asset('dashboard-assets/js/maps.js')}}"></script>
    <!-- others plugins -->
    <script src="{{ asset('dashboard-assets/js/plugins.js')}}"></script>
    <script src="{{ asset('dashboard-assets/js/scripts.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('success')) {
            toastr.success('{{ Session::get('success') }}')
        }
        @endif
    </script>
</body>

</html>


           
           
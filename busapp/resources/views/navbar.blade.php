<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UITM BUS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="{{asset('import/assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('import/assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('import/assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('import/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('import/assets/images/icon/logobus.png')}}" alt="logobus"></a>-->
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li><a href="{{route('cardregister.index')}}">Card Register</a></li>
                        <li><a href="{{route('busschedule')}}">Bus Schedule</a></li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="{{asset('import/assets/images/author/avatar.png')}}" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Abdul <i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Message</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <!-- page title area end -->
    <!-- jquery latest version -->
    <script src="{{asset('import/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('import/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('import/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('import/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('import/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('import/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('import/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- start chart js -->
    <script src="{{asset('import/https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js')}}"></script>
    <!-- start highcharts js -->
    <script src="{{asset('import/https://code.highcharts.com/highcharts.js')}}"></script>
    <!-- start zingchart js -->
    <script src="{{asset('import/https://cdn.zingchart.com/zingchart.min.js')}}"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{asset('import/assets/js/line-chart.js')}}"></script>
    <!-- all pie chart -->
    <script src="{{asset('import/assets/js/pie-chart.js')}}"></script>
    <!-- others plugins -->
    <script src="{{asset('import/assets/js/plugins.js')}}"></script>
    <script src="{{asset('import/assets/js/scripts.js')}}"></script>
</body>

</html>

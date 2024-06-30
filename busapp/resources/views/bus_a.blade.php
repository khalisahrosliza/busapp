@extends('navbar')

@section('content')
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('import/assets/plugins/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{asset('import/assets/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('import/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{asset('import/assets/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        {{-- <div class="page-wrapper"> --}}
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Bus Operating</h3>
                            <h3 class="ms-auto"><span class="counter text-success">5</span></h3>
                            {{-- <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success">659</span></li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Time</h3>
                            <h3 class="ms-auto"><span class="counter text-info">{{ date('H:i') }}</span></h3>
                            {{-- <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple">869</span></li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Date</h3>
                            <h3 class="ms-auto"><span class="counter text-info">{{ date('Y-m-d') }}</span></h3>
                            {{-- <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info">911</span>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Number of Bus Passsenger Graph-->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Number of Bus Passenger for Today:</h3>
                            <div class="d-md-flex">
                                <ul class="list-inline d-flex ms-auto">
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-info"></i>RFID</h5>
                                    </li>
                                </ul>
                            </div>
                            <div id="ct-visits" style="height: 405px;">
                                {{-- <div class="chartist-tooltip" style="top: -17px; left: -12px;">
                                    <span class="chartist-tooltip-value">6</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- STATISTIC -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- resources/views/bus_a.blade.php -->

<h1>Bus A</h1>

<table>
    <thead>
        <tr>
            <th>Card ID</th>
            <th>Student ID</th>
            <th>Faculty</th>
            <th>Gender</th>
            <th>Residential</th>
        </tr>
    </thead>
    <tbody>
        <td>1234567</td>
        <td>A120987</td>
        <td>Engineering</td>
        <td>Female</td>
        <td>Non-Residential</td>
    </tbody>
    {{-- <tbody>
        @if(isset($userDetails))
            @foreach($userDetails as $userDetail)
                <tr>
                    <td>{{ $userDetail->card_id }}</td>
                    <td>{{ $userDetail->std_id }}</td>
                    <td>{{ $userDetail->faculty }}</td>
                    <td>{{ $userDetail->gender }}</td>
                    <td>{{ $userDetail->residential }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">No user details found.</td>
            </tr>
        @endif
    </tbody> --}}
</table>
{{-- @include('cardregister', ['cardRegisterView' => $cardRegisterView]) --}}

                </div>
                <!-- ============================================================== -->
                <!-- Driver Status -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-heading">
                                <h3 class="box-title mb-0">Bus Driver</h3>
                            </div>
                            <div class="card-body">
                                <ul class="chatonline">
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="{{asset('import/assets/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Abdul Jalil bin Suboh <small
                                                        class="d-block text-success d-block">Available</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="{{asset('import/assets/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Hassan bin Hassin <small
                                                        class="d-block text-success d-block">Available</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="{{asset('import/assets/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Harun bin Ismail<small
                                                        class="d-block text-success d-block">Available</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="{{asset('import/assets/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Zakaria bin Samad <small
                                                        class="d-block text-success d-block">Available</small></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="call-chat">
                                            <button class="btn btn-success text-white btn-circle btn" type="button">
                                                <i class="fas fa-phone"></i>
                                            </button>
                                            <button class="btn btn-info btn-circle btn" type="button">
                                                <i class="far fa-comments text-white"></i>
                                            </button>
                                        </div>
                                        <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                                src="{{asset('import/assets/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle">
                                            <div class="ms-2">
                                                <span class="text-dark">Mahmood Baba bin Toha <small
                                                        class="d-block text-success d-block">Available</small></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('import/assets/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('import/assets/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('import/assets/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('import/assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('import/assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('import/assets/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('import/assets/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('import/assets/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('import/assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('import/assets/js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>

@endsection

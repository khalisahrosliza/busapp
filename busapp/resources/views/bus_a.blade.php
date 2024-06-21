<!-- resources/views/bus_a.blade.php -->

@extends('navbar')

@section('content')
<?php

//   Script utk list kn data drpd table passenger.
//   Bleh letak in between html codes...
//   Guna include "lists.php"; / require "lists.php";

/*require "dbconn.php";

$sql = "SELECT * FROM passenger";
$result = $conn->query($sql);
$bil = 1;
?>

<table border="1">
    <tr header>
        <td>Bil</td>
        <td>Nama/Student ID/etc... (letak apa je yg nk...)</td>
        <td>Nombor Bas</td>
        <td>Masa</td>
    </tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $bil . "</td>
            <td>" . $row["card_id"] . "</td>
            <td>" . $row["bus_id"] . "</td>
            <td>" . $row["masa"] . "</td>
          </tr>";
    $bil++;
}*/



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function updateTimeAndDate() {
                const now = new Date();
                const time = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                const date = now.toLocaleDateString([], { year: 'numeric', month: 'short', day: 'numeric' });

                document.getElementById('current-time').textContent = time;
                document.getElementById('current-date').textContent = date;
            }

            setInterval(updateTimeAndDate, 1000);
            updateTimeAndDate();
        });
    </script>
</head>

?>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
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
                            <h3 class="box-title">Active Bus</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success">10</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Time</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple" id="current-time"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Date</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info" id="current-date"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Daily Bus Passengers Count</h3>
            <div class="d-md-flex">
                <ul class="list-inline d-flex ms-auto">
                    <li class="ps-3">
                        <h5><i class="fa fa-circle me-1 text-info"></i>PIR</h5>
                    </li>
                    <li class="ps-3">
                        <h5><i class="fa fa-circle me-1 text-inverse"></i>RFID</h5>
                    </li>
                </ul>
            </div>
            <div id="ct-visits" style="height: 405px;">
                <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                        class="chartist-tooltip-value">6</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="d-md-flex mb-3">
                <h3 class="box-title mb-0">Passenger Details</h3>
                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <select class="form-select shadow-none row border-top">
                        <option>March 2024</option>
                        <option>April 2024</option>
                        <option>May 2024</option>
                        <option>June 2024</option>
                        <option>July 2024</option>
                    </select>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">STUDENT ID</th>
                            <th class="border-top-0">FACULTY</th>
                            <th class="border-top-0">GENDER</th>
                            <th class="border-top-0">RESIDENTIAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="txt-oflo">Elite admin</td>
                            <td>SALE</td>
                            <td class="txt-oflo">April 18, 2021</td>
                            <td><span class="text-success">$24</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt-oflo">Real Homes WP Theme</td>
                            <td>EXTENDED</td>
                            <td class="txt-oflo">April 19, 2021</td>
                            <td><span class="text-info">$1250</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt-oflo">Ample Admin</td>
                            <td>EXTENDED</td>
                            <td class="txt-oflo">April 19, 2021</td>
                            <td><span class="text-info">$1250</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt-oflo">Medical Pro WP Theme</td>
                            <td>TAX</td>
                            <td class="txt-oflo">April 20, 2021</td>
                            <td><span class="text-danger">-$24</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt-oflo">Hosting press html</td>
                            <td>SALE</td>
                            <td class="txt-oflo">April 21, 2021</td>
                            <td><span class="text-success">$24</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt-oflo">Digital Agency PSD</td>
                            <td>SALE</td>
                            <td class="txt-oflo">April 23, 2021</td>
                            <td><span class="text-danger">-$14</span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt-oflo">Helping Hands WP Theme</td>
                            <td>MEMBER</td>
                            <td class="txt-oflo">April 22, 2021</td>
                            <td><span class="text-success">$64</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-12 col-sm-12">
    <div class="card white-box p-0">
        <div class="card-heading">
            <h3 class="box-title mb-0">Chat Listing</h3>
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
                            src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                        <div class="ms-2">
                            <span class="text-dark">Varun Dhavan <small
                                    class="d-block text-success d-block">online</small></span>
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
                            src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle">
                        <div class="ms-2">
                            <span class="text-dark">Genelia
                                Deshmukh <small class="d-block text-warning">Away</small></span>
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
                            src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                        <div class="ms-2">
                            <span class="text-dark">Ritesh
                                Deshmukh <small class="d-block text-danger">Busy</small></span>
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
                            src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                        <div class="ms-2">
                            <span class="text-dark">Arijit
                                Sinh <small class="d-block text-muted">Offline</small></span>
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
                            src="plugins/images/users/govinda.jpg" alt="user-img"
                            class="img-circle">
                        <div class="ms-2">
                            <span class="text-dark">Govinda
                                Star <small class="d-block text-success">online</small></span>
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
                            src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                        <div class="ms-2">
                            <span class="text-dark">John
                                Abraham<small class="d-block text-success">online</small></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

</table>
@endsection

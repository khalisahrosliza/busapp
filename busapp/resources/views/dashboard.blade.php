@extends('navbar')
@section('content')
            <div class="main-content-inner">
                <!-- sales report area start -->
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-address-card"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">BUS A</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2> - </h2>
                                        <span>- </span>
                                    </div>
                                </div>
                                <canvas id="coin_sales1" height="100"></canvas>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-a"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">BUS C</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>-</h2>
                                        <span>- </span>
                                    </div>
                                </div>
                                <canvas id="coin_sales2" height="100"></canvas>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-eur"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">BUS D</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>-</h2>
                                        <span>- </span>
                                    </div>
                                </div>
                                <canvas id="coin_sales3" height="100"></canvas>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-btc"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">BUS E</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>-</h2>
                                        <span>- </span>
                                    </div>
                                </div>
                                <canvas id="coin_sales2" height="100"></canvas>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-btc"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">BUS B</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>-</h2>
                                    </div>
                                </div>
                                <canvas id="coin_sales2" height="100"></canvas>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-btc"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">BUS G</h4>
                                        <p>24 H</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h2>-</h2>
                                        <span>- </span>
                                    </div>
                                </div>
                                <canvas id="coin_sales2" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->
                <!-- overview area start -->
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Overview</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Last 24 Hours</option>
                                        <option value="0">01 July 2018</option>
                                    </select>
                                </div>
                                <div id="verview-shart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 coin-distribution">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title mb-0">Number Distribution</h4>
                                <div id="coin_distribution"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- overview area end -->
                <!-- row area start -->
                <div class="row">
                    <
                </div>
                <!-- row area end -->
                <div class="row mt-5">
                </div>
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
    </div>
    <!-- page container area end -->

@endsection
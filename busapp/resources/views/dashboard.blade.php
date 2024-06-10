@extends('navbar')
@section('content')
    <style>
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-top: 20px;
        }
        .welcome-message {
            font-size: 1.5em;
            margin-bottom: 20px;
        }
        .choose-bus-message {
            margin-bottom: 40px; /* Added more space */
            font-size: 1.2em;
        }
        .bus-boxes {
            display: grid;
            grid-template-columns: repeat(3, auto);
            gap: 20px;
            justify-content: center;
        }
        .bus-box {
            padding: 0px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
            width: 150px; /* Increased width */
            height: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #fff;
            position: center; /* For positioning */
        }
        .bus-box .bus-icon {
            font-size: 2.5em; /* Center the letter */
            position: center;
            top: 50%;
            transform: translateY(-50%);
        }
        .bus-box.bus-a { background-color: #FFDDC1; }
        .bus-box.bus-c { background-color: #D3E0DC; }
        .bus-box.bus-d { background-color: #FFB6C1; }
        .bus-box.bus-e { background-color: #E6E6FA; }
        .bus-box.bus-b { background-color: #F0E68C; }
        .bus-box.bus-g { background-color: #ADD8E6; }
        .operating-info {
            position: flex;
            vertical-align: middle;
            bottom: 10px; /* Position at the bottom */
            font-size:10.0px; /* Made the font size smaller */
            color: #333;
        }
    </style>

    <div class="main-content-inner">
        <!-- welcome message area start -->
        <div class="center-content">
            <div class="welcome-message">
                Welcome Mr. Abdul!
            </div>
            <div class="choose-bus-message">
                Choose which bus to inspect:
            </div>
            <!-- bus boxes area start -->
            <div class="bus-boxes">
                <!-- BUS A -->
                <div class="single-report bus-box bus-a">
                    <div class="s-report-inner mb-3">
                        <h2><a href="{{ route('bus.a') }}"><div class="bus-icon">A</div></a></h2>
                        <div class="operating-info">
                            Currently Operating: <strong>5</strong>
                        </div>
                    </div>
                </div>

                <!-- BUS B -->
                <div class="single-report bus-box bus-b">
                    <div class="s-report-inner mb-3">
                        <div class="bus-icon">B</div>
                        <div class="operating-info">
                            Currently Operating: <strong>3</strong>
                        </div>
                    </div>
                </div>

                <!-- BUS C -->
                <div class="single-report bus-box bus-c">
                    <div class="s-report-inner mb-3">
                        <div class="bus-icon">C</div>
                        <div class="operating-info">
                            Currently Operating: <strong>4</strong>
                        </div>
                    </div>
                </div>

                <!-- BUS D -->
                <div class="single-report bus-box bus-d">
                    <div class="s-report-inner mb-3">
                        <div class="bus-icon">D</div>
                        <div class="operating-info">
                            Currently Operating: <strong>6</strong>
                        </div>
                    </div>
                </div>

                <!-- BUS E -->
                <div class="single-report bus-box bus-e">
                    <div class="s-report-inner mb-3">
                        <div class="bus-icon">E</div>
                        <div class="operating-info">
                            Currently Operating: <strong>2</strong>
                        </div>
                    </div>
                </div>

                <!-- BUS G -->
                <div class="single-report bus-box bus-g">
                    <div class="s-report-inner mb-3">
                        <div class="bus-icon">G</div>
                        <div class="operating-info">
                            Currently Operating: <strong>1</strong>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bus boxes area end -->
        </div>
        <!-- welcome message area end -->

        <!-- overview area start -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="header-title mb-0">Overview</h4>
                            <select class="custome-select border-0 pr-3">
                                <option selected>Last 24 Hours</option>
                                <option value="0">01 July 2018</option>
                            </select>
                        </div>
                        <div id="overview-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- overview area end -->
    </div>
    <!-- main content area end -->

@endsection

@extends('navbar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Bus A Schedule</h2>
                <img src="{{ asset('images/bus_schedules/bus_a_schedule.png') }}" alt="Bus A Schedule">
            </div>
            <div class="col-md-6">
                <h2>Bus C Schedule</h2>
                <img src="{{ asset('images/bus_schedules/bus_c_schedule.png') }}" alt="Bus C Schedule">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Bus D Schedule</h2>
                <img src="{{ asset('images/bus_schedules/bus_d_schedule.png') }}" alt="Bus D Schedule">
            </div>
            <div class="col-md-6">
                <h2>Bus E Schedule</h2>
                <img src="{{ asset('images/bus_schedules/bus_e_schedule.png') }}" alt="Bus E Schedule">
            </div>
        </div>
        <!-- Add more rows for other buses if needed -->
    </div>
@endsection

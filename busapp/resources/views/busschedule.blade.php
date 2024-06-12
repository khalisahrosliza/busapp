@extends('navbar')

@section('content')
    <div class="container">
        <h1 class="text-center">Bus Schedules</h1>
        <p class="text-center">View the bus schedules below</p>

        <img src="{{ asset('import/assets/images/bus_schedules/bus_a_schedule.png') }}" alt="Bus A Schedule" class="img-fluid">
        <img src="{{ asset('import/assets/images/bus_schedules/bus_c_schedule.png') }}" alt="Bus C Schedule" class="img-fluid">
        <img src="{{ asset('import/assets/images/bus_schedules/bus_d_schedule.png') }}" alt="Bus D Schedule" class="img-fluid">
        <img src="{{ asset('import/assets/images/bus_schedules/bus_e_schedule.png') }}" alt="Bus E Schedule" class="img-fluid">

    </div>
@endsection

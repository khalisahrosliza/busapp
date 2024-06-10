@extends('navbar')

@section('content')
    <div class="container">
        @php
            $schedules = [
                'A' => 'bus_a_schedule.png',
                'C' => 'bus_c_schedule.png',
                'D' => 'bus_d_schedule.png',
                'E' => 'bus_e_schedule.png'
            ];
        @endphp

        @foreach($schedules as $bus => $image)
            @php
                $imagePath = asset('images/bus_schedules/' . $image);
            @endphp
            <div class="row mb-4 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>Bus {{ $bus }} Schedule</h2>
                    <p>Image Path: {{ $imagePath }}</p> <!-- For debugging purposes -->
                    <img src="{{ $imagePath }}" alt="Bus {{ $bus }} Schedule" class="img-fluid mx-auto d-block">
                    <!-- Hardcoded image URL for testing -->
                    <img src="http://127.0.0.1:8000/images/bus_schedules/bus_a_schedule.png" alt="Test Image" class="img-fluid mx-auto d-block">
                </div>
            @endforeach
            </div>
    </div>
@endsection

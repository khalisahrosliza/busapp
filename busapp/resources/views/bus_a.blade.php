<!-- resources/views/bus_a.blade.php -->

@extends('navbar')

@section('content')
<div class="container">
    <h2>Bus A Passenger Count</h2>
    <canvas id="busAChart"></canvas>
</div>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('busAChart').getContext('2d');
    var busAChart = new Chart(ctx, {
        type: 'line', // You can change this to 'bar', 'pie', etc.
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Number of Passengers',
                data: @json($data['data']),
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>
@endsection

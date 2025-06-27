@extends('layouts.admin')

@section('title', 'Charts')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Halaman Charts</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Visualisasi Pendapatan Order</li>
        </ol>

        <!-- Chart Row -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-area me-1"></i> Area Chart</div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-bar me-1"></i> Bar Chart</div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = {!! json_encode($labels) !!};
        const data = {!! json_encode($data) !!};

        const ctxArea = document.getElementById('myAreaChart').getContext('2d');
        new Chart(ctxArea, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Income',
                    data: data,
                    fill: true,
                    backgroundColor: 'rgba(78, 115, 223, 0.1)',
                    borderColor: 'rgba(78, 115, 223, 1)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

        const ctxBar = document.getElementById('myBarChart').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Income',
                    data: data,
                    backgroundColor: 'rgba(54, 185, 204, 0.6)',
                    borderColor: 'rgba(54, 185, 204, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>
@endpush
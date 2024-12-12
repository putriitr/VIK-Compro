@extends('layouts.Admin.master')

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Kartu Informasi -->
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="row">
                    @foreach ([['icon' => 'fa-users', 'title' => 'Member', 'count' => $totalMembers], ['icon' => 'fa-briefcase', 'title' => 'Vendor', 'count' => 'blm'], ['icon' => 'fa-shopping-cart', 'title' => 'Produk', 'count' => $totalProducts], ['icon' => 'fa-ticket-alt', 'title' => 'Tiketing', 'count' => $totalTickets]] as $card)
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <div class="card-title d-flex align-items-center justify-content-center mb-3">
                                    <i class="fas {{ $card['icon'] }} fa-2x"></i>
                                </div>
                                <h5 class="fw-semibold mb-2">{{ $card['title'] }}</h5>
                                <h3 class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> {{ $card['count'] }}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Grafik Statistik -->
            <div class="col-lg-8 col-md-12 mb-4">
                <div class="card h-100">
                    <h5 class="card-header m-0 me-2 pb-3">Statistik Kunjungan Website</h5>
                    <div class="card-body">
                        <canvas id="daily-visits-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dates = @json($dates ?? []);
        const visits = @json($visits ?? []);
        const ctx = document.getElementById('daily-visits-chart').getContext('2d');

        if (dates.length && visits.length) {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: dates,
                    datasets: [{
                        label: 'Kunjungan (Harian)',
                        data: visits,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 2,
                        tension: 0.3,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    },
                    scales: {
                        x: { title: { display: true, text: 'Waktu Kunjungan' } },
                        y: { title: { display: true, text: 'Jumlah Kunjungan' }, beginAtZero: true }
                    }
                }
            });
        }
    });
</script>
@endsection

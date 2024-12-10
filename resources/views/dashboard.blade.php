@extends('layouts.Admin.master')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <i class="fas fa-users fa-2x"></i>
                                        </div>
                                    </div>
                                    <h5 class="fw-semibold d-block mb-1">Member</h5>
                                    <h3 class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        {{ $totalMembers }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <i class="fas fa-briefcase fa-2x"></i>
                                        </div>
                                    </div>
                                    <h5 class="fw-semibold d-block mb-1">Vendor</h5>
                                    <h3 class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        blm</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <i class="fas fa-shopping-cart fa-2x"></i>
                                        </div>
                                    </div>
                                    <h5 class="fw-semibold d-block mb-1">Produk</h5>
                                    <h3 class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        {{ $totalProducts }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <i class="fas fa-ticket-alt fa-2x"></i>
                                        </div>
                                    </div>
                                    <h5 class="fw-semibold d-block mb-1">Tiketing</h5>
                                    <h3 class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        {{ $totalTickets }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                    <div class="card">
                        <div class="row row-bordered g-0">
                            <div class="col-md-12">
                                <h5 class="card-header m-0 me-2 pb-3">Statistik Kunjungan Website</h5>
                                <canvas id="daily-visits-chart" class="px-2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Total Revenue -->
            </div>
        </div>
    </div>

    <!-- Statistics Chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data untuk Grafik Kunjungan Harian
            const dates = @json($dates ?? []);
            const visits = @json($visits ?? []);
            const dailyVisitsCtx = document.getElementById('daily-visits-chart').getContext('2d');

            if (dates.length > 0 && visits.length > 0) {
                new Chart(dailyVisitsCtx, {
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
                            legend: {
                                position: 'top',
                            }
                        },
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Waktu Kunjungan'
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Jumlah Kunjungan'
                                },
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
        });
    </script>
@endsection

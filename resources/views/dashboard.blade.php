@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="row">
    <!-- Card 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Revenue</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$2,500</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Orders</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">250</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-truck-moving fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Selamat Datang -->
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body text-center">
                <h4 class="text-gray-800">Selamat Datang di Dashboard Pendeteksi Emosi!</h4>
                <p class="text-gray-600">Emosi adalah bahasa hati kita. Pahami setiap perasaan yang muncul, dan gunakan wawasan ini untuk menjalani hidup dengan lebih bijak.</p>
            </div>
        </div>
    </div>

    <!-- Card untuk Dropdown, Chart, dan Catatan Aktivitas -->
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row">
                    <!-- Dropdown Tanggal -->
                    <div class="col-md-4 mb-4">
                        <div class="form-group">
                            <label for="date-range" class="text-gray-800">Pilih Tanggal:</label>
                            <select class="form-control" id="date-range">
                                <option value="last-week">Minggu Lalu</option>
                                <option value="last-month">Bulan Lalu</option>
                                <option value="this-month">Bulan Ini</option>
                                <option value="last-3-months">3 Bulan Terakhir</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Catatan Aktivitas (Berada di samping chart) -->
                <div class="row mt-4">
                    
                    <!-- Chart (Diagram Batang) -->
                    <div class="col-md-8 mb-4">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-light shadow">
                            <div class="card-header">
                                <strong>Catatan Aktivitas</strong>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <strong>09:00 AM:</strong> Pemantauan Emosi Seseorang
                                    </li>
                                    <li class="list-group-item">
                                        <strong>12:00 PM:</strong> Analisis Sentimen
                                    </li>
                                    <li class="list-group-item">
                                        <strong>03:00 PM:</strong> Pembaruan Data Emosi
                                    </li>
                                    <li class="list-group-item">
                                        <strong>06:00 PM:</strong> Laporan Mingguan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

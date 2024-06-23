@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Getting started -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3 class="text-center">Welcome</h3>
                    <h5 class="text-bold text-center">Welcome to the Apex HMIS</h5>
                    <div class="text-center">
                        <span class="text-xs font-weight-bold text-primary text-uppercase mb-1">Click the get started Button</span>
                    </div>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-calendar text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.patients.create') }}" class="small-box-footer">Get Started <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>


        <!-- Available Doctors -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 class="text-center">{{$totalDoctors}}</h3>
                    <h5 class="text-bold text-center">Doctors</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-user-tie text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.doctors.index') }}" class="small-box-footer">See Doctors <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Available Nurses -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-orange">
                <div class="inner">
                    <h3 class="text-center">{{$nurses}}</h3>
                    <h5 class="text-bold text-center">Nurses</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-user-nurse text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.nurses.index') }}" class="small-box-footer">See Nurses <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>



        <!-- Available Beds -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 class="text-center">{{$beds}}</h3>
                    <h5 class="text-bold text-center">Beds</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-bed text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.beds.index') }}" class="small-box-footer">See Beds <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!--second row-->
    <div class="row">
        <!-- Available Departments -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-purple">
                <div class="inner">
                    <h3 class="text-center">{{$departments}}</h3>
                    <h5 class="text-bold text-center">Departments</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-building text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.departments.index') }}" class="small-box-footer">See Departments <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>


        <!-- Available Laboratories -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-cyan ">
                <div class="inner">
                    <h3 class="text-center">{{$laboratories}}</h3>
                    <h5 class="text-bold text-center">Available Laboratories</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-vial text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.laboratories.index') }}" class="small-box-footer">View Laboratories <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Available Patients -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-black">
                <div class="inner">
                    <h3 class="text-center">{{$patients}}</h3>
                    <h5 class="text-bold text-center">Available Patients</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-procedures text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.patients.index') }}" class="small-box-footer">View Patients <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Available Radiologists -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-pink">
                <div class="inner">
                    <h3 class="text-center">{{$radiologists}}</h3>
                    <h5 class="text-bold text-center">Available Radiologists</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-x-ray text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.radiologists.index') }}" class="small-box-footer">View Radiologists <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>


        <!--third row-->
    <div class="row">
        <!-- Available Technicians -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3 class="text-center">{{$technicians}}</h3>
                    <h5 class="text-bold text-center">Available Technicians</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-tools text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.technicians.index') }}" class="small-box-footer">View Technicians <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Available Theatres -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-navy">
                <div class="inner">
                    <h3 class="text-center">{{$theatres}}</h3>
                    <h5 class="text-bold text-center">Available Theatres</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-theater-masks text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.theatres.index') }}" class="small-box-footer">View Theatres <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>


        <!-- Available Wards -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-lime">
                <div class="inner">
                    <h3 class="text-center">{{$wards}}</h3>
                    <h5 class="text-bold text-center">Available Wards</h5>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-hospital-alt text-white" style="font-size: 35px;"></i>
                </div>
                <a href="{{ route('admin.wards.index') }}" class="small-box-footer text-black">View Wards <i class="fas fa-arrow-circle-right text-black"></i></a>
            </div>
        </div>


        <!-- Charts Row Container -->
    <div class="row mt-3">
        <!-- Bar Chart -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div id="graph-container">
                        <canvas id="barChart" width="600" height="265"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div id="pieChart1-container">
                        <canvas id="pieChart1" width="600" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Nurses', 'Doctors', 'Beds', 'Departments', 'Laboratories', 'Patients', 'Physicians', 'Radiologists', 'Technicians', 'Theatres', 'Wards'],
                datasets: [{
                    label: 'Count',
                    data: [{{$nurses}}, {{$totalDoctors}}, {{$beds}}, {{$departments}}, {{$laboratories}}, {{$patients}}, {{$physicians}}, {{$radiologists}}, {{$technicians}}, {{$theatres}}, {{$wards}}],
                    backgroundColor: ['#17a2b8', '#007bff', '#ffc107', '#dc3545', '#e83e8c', '#6f42c1', '#343a40', '#5bc0de', '#28a745', '#007bff', '#ff00ff']
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctxP = document.getElementById('pieChart1').getContext('2d');
        var pieChart1 = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ['Nurses', 'Doctors', 'Beds', 'Departments', 'Laboratories'],
                datasets: [{
                    data: [{{$nurses}}, {{$totalDoctors}}, {{$beds}}, {{$departments}}, {{$laboratories}}],
                    backgroundColor: ['#17a2b8', '#007bff', '#ffc107', '#dc3545', '#e83e8c']
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Content Row -->
@endsection





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
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <span>Welcome to the Apx HMIS</span>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Click the get started Button</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="{{ route('admin.patients.create') }}" class="arrow-link" style="text-decoration:none;color: #0c84ff;font-size: 18px;">Get Started</a></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Availabe Doctors -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <span>Available doctors</span>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        {{$totalDoctors}}</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="{{ route('admin.doctors.index') }}" class="arrow-link" style="text-decoration:none;color: #0c84ff;font-size: 18px;">View Doctors</a></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>

            <!-- Total Department Card -->
            <div class="col-md-3">
                <div class="card bg-danger mb-3 text-white" style="max-width: 500px;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $departments }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Departm</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.departments.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Department</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Earnings (Annual)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--second row-->
<div class="row">
<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pending Requests</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- other cards-->

</div>

<!--third row-->
<div class="row">
 <!-- cards-->


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
    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e3e6f0;
            border-radius: 0.35rem;
        }

        .card > hr {
            margin-right: 0;
            margin-left: 0;
        }

        .card > .list-group {
            border-top: inherit;
            border-bottom: inherit;
        }

        .card > .list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: calc(0.35rem - 1px);
            border-top-right-radius: calc(0.35rem - 1px);
        }

        .card > .list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: calc(0.35rem - 1px);
            border-bottom-left-radius: calc(0.35rem - 1px);
        }

        .card > .card-header + .list-group,
        .card > .list-group + .card-footer {
            border-top: 0;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }

        .card-title {
            margin-bottom: 0.75rem;
        }

        .card-subtitle {
            margin-top: -0.375rem;
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        .card-link:hover {
            text-decoration: none;
        }

        .card-link + .card-link {
            margin-left: 1.25rem;
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
        }

        .card-header:first-child {
            border-radius: calc(0.35rem - 1px) calc(0.35rem - 1px) 0 0;
        }

        .card-footer {
            padding: 0.75rem 1.25rem;
            background-color: #f8f9fc;
            border-top: 1px solid #e3e6f0;
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(0.35rem - 1px) calc(0.35rem - 1px);
        }

        .card-header-tabs {
            margin-right: -0.625rem;
            margin-bottom: -0.75rem;
            margin-left: -0.625rem;
            border-bottom: 0;
        }

        .card-header-pills {
            margin-right: -0.625rem;
            margin-left: -0.625rem;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem;
            border-radius: calc(0.35rem - 1px);
        }

        .card-img,
        .card-img-top,
        .card-img-bottom {
            flex-shrink: 0;
            width: 100%;
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(0.35rem - 1px);
            border-top-right-radius: calc(0.35rem - 1px);
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: calc(0.35rem - 1px);
            border-bottom-left-radius: calc(0.35rem - 1px);
        }

        .card-deck .card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-deck {
                display: flex;
                flex-flow: row wrap;
                margin-right: -0.75rem;
                margin-left: -0.75rem;
            }

            .card-deck .card {
                flex: 1 0 0%;
                margin-right: 0.75rem;
                margin-bottom: 0;
                margin-left: 0.75rem;
            }
        }

        .card-group > .card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap;
            }

            .card-group > .card {
                flex: 1 0 0%;
                margin-bottom: 0;
            }

            .card-group > .card + .card {
                margin-left: 0;
                border-left: 0;
            }

            .card-group > .card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .card-group > .card:not(:last-child) .card-img-top,
            .card-group > .card:not(:last-child) .card-header {
                border-top-right-radius: 0;
            }

            .card-group > .card:not(:last-child) .card-img-bottom,
            .card-group > .card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0;
            }

            .card-group > .card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .card-group > .card:not(:first-child) .card-img-top,
            .card-group > .card:not(:first-child) .card-header {
                border-top-left-radius: 0;
            }

            .card-group > .card:not(:first-child) .card-img-bottom,
            .card-group > .card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0;
            }
        }

        .card-columns .card {
            margin-bottom: 0.75rem;
        }

        @media (min-width: 576px) {
            .card-columns {
                -moz-column-count: 3;
                column-count: 3;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1;
            }

            .card-columns .card {
                display: inline-block;
                width: 100%;
            }
        }

        .border-left-primary {
            border-left: 0.25rem solid #4e73df !important;
            background-color: #E6F0FF;
        }
        .border-left-success{
            border-left: 0.25rem solid  #FF0000 !important;
            background-color: #FFE6E6;
        }
        .border-left-warning{
            border-left: 0.25rem solid #ffc107 !important;
        }
        .border-left-info{
            border-left: 0.25rem solid #0dcaf0 !important;
        }
        .shadow {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15) !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .py-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .text-primary {
            color: #4e73df !important;
        }

        .text-gray-800 {
            color: #5a5c69 !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .font-weight-bold {
            font-weight: 700 !important;
        }

        .text-xs {
            font-size:12px !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters > .col,
        .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .align-items-center {
            align-items: center !important;
        }

        .mr-2 {
            margin-right: 0.5rem !important;
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: none;
        }

    </style>
<!-- Content Row -->
@endsection



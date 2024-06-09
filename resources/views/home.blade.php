<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-light" style="padding: 20px; border-radius: 50px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-left text-white text-success" style="font-size: 24px;">Dashboard</h1>
            </div>
            <div class="col-md-6 text-center">
                <div id="eat-time" class="text-success mb-4" style="font-size: 18px;"></div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card bg-light mb-3" style="max-width: 500px;">
                    <div class="card-body">
                        <h5 class="card-title d-flex flex-column justify-content-center align-items-center">
                            <p class="card-text" style="font-size:20px;">Welcome to Our Hospital Management System inpatient</p>
                        </h5>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.patients.create') }}" class="arrow-link" style="text-decoration:none;color: #0c84ff;font-size: 18px;">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Total Nurses Card -->
            <div class="col-md-3">
                <div class="card card-counter info">
                    <div class="card-body text-center">
                        <i class="fas fa-user-nurse fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$nurses}}</span>
                        <span class="count-name">Available Nurses</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.nurses.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Nurses</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Doctors Card -->
            <div class="col-md-3">
                <div class="card card-counter primary">
                    <div class="card-body text-center">
                        <i class="fas fa-user-md fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$totalDoctors}}</span>
                        <span class="count-name">Our Doctors</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.doctors.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Doctors</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Beds Card -->
            <div class="col-md-3">
                <div class="card card-counter warning">
                    <div class="card-body text-center">
                        <i class="fas fa-bed fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$beds}}</span>
                        <span class="count-name">Available Beds</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.beds.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Beds</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Departments Card -->
            <div class="col-md-3">
                <div class="card card-counter danger">
                    <div class="card-body text-center">
                        <i class="fas fa-building fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$departments}}</span>
                        <span class="count-name">Available Departments</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.departments.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Departments</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Laboratories Card -->
            <div class="col-md-3">
                <div class="card card-counter pink">
                    <div class="card-body text-center">
                        <i class="fas fa-vial fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$laboratories}}</span>
                        <span class="count-name">Available Laboratories</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.laboratories.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Laboratories</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Patients Card -->
            <div class="col-md-3">
                <div class="card card-counter purple">
                    <div class="card-body text-center">
                        <i class="fas fa-procedures fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$patients}}</span>
                        <span class="count-name">Available Patients</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.patients.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Patients</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Physicians Card -->
            <div class="col-md-3">
                <div class="card card-counter dark">
                    <div class="card-body text-center">
                        <i class="fas fa-user-md fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$physicians}}</span>
                        <span class="count-name">Available Physicians</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.physicians.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Physicians</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Radiologists Card -->
            <div class="col-md-3">
                <div class="card card-counter lightblue">
                    <div class="card-body text-center">
                        <i class="fas fa-x-ray fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$radiologists}}</span>
                        <span class="count-name">Available Radiologists</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.departments.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Radiologists</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Technicians Card -->
            <div class="col-md-3">
                <div class="card card-counter gradient-green">
                    <div class="card-body text-center">
                        <i class="fas fa-tools fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$technicians}}</span>
                        <span class="count-name">Available Technicians</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.technicians.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Technicians</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Theatres Card -->
            <div class="col-md-3">
                <div class="card card-counter primary">
                    <div class="card-body text-center">
                        <i class="fas fa-theater-masks fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$theatres}}</span>
                        <span class="count-name">Available Theatres</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.theatres.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Theatres</strong>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Wards Card -->
            <div class="col-md-3">
                <div class="card card-counter fuchsia">
                    <div class="card-body text-center">
                        <i class="fas fa-hospital-alt fa-2x"></i>
                        <span class="count-numbers d-block my-2">{{$wards}}</span>
                        <span class="count-name">Available Wards</span>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.wards.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Wards</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row Container -->
        <div class="row mt-4">
            <!-- Bar Chart -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div id="graph-container">
                            <canvas id="barChart" width="600" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div id="pieChart1-container">
                            <canvas id="pieChart1" width="400" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function displayEATTime() {
            var now = new Date();
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            var day = days[now.getDay()];
            var month = months[now.getMonth()];
            var date = now.getDate();
            var year = now.getFullYear();

            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            var eatTime = day + ', ' + month + ' ' + date + ', ' + year + ' - ' + hours + ':' + minutes + ':' + seconds;
            document.getElementById('eat-time').innerText = eatTime;
        }
        setInterval(displayEATTime, 1000);

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
                labels: ['Nurses', 'Doctors', 'Beds', 'Departments', 'Laboratories', 'Patients', 'Physicians', 'Radiologists', 'Technicians', 'Theatres', 'Wards'],
                datasets: [{
                    data: [{{$nurses}}, {{$totalDoctors}}, {{$beds}}, {{$departments}}, {{$laboratories}}, {{$patients}}, {{$physicians}}, {{$radiologists}}, {{$technicians}}, {{$theatres}}, {{$wards}}],
                    backgroundColor: ['#17a2b8', '#007bff', '#ffc107', '#dc3545', '#e83e8c', '#6f42c1', '#343a40', '#5bc0de', '#28a745', '#007bff', '#ff00ff']
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
@endsection

<style>
    .card-counter {
        box-shadow: 2px 2px 10px #DADADA;
        margin: 5px;
        padding: 20px 10px;
        background-color: #fff;
        height: 170px;
        border-radius: 5px;
        transition: .3s linear all;
        color: #FFF;
    }

    .card-counter:hover {
        box-shadow: 4px 4px 20px #DADADA;
        transition: .3s linear all;
    }

    .card-counter.info { background-color: #17a2b8; }
    .card-counter.primary { background-color: #007bff; }
    .card-counter.warning { background-color: #ffc107; }
    .card-counter.danger { background-color: #dc3545; }
    .card-counter.pink { background-color: #e83e8c; }
    .card-counter.purple { background-color: #6f42c1; }
    .card-counter.dark { background-color: #343a40; }
    .card-counter.lightblue { background-color: #5bc0de; }
    .card-counter.gradient-green { background: linear-gradient(to right, #28a745, #218838); }
    .card-counter.fuchsia { background-color: #ff00ff; }

    .card-counter i {
        font-size: 5em;
        opacity: 0.2;
    }

    .card-counter .count-numbers {
        position: absolute;
        right: 35px;
        top: 20px;
        font-size: 32px;
        display: block;
    }

    .card-counter .count-name {
        position: absolute;
        right: 35px;
        top: 65px;
        font-style: italic;
        text-transform: capitalize;
        opacity: 0.9;
        display: block;
        font-size: 18px;
    }
</style>

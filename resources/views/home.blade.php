@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-left text-white text-success" style="font-size: 24px;">Dashboard</h1>
            </div>
            <div class="col-md-6 text-centre">
                <div id="eat-time" class="text-success mb-4" style="font-size: 18px;"></div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Total Nurses Card -->
            <div class="col-md-3">
                <div class="card bg-info mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $nurses }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Nurses</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.nurses.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Nurses</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Doctors Card -->
            <div class="col-md-3">
                <div class="card bg-success mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $totalDoctors }}</h2>
                            <p class="card-text" style="font-size: 16px;">Our Doctors</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.doctors.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Doctors</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Beds Card -->
            <div class="col-md-3">
                <div class="card bg-warning mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $beds }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Beds</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.beds.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Beds</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Department Card -->
            <div class="col-md-3">
                <div class="card bg-danger mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $departments }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Departments</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.departments.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Department</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Laboratory Card -->
            <div class="col-md-3">
                <div class="card bg-pink text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $laboratories }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Laboratories</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.laboratories.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Laboratories</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Patient Card -->
            <div class="col-md-3">
                <div class="card bg-purple mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $patients }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Patients</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.patients.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Patients</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Physician Card -->
            <div class="col-md-3">
                <div class="card bg-dark mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $physicians }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Physicians</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.physicians.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Physicians</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Radiologist Card -->
            <div class="col-md-3">
                <div class="card bg-lightblue mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $radiologists }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Radiologists</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.departments.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Radiologist</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Technician Card -->
            <div class="col-md-3">
                <div class="card bg-gradient-green mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $technicians }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Technicians</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.technicians.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Technicians</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Theatre Card -->
            <div class="col-md-3">
                <div class="card bg-primary mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $theatres }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Theatres</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.theatres.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Theatres</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Ward Card -->
            <div class="col-md-3">
                <div class="card bg-fuchsia mb-3 text-white" style="max-width: 18rem;">
                    <div class="card-header d-flex flex-column justify-content-center align-items-center"> <!-- Centered header text -->
                        <div class="text-center mb-3">
                            <h2 class="card-title" style="font-size: 20px;">{{ $wards }}</h2>
                            <p class="card-text" style="font-size: 16px;">Available Wards</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('admin.wards.index') }}" class="arrow-link" style="text-decoration: none; color: white; font-size: 18px;">
                            <strong>View Wards</strong> <span style="font-size: 20px;">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Function to display EAT time with seconds counting
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

            // Pad single digit minutes and seconds with leading zero
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            // Display time in EAT format with seconds counting
            document.getElementById('eat-time').innerHTML = day + ', ' + month + ' ' + date + ', ' + year + ' ' + hours + ':' + minutes + ':' + seconds;

            // Update time every second
            setTimeout(displayEATTime, 1000);
        }

        // Call the function to start displaying EAT time
        displayEATTime();
    </script>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apex HMIS</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-image: url('Uploaded_Images/copy-space-stethoscope-pills.jpg'); /* Add background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Mulish', sans-serif;
            color: #f8f9fa;
        }
        .btn-primary-custom {
            background-color: #28a745;
            border-color: #28a745;
            color: #fff;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary-custom:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-secondary-custom {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: #fff;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-secondary-custom:hover {
            background-color: #138496;
            border-color: #117a8b;
        }
        .card-custom {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 0.75rem;
            box-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.2);
            padding: 2rem;
            margin-bottom: 1.5rem;
        }
        .card-custom-blue {
            background-color: rgba(173, 216, 230, 0.9); /* Light Blue */
        }
        .card-custom-purple {
            background-color: rgba(221, 160, 221, 0.9); /* Light Purple */
        }
        .text-custom {
            color: #343a40;
            font-size: 20px;
        }
        .text-primary {
            color: #007bff;
            font-size: 24px;
            font-weight: 600;
        }
        .text-secondary {
            color: #6c757d;
            font-size: 18px;
        }
        .text-highlight {
            color: #e5b20a;
            font-size: 36px;
            font-weight: 600;
        }
        h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
            font-size: 48px;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="text-left">
        <h1 class="text-highlight">Welcome to Apex HMIS</h1>
        <p class="mt-4 text-custom">We are delighted to have you here.<br> Our platform offers a range of features designed to make your healthcare
            <br>management experience enjoyable and efficient.</p>
        <p class="mt-2 text-secondary">Whether you are looking to manage patient records, schedule appointments, <br>or streamline administrative tasks, Apex HMIS has the solutions you need.</p>

        <div class="row mt-5">
            <div class="col-12 col-md-4 mb-4">
                <div class="card card-custom card-custom-blue text-center">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Features</h5>
                        <p class="card-text text-custom">Discover all the amazing features we offer.</p>
                        <a href="{{ url('/features') }}" class="btn btn-primary-custom">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card card-custom card-custom-purple text-center">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Login</h5>
                        <p class="card-text text-custom">Access your account and start managing your healthcare needs.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary-custom">Staff Log in</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card card-custom card-custom-blue text-center">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Register</h5>
                        <p class="card-text text-custom">Add a new member of staff to your community.</p>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary-custom">Register</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

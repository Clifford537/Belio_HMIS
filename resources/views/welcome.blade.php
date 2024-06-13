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
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="{{ asset('css/custom_fonts.css') }}" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        body {
            background-image: url('background_image.jpg'); /* Add background image */
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
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 0.75rem;
            box-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.2);
            padding: 2rem;
            margin-bottom: 1.5rem;
        }
        .text-custom {
            color: #343a40; 
            font-size: 24px;
        }
        .text-primary {
            color: #007bff; 
            font-size: 24px; 
        }
        .text-secondary {
            color: #6c757d; 
            font-size: 20px; 
        }
        .text-highlight {
            color: #28a745; 
            font-size: 36px;
        }
        h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); 
            font-size: 48px; 
        }
    </style>
</head>
<body>
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        @if (Route::has('login'))
            <div class="position-absolute top-0 end-0 p-3">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-secondary-custom">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-secondary-custom">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-secondary-custom ml-3">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="text-center">
            <h1 class="text-highlight">Welcome to Apex HMIS</h1>
            <p class="mt-4 text-custom">We are delighted to have you here. Our platform offers a range of features designed to make your healthcare management experience enjoyable and efficient.</p>
            <p class="mt-2 text-secondary">Whether you are looking to manage patient records, schedule appointments, or streamline administrative tasks, Apex HMIS has the solutions you need.</p>
            
            <div class="row mt-5">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card card-custom text-center">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Features</h5>
                            <p class="card-text text-custom">Discover all the amazing features we offer.</p>
                            <a href="{{ url('/features') }}" class="btn btn-primary-custom">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card card-custom text-center">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Login</h5>
                            <p class="card-text text-custom">Access your account and start managing your healthcare needs.</p>
                            <a href="{{ route('login') }}" class="btn btn-primary-custom">Log in</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card card-custom text-center">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Register</h5>
                            <p class="card-text text-custom">Create a new account and join our community.</p>
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

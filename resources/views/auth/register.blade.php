<x-laravel-ui-adminlte::adminlte-layout>
    <link href="{{ asset('css/custom_fonts.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <body class="hold-transition register-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="register-form">
                    <div class="title">Register a new membership</div>
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Full name" class="form-control @error('name') is-invalid @enderror" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control @error('email') is-invalid @enderror" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password_confirmation" placeholder="Retype password" class="form-control" required>
                            </div>
                            <div class="icheck-primary mt-3">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">I agree to the <a href="#">terms</a></label>
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Register">
                            </div>
                            <div class="text sign-up-text">Already have a membership? <a href="{{ route('login') }}">Login</a></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <img src="{{URL('Uploaded_Images/Apex HMIS Logo.png')}}" alt="Logo" class="img-fluid">
            </div>
        </div>
    </div>

    <style>
        /* Google Font Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #7d2ae8;
            padding: 30px;
        }

        .container {
            max-width: 850px;
            width: 100%;
            background: #fff;
            padding: 40px 30px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .register-form {
            width: 100%;
        }

        .register-form .title {
            font-size: 24px;
            font-weight: 500;
            color: #333;
            margin-bottom: 20px;
        }

        .register-form .input-boxes {
            margin-top: 20px;
        }

        .register-form .input-box {
            display: flex;
            align-items: center;
            height: 50px;
            width: 100%;
            margin: 10px 0;
            position: relative;
        }

        .register-form .input-box input {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            padding: 0 30px;
            font-size: 16px;
            font-weight: 500;
            border-bottom: 2px solid rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .register-form .input-box input:focus,
        .register-form .input-box input:valid {
            border-color: #7d2ae8;
        }

        .register-form .input-box i {
            position: absolute;
            color: #7d2ae8;
            font-size: 17px;
        }

        .register-form .button {
            color: #fff;
            margin-top: 30px;
        }

        .register-form .button input {
            color: #fff;
            background: #7d2ae8;
            border-radius: 6px;
            padding: 0;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .register-form .button input:hover {
            background: #5b13b9;
        }

        .register-form .sign-up-text {
            text-align: center;
            margin-top: 25px;
        }

        .register-form .sign-up-text a {
            text-decoration: none;
            color: #7d2ae8;
        }

        .register-form .sign-up-text a:hover {
            text-decoration: underline;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }
    </style>
    </body>
</x-laravel-ui-adminlte::adminlte-layout>

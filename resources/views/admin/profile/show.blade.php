@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <h4 class="text-center text-cyan m-4">My Profile Settings</h4>
        <div class="row justify-content-center">
            <!-- User Profile Update Section -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header text-center">
                        <h2>User Profile</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="profile_picture">Profile Picture</label>
                                <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Change Password Section -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Change Password</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update.password') }}">
                            @csrf

                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password" required>
                            </div>

                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirm New Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

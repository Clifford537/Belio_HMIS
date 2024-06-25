@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Logged-In Users</h2>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Last Login</th>
                <th>Duration</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @forelse($usersInfo as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['last_login'] }}</td>
                    <td>{{ $user['duration'] }}</td>
                    <td>
                        @if($user['is_active'])
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-warning">Inactive</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No logged-in users.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection

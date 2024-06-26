
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Audit Reports</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Event</th>
                <th>User</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($audits as $audit)
                <tr>
                    <td>{{ $audit->event }}</td>
                    <td>{{ $audit->user->name }}</td>
                    <td>{{ $audit->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $audits->links() }}
    </div>
@endsection

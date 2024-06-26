
@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="text-success text-center text-bold" style="text-transform: uppercase!important;">
                            SYSTEM AUDIT TRAILS
                        </h1>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <table id="audits-reports-table" class="table table-striped table-bordered" style="width: 100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Event</th>
                <th>User</th>
                <th>Date</th>
                <th>URL</th>
                <th>Device IP</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($audits as $audit)
                <tr>
                    <td>{{ $audit->id }}</td>

                    <td>
                            @if ($audit->event === 'created')
                                <span class="badge badge-success">Created</span>
                            @elseif ($audit->event === 'deleted')
                                <span class="badge badge-danger">Deleted</span>
                            @elseif ($audit->event === 'updated')
                                <span class="badge badge-warning">Updated</span>
                            @else
                                {{ $audit->event }}
                            @endif
                        </td>
                    <td>{{ $audit->user->name }}</td>
                    <td>{{ $audit->created_at }}</td>
                    <td>{{ $audit->url }}</td>
                    <td>{{ $audit->ip_address }}</td>
                    <td>
                        <a href="{{ route('audits.show', $audit->id) }}" class="btn btn-info">View Details</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @include('layouts.reports_css_js')
    <script>
        jQuery(document).ready(function($) {
            $('#audits-reports-table').DataTable({
                searching: true,
                paging: true,
                ordering: true,
                info: true,
                lengthMenu: [10, 25, 50, 100, 500, -1], // Customize the page length options
                dom: 'Bfrtip', // Add buttons to the top of the table
            });
        });
    </script>
@endsection

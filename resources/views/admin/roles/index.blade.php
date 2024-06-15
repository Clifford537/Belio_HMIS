@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Roles Management</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('admin.roles.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="rolesTable">
                    <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th width="280px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $key => $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('admin.roles.show', $role->id) }}">
                                    <i class="fas fa-eye"></i> <!-- Replace with the appropriate icon class -->
                                </a>

                                @can('role-edit')
                                    <a class="btn btn-primary" href="{{ route('admin.roles.edit', $role->id) }}">
                                        <i class="fas fa-edit"></i> <!-- Replace with the appropriate icon class -->
                                    </a>
                                @endcan

                                @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i> <!-- Replace with the appropriate icon class -->
                                    </button>
                                    {!! Form::close() !!}
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $data->render('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

    @include('layouts.reports_css_js')
    <script>
        jQuery(document).ready(function($) {
            $('#rolesTable').DataTable({
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



@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users Management</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right" href="{{ route('admin.users.create') }}">Add New</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid mb-3">
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="card">
            <div class="table table-striped table-bordered">
                <table class="table" id="userTable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Change Password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $key => $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $val)
                                        <label class="badge badge-dark">{{ $val }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                @if ($user->status == 0)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                            @can('user-edit')
                            <td>
                                <!-- Button to load change password prompt -->
                                <a class="btn btn-warning" href="{{ route('admin.users.changePasswordPrompt', $user->id) }}">
                                    <i class="fas fa-key"></i> Change Password
                                </a>
                            </td>
                            @endcan
                            <td>
                                <a class="btn btn-success" href="{{ route('admin.users.show', $user->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @can('user-edit')
                                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $user->id) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                @endcan
                                @can('user-delete')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    @include('layouts.reports_css_js')
    <script>
        var table;
        $(document).ready(function () {
            $.noConflict();
            table = $('#userTable').DataTable({
                searching: true,
                paging: true,
                ordering: true,
                info: true,
                lengthMenu: [10, 25, 50, 100, 500, -1],
                dom: 'Bfrtip',
                order: [],
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                ],
            });
        });
    </script>
@endsection

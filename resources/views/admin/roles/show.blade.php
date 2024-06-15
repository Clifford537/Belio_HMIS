@extends('admin.layouts.admin')

@section('content')
    @include('admin.layouts.navbar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h4 class="card-title float-left">View Role Details
                                    <a href="{{ route('admin.roles.index') }}" class="btn btn-primary me-2 float-end">Go Back to the Roles List</a>
                                </h4>
                            </div>
                            <hr>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="card-body">
                                            <div class="lead">
                                                <strong>Name:</strong>
                                                {{ $role->name }}
                                            </div>
                                            <div class="lead">
                                                <strong>Permissions:</strong>
                                                @if(!empty($rolePermissions))
                                                    @foreach($rolePermissions as $permission)
                                                        <label class="badge badge-success">{{ $permission->name }}</label>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="card-title float-left">Creating a new Role</h4>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="{{ route('admin.roles.index') }}" class="btn btn-primary float-right">Go Back to the Roles List</a>
                            </div>
                        </div>
                        <hr>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {!! Form::open(array('route' => 'admin.roles.store','method'=>'POST')) !!}
                        <div class="form-group">
                            <strong>Name:</strong>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Permission:</strong>
                            <br/>
                            <div class="row">
                                @php
                                    $columnCount = 4; // Set the number of columns
                                    $permissionsCount = count($permission);
                                    $permissionsPerColumn = ceil($permissionsCount / $columnCount);
                                @endphp

                                @for ($i = 0; $i < $columnCount; $i++)
                                    <div class="col-md-3">
                                        @for ($j = $i * $permissionsPerColumn; $j < min(($i + 1) * $permissionsPerColumn, $permissionsCount); $j++)
                                            <label>{{ Form::checkbox('permission[]', $permission[$j]->id, false, array('class' => 'name')) }}
                                                {{ $permission[$j]->name }}</label>
                                            <br/>
                                        @endfor
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Create Beds
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'admin.beds.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.beds.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.beds.index') }}" class="btn btn-danger"> Cancel </a>
                <a href="{{ route('admin.wards.create') }}" class="btn btn-default bg-gradient-info"> Previous </a>
                <a href="{{ route('admin.insurances.create') }}" class="btn btn-default bg-warning">Next</a>
                <a href="{{ route('admin.patients.create') }}" class="btn btn-default bg-gradient-success"> Back to Patients </a>

            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection

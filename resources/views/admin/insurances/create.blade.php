@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Create Insurances
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'admin.insurances.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.insurances.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.insurances.index') }}" class="btn btn-default"> Cancel </a>
                <a href="{{ route('admin.billings.create') }}" class="btn btn-default bg-primary"> Next </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Patients</h1>
                    <div>
                        @include('flash::message')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @include('adminlte-templates::common.errors')

        <div class="card">
            {!! Form::open(['route' => 'admin.patients.store', 'id' => 'patientForm']) !!}

            <div class="card-body">
                <div class="row">
                    @include('admin.patients.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.patients.index') }}" class="btn btn-default">Cancel</a>
                <a href="{{ route('admin.patients.create') }}" class="btn btn-default bg-primary">Reset</a>
                <a href="{{ route('admin.insurances.create') }}" class="btn btn-default bg-primary text-white" id="proceed">Outpatient</a>
                <a href="{{ route('admin.wards.create') }}" class="btn btn-default bg-primary text-white" id="proceedto">Inpatient</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#proceed, #proceedto').on('click', function(event) {
                let isValid = true;
                $('form [required]').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });

                if (!isValid) {
                    event.preventDefault();
                    alert('Please fill out all required fields.');
                }
            });
        });
    </script>
@endsection

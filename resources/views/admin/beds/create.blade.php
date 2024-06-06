@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Create Beds
                    </h1>
                    <p>@include('flash::message')</p>
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
                <a href="{{ route('admin.insurances.create') }}" class="btn btn-default bg-warning"  id="proceed"  >Next</a>
                <a href="{{ route('admin.patients.create') }}" class="btn btn-default bg-gradient-success"> Back to Patients </a>

            </div>

            {!! Form::close() !!}

        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#proceed').on('click', function(event) {
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

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Insurances</h1>
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
                <a href="{{ route('admin.insurances.index') }}" class="btn btn-default btn-danger">Cancel</a>
                <a href="{{ route('admin.wards.create') }}" class="btn btn-default bg-gradient-info">Previous</a>
                <a href="{{ route('admin.billings.create') }}" class="btn btn-default bg-warning" id="nextButton">Next</a>
                <a href="{{ route('admin.patients.create') }}" class="btn btn-default bg-gradient-success">Back to Patients</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

    @push('page_scripts')
        <!-- Include jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Include Bootstrap Datepicker JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#coverage_start_date').datepicker({
                    format: 'mm/dd/yyyy',
                    autoclose: true
                });
                $('#coverage_end_date').datepicker({
                    format: 'mm/dd/yyyy',
                    autoclose: true
                });

                $('#nextButton').on('click', function(event) {
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
    @endpush
@endsection

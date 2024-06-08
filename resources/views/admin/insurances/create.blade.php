@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Insurances</h1>
                   <P> @include('flash::message')</P>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#coverage_start_date", {
            dateFormat: "Y-m-d",
            minDate: "today",
            onClose: function(selectedDates) {
                flatpickr("#coverage_end_date", {
                    dateFormat: "Y-m-d",
                    minDate: selectedDates[0] || "today",
                });
            }
        });

        flatpickr("#coverage_end_date", {
            dateFormat: "Y-m-d",
            minDate: "today"
        });
    });

    document.getElementById('insurance_company').addEventListener('input', function() {
        const insuranceCompanyInput = this;
        const insuranceCompanyError = document.getElementById('insuranceCompanyError');
        let value = insuranceCompanyInput.value.trim();

        // Remove any characters that are not letters or spaces
        value = value.replace(/[^A-Za-z\s]/g, '');

        insuranceCompanyInput.value = value;

        // Show error message if input contains invalid characters
        if (value !== insuranceCompanyInput.value) {
            insuranceCompanyError.style.display = 'block';
        } else {
            insuranceCompanyError.style.display = 'none';
        }
    })
</script>
@endpush
@endsection

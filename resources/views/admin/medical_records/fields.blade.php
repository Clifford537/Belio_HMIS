<!-- Visit Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    {!! Form::text('visit_date', null, ['class' => 'form-control date', 'placeholder' => 'Select Visit Date']) !!}
</div>

<!-- Medical History Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medical_history', 'Medical History:') !!}
    {!! Form::text('medical_history', null, ['class' => 'form-control', 'maxlength' => 600, 'placeholder' => 'Enter Medical History']) !!}
</div>

<!-- Diagnoses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diagnoses', 'Diagnoses:') !!}
    {!! Form::text('diagnoses', null, ['class' => 'form-control', 'maxlength' => 600, 'placeholder' => 'Enter Diagnoses']) !!}
</div>

<!-- Treatments Field -->
<div class="form-group col-sm-6">
    {!! Form::label('treatments', 'Treatments:') !!}
    {!! Form::text('treatments', null, ['class' => 'form-control', 'maxlength' => 600, 'placeholder' => 'Enter Treatments']) !!}
</div>

<!-- Lab Results Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_results', 'Lab Results:') !!}
    {!! Form::text('lab_results', null, ['class' => 'form-control', 'maxlength' => 600, 'placeholder' => 'Enter Lab Results']) !!}
</div>

<!-- Imaging Studies Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imaging_studies', 'Imaging Studies:') !!}
    {!! Form::text('imaging_studies', null, ['class' => 'form-control', 'maxlength' => 600, 'placeholder' => 'Enter Imaging Studies']) !!}
</div>

<!-- Progress Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('progress_notes', 'Progress Notes:') !!}
    {!! Form::text('progress_notes', null, ['class' => 'form-control', 'maxlength' => 600, 'placeholder' => 'Enter Progress Notes']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient:') !!}
    {!! Form::select('patient_id', $patients->pluck('first_name', 'id')->prepend('Select Patient', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nurse Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nurse_id', 'Nurse:') !!}
    {!! Form::select('nurse_id', $nurses->pluck('first_name', 'id')->prepend('Select Nurse', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor:') !!}
    {!! Form::select('doctor_id', $doctors->pluck('first_name', 'id')->prepend('Select Doctor', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

@push('page_scripts')
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        $(document).ready(function () {
            $('.date').flatpickr({
                dateFormat: "Y-m-d",
                minDate: "today"
            });
        });
    </script>
@endpush

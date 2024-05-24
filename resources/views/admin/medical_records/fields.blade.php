<!-- Visit Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    {!! Form::text('visit_date', null, ['class' => 'form-control','id'=>'visit_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#visit_date').datepicker()
    </script>
@endpush

<!-- Medical History Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medical_history', 'Medical History:') !!}
    {!! Form::text('medical_history', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Diagnoses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diagnoses', 'Diagnoses:') !!}
    {!! Form::text('diagnoses', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Treatments Field -->
<div class="form-group col-sm-6">
    {!! Form::label('treatments', 'Treatments:') !!}
    {!! Form::text('treatments', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Lab Results Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_results', 'Lab Results:') !!}
    {!! Form::text('lab_results', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Imaging Studies Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imaging_studies', 'Imaging Studies:') !!}
    {!! Form::text('imaging_studies', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Progress Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('progress_notes', 'Progress Notes:') !!}
    {!! Form::text('progress_notes', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient:') !!}
    {!! Form::select('patient_id', $patients->mapWithKeys(function ($patient) {
        return [$patient->id => $patient->first_name . ' ' . $patient->surname . ' ' . $patient->other_names];
    })->prepend('Select Patient', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nurse Id Field -->
<div class="form-group col-sm-6">
{!! Form::label('nurse_id', 'Nurse:') !!}
{!! Form::select('nurse_id', $nurses->mapWithKeys(function ($nurses) {
    return [$nurses->id => $nurses->first_name . ' ' . $nurses->surname . ' ' . $nurses->other_names];
})->prepend('Select nurse', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor:') !!}
    {!! Form::select('Doctor_id', $doctors->mapWithKeys(function ($doctors) {
        return [$doctors->id => $doctors->first_name . ' ' . $doctors->surname . ' ' . $doctors->other_names];
    })->prepend('Select Doctor', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

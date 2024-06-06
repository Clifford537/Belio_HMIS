<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient:') !!}
    {!! Form::select('patient_id', $patients->mapWithKeys(function ($patient) {
        return [$patient->id => $patient->first_name . ' ' . $patient->surname . ' ' . $patient->other_names];
    })->prepend('Select Patient', ''), null, ['class' => 'form-control', 'required', 'placeholder' => 'Select Patient']) !!}
</div>

<!-- Admission Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_date', 'Admission Date:') !!}
    {!! Form::text('admission_date', null, ['class' => 'form-control', 'id' => 'admission_date', 'placeholder' => 'Select Admission Date']) !!}
</div>

@push('page_scripts')
    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr('#admission_date', {
            dateFormat: "Y-m-d",
            minDate: "today"
        });
    </script>
@endpush

<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor:') !!}
    {!! Form::select('doctor_id', $doctors->mapWithKeys(function($doctor){
        return [$doctor->id => $doctor->doctor_first_name .' '. $doctor->surname .' ' . $doctor->other_names];
     })->prepend('Select Doctor',''), null, ['class' => 'form-control', 'placeholder' => 'Select Doctor']) !!}
</div>

<!-- Reason For Admission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reason_for_admission', 'Reason For Admission:') !!}
    {!! Form::text('reason_for_admission', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Reason For Admission']) !!}
</div>

<!-- Discharge Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discharge_status', 'Discharge Status:') !!}
    {!! Form::text('discharge_status', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Discharge Status']) !!}
</div>

<!-- Admission Types Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_types_id', 'Admission Types:') !!}
    {!! Form::select('admission_types_id', $admission_types->pluck('type', 'id')->prepend('Select Admission Type', ''), null, ['class' => 'form-control', 'required', 'placeholder' => 'Select Admission Type']) !!}
</div>

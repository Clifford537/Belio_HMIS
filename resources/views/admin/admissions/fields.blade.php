<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient:') !!}
    {!! Form::select('patient_id', $patients->mapWithKeys(function ($patient) {
        return [$patient->id => $patient->first_name . ' ' . $patient->surname . ' ' . $patient->other_names];
    })->prepend('Select Patient', ''), null, ['class' => 'form-control', 'required']) !!}
</div>


<!-- Admission Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_date', 'Admission Date:') !!}
    {!! Form::text('admission_date', null, ['class' => 'form-control','id'=>'admission_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#admission_date').datepicker()
    </script>
@endpush

<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor:') !!}
    {!! Form::Select('doctor_id', $doctors->mapWithKeys(function($doctor){
        return[$doctor->id => $doctor->doctor_first_name .' '. $doctor->surname .' ' . $doctor->other_names];
     }) ->prepend('Select Doctor',''), null, ['class' => 'form-control']) !!}
</div>


<!-- Reason For Admission Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reason_for_admission', 'Reason For Admission:') !!}
    {!! Form::text('reason_for_admission', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Discharge Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('discharge_status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('discharge_status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('discharge_status', 'Discharge Status', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Admission Types Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_types_id', 'Admission Types:') !!}
    {!! Form::select('admission_types_id', $admission_types->pluck('type', 'id')->prepend('Select Admission Type', ''), null, ['class' => 'form-control', 'required']) !!} 

</div>
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
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#admission_date').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            });
        });
    </script>
@endpush


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
    {!! Form::label('discharge_status', 'Discharge Status:') !!}
    {!! Form::text('discharge_status', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Admission Types Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_types_id', 'Admission Types:') !!}
    {!! Form::select('admission_types_id', $admission_types->pluck('type', 'id')->prepend('Select Admission Type', ''), null, ['class' => 'form-control', 'required']) !!}

</div>

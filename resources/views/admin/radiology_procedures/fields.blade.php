<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::select('patient_id', $patient->mapWithKeys(function ($patient) {
        return [$patient->id => $patient->first_name . ' ' . $patient->surname . ' ' . $patient->other_names];
    })->prepend('Select Patient', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Procedure Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_code', 'Procedure Code:') !!}
    {!! Form::text('procedure_code', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Procedure Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_date', 'Procedure Date:') !!}
    {!! Form::text('procedure_date', null, ['class' => 'form-control','id'=>'procedure_date']) !!}
</div>

@push('page_scripts')
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#procedure_date').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            });
        });
    </script>
@endpush

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    {!! Form::select('doctor_id', $doctor->mapWithKeys(function ($doctor) {
        return [$doctor->id => $doctor->first_name . ' ' . $doctor->surname . ' '];
    })->prepend('Select Doctor', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Radiologist Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('radiologist_name', 'Radiologist:') !!}
    {!! Form::select('$radiologist_name', $radiologist->pluck('name', 'id')->prepend('Select Radiologist', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Procedure Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_notes', 'Procedure Notes:') !!}
    {!! Form::text('procedure_notes', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Procedure Results Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_results', 'Procedure Results:') !!}
    {!! Form::text('procedure_results', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Procedure Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_cost', 'Procedure Cost:') !!}
    {!! Form::number('procedure_cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Insurance Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurance_id', 'Insurance:') !!}
    {!! Form::select('insurance_id', $insurance->pluck('id', 'id')->prepend('Select Insurance', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Procedure Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_location', 'Procedure Location:') !!}
    {!! Form::text('procedure_location', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Theatre Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('theatre_id', 'Theatre:') !!}
    {!! Form::select('theatre_id', $theatre->pluck('name', 'id')->prepend('Select Theatre', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

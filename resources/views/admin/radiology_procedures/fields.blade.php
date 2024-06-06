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
    {!! Form::text('procedure_code', null, ['class' => 'form-control', 'maxlength' => 50, 'placeholder' => 'Enter Procedure Code', 'id' => 'procedure_code']) !!}
    <span id="procedure_code_error" class="text-danger"></span>
</div>

<!-- Procedure Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_date', 'Procedure Date:') !!}
    {!! Form::text('procedure_date', null, ['class' => 'form-control', 'id' => 'procedure_date', 'placeholder' => 'Select Procedure Date']) !!}
</div>

@push('page_scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#procedure_date", {
                dateFormat: "Y-m-d",
                maxDate: "today"
            });
        });
    </script>
@endpush

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Description']) !!}
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
    {!! Form::text('procedure_notes', null, ['class' => 'form-control', 'maxlength' => 600, 'placeholder' => 'Enter Procedure Notes']) !!}
</div>

<!-- Procedure Results Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_results', 'Procedure Results:') !!}
    {!! Form::text('procedure_results', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Procedure Results']) !!}
</div>

<!-- Procedure Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_cost', 'Procedure Cost:') !!}
    {!! Form::number('procedure_cost', null, ['class' => 'form-control', 'placeholder' => 'Enter Procedure Cost', 'id' => 'procedure_cost']) !!}
    <span id="procedure_cost_error" class="text-danger"></span>
</div>

<!-- Insurance Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurance_id', 'Insurance:') !!}
    {!! Form::select('insurance_id', $insurance->pluck('id', 'id')->prepend('Select Insurance', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Procedure Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_location', 'Procedure Location:') !!}
    {!! Form::text('procedure_location', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Procedure Location']) !!}
</div>

<!-- Theatre Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('theatre_id', 'Theatre:') !!}
    {!! Form::select('theatre_id', $theatre->pluck('name', 'id')->prepend('Select Theatre', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

@push('page_scripts')
    <script>
        $('#procedure_cost').on('input', function () {
            var procedureCostValue = $(this).val().trim();
            if (procedureCostValue === '' || parseFloat(procedureCostValue) <= 0 || isNaN(parseFloat(procedureCostValue))) {
                $('#procedure_cost_error').text('Procedure Cost must be a positive number');
            } else {
                $('#procedure_cost_error').text('');
            }
        });
    </script>
@endpush

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
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
    <script type="text/javascript">
        $('#procedure_date').datepicker()
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
    {!! Form::number('doctor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Radiologist Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('radiologist_name', 'Radiologist Name:') !!}
    {!! Form::text('radiologist_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
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
    {!! Form::label('insurance_id', 'Insurance Id:') !!}
    {!! Form::number('insurance_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Procedure Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_location', 'Procedure Location:') !!}
    {!! Form::text('procedure_location', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Theatre Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('theatre_id', 'Theatre Id:') !!}
    {!! Form::number('theatre_id', null, ['class' => 'form-control']) !!}
</div>
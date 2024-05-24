<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Other Names Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_names', 'Other Names:') !!}
    {!! Form::text('other_names', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Specialty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specialization_id', 'Specialization :') !!}
    {!! Form::select('specialization_id', $specs->pluck('specialty', 'id')->prepend('Select Specialty ', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Clinic Hospital Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinic_hospital', 'Clinic Hospital:') !!}
    {!! Form::text('clinic_hospital', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Procedure Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_id', 'Procedure:') !!}
    {!! Form::select('procedure_id', $procedures->pluck('procedure_code', 'id')->prepend('Select Procedure ', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

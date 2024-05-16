<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Equipments Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipments_id', 'Equipments Id:') !!}
    {!! Form::number('equipments_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Technician Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('technician_id', 'Technician Id:') !!}
    {!! Form::number('technician_id', null, ['class' => 'form-control']) !!}
</div>
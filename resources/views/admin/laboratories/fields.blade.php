<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department :') !!}
    {!! Form::select('department_id', $department->pluck('name', 'id')->prepend('Select Department', ''), null, ['class' => 'form-control', 'required']) !!}
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
    {!! Form::label('equipment_id', 'Equipment :') !!}
    {!! Form::select('equipment_id', $equipment->pluck('name', 'id')->prepend('Select Equipment', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Technician Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('technician', 'Technician:') !!}
    {!! Form::select('technician', $technician->mapWithKeys(function ($technician) {
        return [$technician->id => $technician->first_name . ' ' . $technician->surname . ' ' . $technician->other_names];
    })->prepend('Select Technician', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

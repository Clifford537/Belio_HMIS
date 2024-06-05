<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100, 'required' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    <!-- Nurse -->
    {!! Form::label('nurse_id', 'Nurse:') !!}
    {!! Form::select('nurse_id', $nurses->mapWithKeys(function ($nurse) {
        return [$nurse->id => $nurse->first_name . ' ' . $nurse->surname . ' ' . $nurse->other_names];
    })->prepend('Select Nurse', ''), null, ['class' => 'form-control','required' => 'required']) !!}
</div>


<!-- Ward Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ward_type_id', 'Ward Type:') !!}
    {!! Form::select('ward_type_id', $wardTypes->pluck('type', 'id')->prepend('Select Ward Type', ''), null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100,'required' => 'required']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100,'required' => 'required']) !!}
</div>


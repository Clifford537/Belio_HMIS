<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('nurse_id', 'Nurse:') !!}
    {!! Form::select('nurse_id', $nurses->mapWithKeys(function ($nurse) {
        return [$nurse->id => $nurse->first_name . ' ' . $nurse->surname . ' ' . $nurse->other_names];
    })->prepend('Select Nurse', ''), null, ['class' => 'form-control', 'required']) !!}
</div>


<!-- Ward Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ward_type_id', 'Ward Type:') !!}
    {!! Form::select('ward_type_id', $wardTypes->pluck('type', 'id')->prepend('Select Ward Type', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
    </div>
</div>


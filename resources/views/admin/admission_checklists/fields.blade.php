<!-- Checklist Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('checklist', 'Checklist:') !!}
    {!! Form::textarea('checklist', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Ward Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ward_id', 'Ward :') !!}
    {!! Form::select('ward_id', $wards->pluck('description', 'id')->prepend('Select Ward', ''), null, ['class' => 'form-control', 'required']) !!}
</div>
<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $physician->first_name }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $physician->surname }}</p>
</div>

<!-- Other Names Field -->
<div class="col-sm-12">
    {!! Form::label('other_names', 'Other Names:') !!}
    <p>{{ $physician->other_names }}</p>
</div>

<!-- Specialty Field -->
<div class="col-sm-12">
    {!! Form::label('specialty', 'Specialty:') !!}
    <p>{{ $physician->specialty }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $physician->address }}</p>
</div>

<!-- Clinic Hospital Field -->
<div class="col-sm-12">
    {!! Form::label('clinic_hospital', 'Clinic Hospital:') !!}
    <p>{{ $physician->clinic_hospital }}</p>
</div>

<!-- Procedure Id Field -->
<div class="col-sm-12">
    {!! Form::label('procedure_id', 'Procedure Id:') !!}
    <p>{{ $physician->procedure_id }}</p>
</div>


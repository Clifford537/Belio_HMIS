<!-- Admission Id Field -->
<div class="col-sm-12">
    {!! Form::label('admission_id', 'Admission Id:') !!}
    <p>{{ $discharge->admission_id }}</p>
</div>

<!-- Discharge Date Field -->
<div class="col-sm-12">
    {!! Form::label('discharge_date', 'Discharge Date:') !!}
    <p>{{ $discharge->discharge_date }}</p>
</div>

<!-- Discharge Instructions Field -->
<div class="col-sm-12">
    {!! Form::label('discharge_instructions', 'Discharge Instructions:') !!}
    <p>{{ $discharge->discharge_instructions }}</p>
</div>

<!-- Discharge Disposition Field -->
<div class="col-sm-12">
    {!! Form::label('discharge_disposition', 'Discharge Disposition:') !!}
    <p>{{ $discharge->discharge_disposition }}</p>
</div>


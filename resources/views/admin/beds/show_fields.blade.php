<!-- Bed Number Field -->
<div class="col-sm-12">
    {!! Form::label('bed_number', 'Bed Number:') !!}
    <p>{{ $bed->bed_number }}</p>
</div>

<!-- Occupancy Status Field -->
<div class="col-sm-12">
    {!! Form::label('occupancy_status', 'Occupancy Status:') !!}
    <p>{{ $bed->occupancy_status }}</p>
</div>

<!-- Ward Id Field -->
<div class="col-sm-12">
    {!! Form::label('ward_id', 'Ward Id:') !!}
    <p>{{ $bed->ward_id }}</p>
</div>

<!-- Bed Type Id Field -->
<div class="col-sm-12">
    {!! Form::label('bed_type_id', 'Bed Type Id:') !!}
    <p>{{ $bed->bed_type_id }}</p>
</div>

<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $bed->patient_id }}</p>
</div>

<!-- Bedside Equipment Field -->
<div class="col-sm-12">
    {!! Form::label('bedside_equipment', 'Bedside Equipment:') !!}
    <p>{{ $bed->bedside_equipment }}</p>
</div>

<!-- Created Id Field -->
<div class="col-sm-12">
    {!! Form::label('created_id', 'Created Id:') !!}
    <p>{{ $bed->created_id }}</p>
</div>

<!-- Updated Id Field -->
<div class="col-sm-12">
    {!! Form::label('updated_id', 'Updated Id:') !!}
    <p>{{ $bed->updated_id }}</p>
</div>


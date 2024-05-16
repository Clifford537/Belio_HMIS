<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $ward->description }}</p>
</div>

<!-- Ward Type Id Field -->
<div class="col-sm-12">
    {!! Form::label('ward_type_id', 'Ward Type Id:') !!}
    <p>{{ $ward->ward_type_id }}</p>
</div>

<!-- Capacity Field -->
<div class="col-sm-12">
    {!! Form::label('capacity', 'Capacity:') !!}
    <p>{{ $ward->capacity }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $ward->location }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $ward->status }}</p>
</div>

<!-- Nurse Id Field -->
<div class="col-sm-12">
    {!! Form::label('nurse_id', 'Nurse Id:') !!}
    <p>{{ $ward->nurse_id }}</p>
</div>


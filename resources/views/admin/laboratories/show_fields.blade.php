<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $laboratory->name }}</p>
</div>

<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $laboratory->department_id }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $laboratory->location }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $laboratory->status }}</p>
</div>

<!-- Equipments Id Field -->
<div class="col-sm-12">
    {!! Form::label('equipments_id', 'Equipments Id:') !!}
    <p>{{ $laboratory->equipments_id }}</p>
</div>

<!-- Technician Id Field -->
<div class="col-sm-12">
    {!! Form::label('technician_id', 'Technician Id:') !!}
    <p>{{ $laboratory->technician_id }}</p>
</div>


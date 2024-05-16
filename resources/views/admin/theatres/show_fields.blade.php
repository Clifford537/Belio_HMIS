<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $theatre->name }}</p>
</div>

<!-- Theatre Status Field -->
<div class="col-sm-12">
    {!! Form::label('theatre_status', 'Theatre Status:') !!}
    <p>{{ $theatre->theatre_status }}</p>
</div>

<!-- Location Field -->
<div class="col-sm-12">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $theatre->location }}</p>
</div>

<!-- Capacity Field -->
<div class="col-sm-12">
    {!! Form::label('capacity', 'Capacity:') !!}
    <p>{{ $theatre->capacity }}</p>
</div>

<!-- Equipment Id Field -->
<div class="col-sm-12">
    {!! Form::label('equipment_id', 'Equipment Id:') !!}
    <p>{{ $theatre->equipment_id }}</p>
</div>

<!-- Operation Schedules Field -->
<div class="col-sm-12">
    {!! Form::label('operation_schedules', 'Operation Schedules:') !!}
    <p>{{ $theatre->operation_schedules }}</p>
</div>

<!-- Next Maintenance Date Field -->
<div class="col-sm-12">
    {!! Form::label('next_maintenance_date', 'Next Maintenance Date:') !!}
    <p>{{ $theatre->next_maintenance_date }}</p>
</div>

<!-- Last Maintenance Date Field -->
<div class="col-sm-12">
    {!! Form::label('last_maintenance_date', 'Last Maintenance Date:') !!}
    <p>{{ $theatre->last_maintenance_date }}</p>
</div>

<!-- Doctor Incharge Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_incharge', 'Doctor Incharge:') !!}
    <p>{{ $theatre->doctor_incharge }}</p>
</div>


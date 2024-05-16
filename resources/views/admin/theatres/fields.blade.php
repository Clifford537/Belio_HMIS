<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Theatre Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('theatre_status', 'Theatre Status:') !!}
    {!! Form::text('theatre_status', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Equipment Id Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('equipment_id', 'Equipment Id:') !!}
    {!! Form::textarea('equipment_id', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Operation Schedules Field -->
<div class="form-group col-sm-6">
    {!! Form::label('operation_schedules', 'Operation Schedules:') !!}
    {!! Form::text('operation_schedules', null, ['class' => 'form-control','id'=>'operation_schedules']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#operation_schedules').datepicker()
    </script>
@endpush

<!-- Next Maintenance Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('next_maintenance_date', 'Next Maintenance Date:') !!}
    {!! Form::text('next_maintenance_date', null, ['class' => 'form-control','id'=>'next_maintenance_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#next_maintenance_date').datepicker()
    </script>
@endpush

<!-- Last Maintenance Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_maintenance_date', 'Last Maintenance Date:') !!}
    {!! Form::text('last_maintenance_date', null, ['class' => 'form-control','id'=>'last_maintenance_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#last_maintenance_date').datepicker()
    </script>
@endpush

<!-- Doctor Incharge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_incharge', 'Doctor Incharge:') !!}
    {!! Form::number('doctor_incharge', null, ['class' => 'form-control']) !!}
</div>
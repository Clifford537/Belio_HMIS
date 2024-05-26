<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Serial Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serial_number', 'Serial Number:') !!}
    {!! Form::text('serial_number', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Manufacturer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manufacturer', 'Manufacturer:') !!}
    {!! Form::text('manufacturer', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Purchase Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_date', 'Purchase Date:') !!}
    {!! Form::text('purchase_date', null, ['class' => 'form-control','id'=>'purchase_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#purchase_date').datepicker()
    </script>
@endpush

<!-- Warranty Expiry Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('warranty_expiry_date', 'Warranty Expiry Date:') !!}
    {!! Form::text('warranty_expiry_date', null, ['class' => 'form-control','id'=>'warranty_expiry_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#warranty_expiry_date').datepicker()
    </script>
@endpush

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

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

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::number('cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Laboratory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('laboratory_id', 'Laboratory Id:') !!}
    {!! Form::number('laboratory_id', null, ['class' => 'form-control']) !!}
</div>
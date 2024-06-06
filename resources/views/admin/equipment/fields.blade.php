<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Name']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Type']) !!}
</div>

<!-- Serial Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serial_number', 'Serial Number:') !!}
    {!! Form::text('serial_number', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Serial Number']) !!}
</div>

<!-- Manufacturer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manufacturer', 'Manufacturer:') !!}
    {!! Form::text('manufacturer', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Manufacturer']) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Model']) !!}
</div>

<!-- Purchase Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_date', 'Purchase Date:') !!}
    {!! Form::text('purchase_date', null, ['class' => 'form-control date', 'placeholder' => 'Select Purchase Date']) !!}
</div>

<!-- Warranty Expiry Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('warranty_expiry_date', 'Warranty Expiry Date:') !!}
    {!! Form::text('warranty_expiry_date', null, ['class' => 'form-control date', 'placeholder' => 'Select Warranty Expiry Date']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Location']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'maxlength' => 50, 'placeholder' => 'Enter Status']) !!}
</div>

<!-- Last Maintenance Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_maintenance_date', 'Last Maintenance Date:') !!}
    {!! Form::text('last_maintenance_date', null, ['class' => 'form-control date', 'placeholder' => 'Select Last Maintenance Date']) !!}
</div>

<!-- Next Maintenance Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('next_maintenance_date', 'Next Maintenance Date:') !!}
    {!! Form::text('next_maintenance_date', null, ['class' => 'form-control date', 'placeholder' => 'Select Next Maintenance Date']) !!}
</div>

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::number('cost', null, ['class' => 'form-control', 'placeholder' => 'Enter Cost']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control', 'maxlength' => 65535, 'placeholder' => 'Enter Notes']) !!}
</div>

<!-- Laboratory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('laboratory_id', 'Laboratory:') !!}
    {!! Form::number('laboratory_id', null, ['class' => 'form-control', 'placeholder' => 'Enter Laboratory ID']) !!}
</div>

@push('page_scripts')
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        $(document).ready(function () {
            $('.date').flatpickr({
                dateFormat: "Y-m-d",
                minDate: "today"
            });
        });
    </script>
@endpush

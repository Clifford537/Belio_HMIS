<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Theatre Name', 'required']) !!}
</div>

<!-- Theatre Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('theatre_status', 'Theatre Status:') !!}
    {!! Form::text('theatre_status', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Theatre Status', 'required']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter Location', 'required']) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control', 'placeholder' => 'Enter Capacity', 'required']) !!}
</div>

<!-- Equipment Id Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('equipment_id', 'Equipment Id:') !!}
    {!! Form::textarea('equipment_id', null, ['class' => 'form-control', 'maxlength' => 65535, 'placeholder' => 'Enter Equipment Id', 'required']) !!}
</div>

<!-- Operation Schedules Field -->
<div class="form-group col-sm-6">
    {!! Form::label('operation_schedules', 'Operation Schedules:') !!}
    {!! Form::text('operation_schedules', null, ['class' => 'form-control flatpickr-input', 'id' => 'operation_schedules', 'placeholder' => 'Select Operation Schedules', 'required']) !!}
</div>

<!-- Next Maintenance Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('next_maintenance_date', 'Next Maintenance Date:') !!}
    {!! Form::text('next_maintenance_date', null, ['class' => 'form-control flatpickr-input', 'id' => 'next_maintenance_date', 'placeholder' => 'Select Next Maintenance Date', 'required']) !!}
</div>

<!-- Last Maintenance Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_maintenance_date', 'Last Maintenance Date:') !!}
    {!! Form::text('last_maintenance_date', null, ['class' => 'form-control flatpickr-input', 'id' => 'last_maintenance_date', 'placeholder' => 'Select Last Maintenance Date', 'required']) !!}
</div>

<!-- Doctor Incharge Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_incharge', 'Doctor Incharge:') !!}
    {!! Form::select('doctor_id', $doctor->mapWithKeys(function ($doctor) {
        return [$doctor->id => $doctor->first_name . ' ' . $doctor->surname . ' '];
    })->prepend('Select Doctor', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

@push('page_scripts')
<!-- Include flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Include flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<script>
    // Initialize flatpickr for the date fields
    document.addEventListener('DOMContentLoaded', function () {
        flatpickr('#operation_schedules', {
            dateFormat: 'Y-m-d',
            placeholder: 'Select Operation Schedules',
            allowInput: true,
            onClose: function (selectedDates, dateStr, instance) {
                $('#operation_schedules').trigger('input'); // Trigger input event for validation
            }
        });
        flatpickr('#next_maintenance_date', {
            dateFormat: 'Y-m-d',
            placeholder: 'Select Next Maintenance Date',
            allowInput: true,
            onClose: function (selectedDates, dateStr, instance) {
                $('#next_maintenance_date').trigger('input'); // Trigger input event for validation
            }
        });
        flatpickr('#last_maintenance_date', {
            dateFormat: 'Y-m-d',
            placeholder: 'Select Last Maintenance Date',
            allowInput: true,
            onClose: function (selectedDates, dateStr, instance) {
                $('#last_maintenance_date').trigger('input'); // Trigger input event for validation
            }
        });
    });
</script>
@endpush

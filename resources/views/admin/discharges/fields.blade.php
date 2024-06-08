<!-- Admission Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_id', 'Admission:') !!}
    {!! Form::select('admission_id', $admissions->pluck('id', 'id')->prepend('Select Admission', ''), null, ['class' => 'form-control']) !!}
</div>

<!-- Discharge Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discharge_date', 'Discharge Date:') !!}
    {!! Form::text('discharge_date', null, ['class' => 'form-control', 'id' => 'discharge_date', 'placeholder' => 'Select Discharge Date', 'required' => 'required']) !!}
</div>

@push('page_scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#discharge_date", {
            dateFormat: "Y-m-d",
            maxDate: "today"
        });
    });
</script>
@endpush

<!-- Discharge Instructions Field -->
<div class="form-group col-sm-12">
    {!! Form::label('discharge_instructions', 'Discharge Instructions:') !!}
    {!! Form::text('discharge_instructions', null, ['class' => 'form-control', 'maxlength' => 100]) !!}
</div>

<!-- Discharge Disposition Field -->
<div class="form-group col-sm-12">
    {!! Form::label('discharge_disposition', 'Discharge Disposition:') !!}
    {!! Form::text('discharge_disposition', null, ['class' => 'form-control']) !!}
</div>

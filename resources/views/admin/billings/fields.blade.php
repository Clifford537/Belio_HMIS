<!-- Patient Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_id', 'Admission:') !!}
    {!! Form::select('admission_id', $admissions->pluck('id', 'id')->prepend('Select Admission', ''), null, ['class' => 'form-control', 'required']) !!} 
</div>

<!-- Billing Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('billing_date', 'Billing Date:') !!}
    {!! Form::text('billing_date', null, ['class' => 'form-control', 'id' => 'billing_date', 'placeholder' => 'Select Billing Date']) !!}
</div>

@push('page_scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#billing_date", {
            dateFormat: "Y-m-d",
            maxDate: "today"
        });
    });
</script>
@endpush

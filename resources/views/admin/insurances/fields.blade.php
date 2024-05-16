<!-- Insurance Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurance_company', 'Insurance Company:') !!}
    {!! Form::text('insurance_company', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Policy Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('policy_number', 'Policy Number:') !!}
    {!! Form::number('policy_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage_start_date', 'Coverage Start Date:') !!}
    {!! Form::text('coverage_start_date', null, ['class' => 'form-control','id'=>'coverage_start_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#coverage_start_date').datepicker()
    </script>
@endpush

<!-- Coverage End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage_end_date', 'Coverage End Date:') !!}
    {!! Form::text('coverage_end_date', null, ['class' => 'form-control','id'=>'coverage_end_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#coverage_end_date').datepicker()
    </script>
@endpush

<!-- Billing Information Field -->
<div class="form-group col-sm-6">
    {!! Form::label('billing_information', 'Billing Information:') !!}
    {!! Form::text('billing_information', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
</div>
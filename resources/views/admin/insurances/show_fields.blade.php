<!-- Insurance Company Field -->
<div class="col-sm-12">
    {!! Form::label('insurance_company', 'Insurance Company:') !!}
    <p>{{ $insurance->insurance_company }}</p>
</div>

<!-- Policy Number Field -->
<div class="col-sm-12">
    {!! Form::label('policy_number', 'Policy Number:') !!}
    <p>{{ $insurance->policy_number }}</p>
</div>

<!-- Coverage Start Date Field -->
<div class="col-sm-12">
    {!! Form::label('coverage_start_date', 'Coverage Start Date:') !!}
    <p>{{ $insurance->coverage_start_date }}</p>
</div>

<!-- Coverage End Date Field -->
<div class="col-sm-12">
    {!! Form::label('coverage_end_date', 'Coverage End Date:') !!}
    <p>{{ $insurance->coverage_end_date }}</p>
</div>

<!-- Billing Information Field -->
<div class="col-sm-12">
    {!! Form::label('billing_information', 'Billing Information:') !!}
    <p>{{ $insurance->billing_information }}</p>
</div>

<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $insurance->patient_id }}</p>
</div>


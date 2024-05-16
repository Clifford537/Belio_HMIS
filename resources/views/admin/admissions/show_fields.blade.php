<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $admission->patient_id }}</p>
</div>

<!-- Admission Date Field -->
<div class="col-sm-12">
    {!! Form::label('admission_date', 'Admission Date:') !!}
    <p>{{ $admission->admission_date }}</p>
</div>

<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $admission->doctor_id }}</p>
</div>

<!-- Reason For Admission Field -->
<div class="col-sm-12">
    {!! Form::label('reason_for_admission', 'Reason For Admission:') !!}
    <p>{{ $admission->reason_for_admission }}</p>
</div>

<!-- Discharge Status Field -->
<div class="col-sm-12">
    {!! Form::label('discharge_status', 'Discharge Status:') !!}
    <p>{{ $admission->discharge_status }}</p>
</div>

<!-- Admission Types Id Field -->
<div class="col-sm-12">
    {!! Form::label('admission_types_id', 'Admission Types Id:') !!}
    <p>{{ $admission->admission_types_id }}</p>
</div>


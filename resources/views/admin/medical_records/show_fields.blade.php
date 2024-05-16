<!-- Visit Date Field -->
<div class="col-sm-12">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    <p>{{ $medicalRecord->visit_date }}</p>
</div>

<!-- Medical History Field -->
<div class="col-sm-12">
    {!! Form::label('medical_history', 'Medical History:') !!}
    <p>{{ $medicalRecord->medical_history }}</p>
</div>

<!-- Diagnoses Field -->
<div class="col-sm-12">
    {!! Form::label('diagnoses', 'Diagnoses:') !!}
    <p>{{ $medicalRecord->diagnoses }}</p>
</div>

<!-- Treatments Field -->
<div class="col-sm-12">
    {!! Form::label('treatments', 'Treatments:') !!}
    <p>{{ $medicalRecord->treatments }}</p>
</div>

<!-- Lab Results Field -->
<div class="col-sm-12">
    {!! Form::label('lab_results', 'Lab Results:') !!}
    <p>{{ $medicalRecord->lab_results }}</p>
</div>

<!-- Imaging Studies Field -->
<div class="col-sm-12">
    {!! Form::label('imaging_studies', 'Imaging Studies:') !!}
    <p>{{ $medicalRecord->imaging_studies }}</p>
</div>

<!-- Progress Notes Field -->
<div class="col-sm-12">
    {!! Form::label('progress_notes', 'Progress Notes:') !!}
    <p>{{ $medicalRecord->progress_notes }}</p>
</div>

<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $medicalRecord->patient_id }}</p>
</div>

<!-- Nurse Id Field -->
<div class="col-sm-12">
    {!! Form::label('nurse_id', 'Nurse Id:') !!}
    <p>{{ $medicalRecord->nurse_id }}</p>
</div>

<!-- Doctor Id Field -->
<div class="col-sm-12">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $medicalRecord->doctor_id }}</p>
</div>


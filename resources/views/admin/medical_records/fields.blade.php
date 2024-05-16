<!-- Visit Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit_date', 'Visit Date:') !!}
    {!! Form::text('visit_date', null, ['class' => 'form-control','id'=>'visit_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#visit_date').datepicker()
    </script>
@endpush

<!-- Medical History Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medical_history', 'Medical History:') !!}
    {!! Form::text('medical_history', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Diagnoses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diagnoses', 'Diagnoses:') !!}
    {!! Form::text('diagnoses', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Treatments Field -->
<div class="form-group col-sm-6">
    {!! Form::label('treatments', 'Treatments:') !!}
    {!! Form::text('treatments', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Lab Results Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lab_results', 'Lab Results:') !!}
    {!! Form::text('lab_results', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Imaging Studies Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imaging_studies', 'Imaging Studies:') !!}
    {!! Form::text('imaging_studies', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Progress Notes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('progress_notes', 'Progress Notes:') !!}
    {!! Form::text('progress_notes', null, ['class' => 'form-control', 'maxlength' => 600, 'maxlength' => 600]) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nurse Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nurse_id', 'Nurse Id:') !!}
    {!! Form::number('nurse_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    {!! Form::number('doctor_id', null, ['class' => 'form-control']) !!}
</div>
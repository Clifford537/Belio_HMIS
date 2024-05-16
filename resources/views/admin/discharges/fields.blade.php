<!-- Admission Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_id', 'Admission:') !!}
    {!! Form::select('admission_id', $admissions->pluck('id', 'id')->prepend('Select Admission', ''), null, ['class' => 'form-control', 'required']) !!} 
</div>


<!-- Discharge Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discharge_date', 'Discharge Date:') !!}
    {!! Form::text('discharge_date', null, ['class' => 'form-control','id'=>'discharge_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#discharge_date').datepicker()
    </script>
@endpush

<!-- Discharge Instructions Field -->
<div class="form-group col-sm-12">
    {!! Form::label('discharge_instructions', 'Discharge Instructions:') !!}
    {!! Form::text('discharge_instructions', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Discharge Disposition Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('discharge_disposition', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('discharge_disposition', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('discharge_disposition', 'Discharge Disposition', ['class' => 'form-check-label']) !!}
    </div>
</div>
<!-- Bed Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bed_number', 'Bed Number:') !!}
    {!! Form::text('bed_number', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Occupancy Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('occupancy_status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('occupancy_status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('occupancy_status', 'Occupancy Status', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Ward Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ward_id', 'Ward :') !!}
    {!! Form::select('ward_id', $wards->pluck('description', 'id')->prepend('Select Ward', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Bed Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bed_type_id', 'Bed Type :') !!}
    {!! Form::select('bed_type_id', $->pluck('type', 'id')->prepend('Select Bed Type', ''), null, ['class' => 'form-control', 'required']) !!}

</div>



<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient :') !!}
    {!! Form::select('patient_id', $patients->mapWithKeys(function ($patient) {
        return [$patient->id => $patient->first_name . ' ' . $patient->surname . ' ' . $patient->other_names];
    })->prepend('Select Patient', ''), null, ['class' => 'form-control', 'required']) !!}
</div>


<!-- Bedside Equipment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bedside_equipment', 'Bedside Equipment:') !!}
    {!! Form::text('bedside_equipment', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Created Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created at:') !!}
    {!! Form::text('created_at', null, ['class' => 'form-control','id'=>'created_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#created_id').datepicker()
    </script>
@endpush

<!-- Updated Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated at:') !!}
    {!! Form::text('updated_at', null, ['class' => 'form-control','id'=>'updated_at']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#updated_id').datepicker()
    </script>
@endpush
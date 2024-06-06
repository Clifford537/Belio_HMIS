<!-- Bed Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bed_number', 'Bed Number:') !!}
    {!! Form::text('bed_number', null, ['id' => 'bed_number', 'class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter bed number', 'required']) !!}
    <div id="bedNumberError" class="text-danger" style="display: none;">Bed number is required.</div>
</div>

<!-- Occupancy Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('occupancy_status', 'Occupancy Status:') !!}
    {!! Form::select('occupancy_status', ['Vacant' => 'Vacant', 'Occupied' => 'Occupied'], null, ['id' => 'occupancy_status', 'class' => 'form-control', 'required']) !!}
</div>

<!-- Ward ID Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ward_id', 'Ward:') !!}
    {!! Form::select('ward_id', $wards->pluck('description', 'id')->prepend('Select Ward', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Bed Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bed_type_id', 'Bed Type:') !!}
    {!! Form::select('bed_type_id', $bedType->pluck('type', 'id')->prepend('Select Bed Type', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient:') !!}
    {!! Form::select('patient_id', $patients->mapWithKeys(function ($patient) {
        return [$patient->id => $patient->first_name . ' ' . $patient->surname . ' ' . $patient->other_names];
    })->prepend('Select Patient', ''), null, ['class' => 'form-control']) !!}
</div>

<!-- Bedside Equipment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bedside_equipment', 'Bedside Equipment:') !!}
    {!! Form::text('bedside_equipment', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter bedside equipment']) !!}
</div>

@push('page_scripts')
<script>
    document.getElementById('bed_number').addEventListener('input', function() {
        const bedNumberInput = this;
        const bedNumberError = document.getElementById('bedNumberError');
        const bedNumber = bedNumberInput.value.trim();

        if (!bedNumber) {
            bedNumberError.style.display = 'block';
        } else {
            bedNumberError.style.display = 'none';
        }
    });
</script>
@endpush

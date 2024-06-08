<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['id' => 'first_name', 'class' => 'form-control', 'maxlength' => 100 , 'placeholder' => 'Enter First name']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['id' => 'surname', 'class' => 'form-control', 'maxlength' => 100 , 'placeholder' => 'Enter Surname']) !!}
</div>

<!-- Other Names Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_names', 'Other Names:') !!}
    {!! Form::text('other_names', null, ['id' => 'other_names', 'class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter other name (optional)']) !!}
</div>

@push('page_scripts')
<script>
    function capitalizeFirstLetter(string) {
        return string.replace(/\b\w/g, function(letter) {
            return letter.toUpperCase();
        });
    }

    function validateAndFormatInput(event) {
        const inputField = event.target;
        let value = inputField.value;

        value = value.replace(/[^a-zA-Z\s']/g, '');

        value = capitalizeFirstLetter(value);

        inputField.value = value;
    }

    document.getElementById('first_name').addEventListener('input', validateAndFormatInput);
    document.getElementById('surname').addEventListener('input', validateAndFormatInput);
    document.getElementById('other_names').addEventListener('input', validateAndFormatInput);
</script>
@endpush

<!-- Specialty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specialization_id', 'Specialization :') !!}
    {!! Form::select('specialization_id', $specs->pluck('specialty', 'id')->prepend('Select Specialty ', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'e.g., 123 Main St, Springfield']) !!}
</div>

<!-- Clinic Hospital Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clinic_hospital', 'Clinic Hospital:') !!}
    {!! Form::text('clinic_hospital', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter clinic or hospital name']) !!}
</div>

<!-- Procedure Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_id', 'Procedure:') !!}
    {!! Form::select('procedure_id', $procedures->pluck('procedure_code', 'id')->prepend('Select Procedure ', ''), null, ['class' => 'form-control', 'required']) !!}
</div>


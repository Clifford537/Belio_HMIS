<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter your name']) !!}
</div>

<!-- Specialization Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specialization_id', 'Specialization:') !!}
    {!! Form::select('specialization_id', $specializations->pluck('specialty', 'id')->prepend('Select Specialty', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['id' => 'phone_number', 'class' => 'form-control', 'maxlength' => 10, 'placeholder' => '07XXXXXXXX or 01XXXXXXXX']) !!}
    <div id="phoneError" class="text-danger" style="display: none;">The correct format is 07XXXXXXXX or 01XXXXXXXX.</div>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'maxlength' => 50, 'placeholder' => 'john@example.com']) !!}
    <div id="emailError" class="text-danger" style="display: none;">Invalid email format.</div>
    <small id="emailHelp" class="form-text text-muted" style="display: none;">Example: john@example.com</small>
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department:') !!}
    {!! Form::select('department_id', $departments->pluck('name', 'id')->prepend('Select Department', ''), null, ['class' => 'form-control', 'required']) !!}
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

    document.getElementById('name').addEventListener('input', validateAndFormatInput);

    document.getElementById('email').addEventListener('input', function() {
        const emailInput = this;
        const emailError = document.getElementById('emailError');
        const emailHelp = document.getElementById('emailHelp');
        const email = emailInput.value.trim();

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {
            emailError.style.display = 'block';
            emailHelp.style.display = 'none';
        } else {
            emailError.style.display = 'none';
            emailHelp.style.display = 'block';
        }
    });

    document.getElementById('phone_number').addEventListener('input', function() {
        const phoneInput = this;
        const phoneError = document.getElementById('phoneError');
        let phoneNumber = phoneInput.value.replace(/\D/g, ''); 

        if (phoneNumber.length > 10) {
            phoneNumber = phoneNumber.substring(0, 10); 
        }

        phoneInput.value = phoneNumber;

        const phonePattern = /^(07|01)\d{8}$/; 
        if (!phonePattern.test(phoneNumber)) {
            phoneError.style.display = 'block';
        } else {
            phoneError.style.display = 'none';
        }
    });
</script>
@endpush

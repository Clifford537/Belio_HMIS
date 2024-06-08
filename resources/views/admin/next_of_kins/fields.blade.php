<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['id' => 'first_name', 'class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter first name']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['id' => 'surname', 'class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter surname']) !!}
</div>

<!-- Other Names Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_names', 'Other Names:') !!}
    {!! Form::text('other_names', null, ['id' => 'other_names', 'class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter other names']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::select('gender', ['' => 'Select Gender', 'Male' => 'Male', 'Female' => 'Female'], null, ['id' => 'gender', 'class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'maxlength' => 50, 'placeholder' => 'john@example.com']) !!}
    <div id="emailError" class="text-danger" style="display: none;">Invalid email format.</div>
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['id' => 'phone_number', 'class' => 'form-control', 'maxlength' => 50, 'placeholder' => '07XXXXXXXX or 01XXXXXXXX']) !!}
    <div id="phoneError" class="text-danger" style="display: none;">The correct format is 07XXXXXXXX or 01XXXXXXXX.</div>
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['id' => 'address', 'class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'e.g 123 Kings town']) !!}
    <div id="addressError" class="text-danger" style="display: none;">Invalid address format. Please follow the example: 123 Main St, Springfield.</div>
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

    function validateAddress(event) {
        const inputField = event.target;
        const addressError = document.getElementById('addressError');
        const address = inputField.value.trim();

        const addressPattern = /^[a-zA-Z0-9\s,'-]*$/;

        if (!addressPattern.test(address)) {
            addressError.style.display = 'block';
        } else {
            addressError.style.display = 'none';
        }
    }

    document.getElementById('first_name').addEventListener('input', validateAndFormatInput);
    document.getElementById('surname').addEventListener('input', validateAndFormatInput);
    document.getElementById('other_names').addEventListener('input', validateAndFormatInput);

    document.getElementById('email').addEventListener('input', function() {
        const emailInput = this;
        const emailError = document.getElementById('emailError');
        const email = emailInput.value.trim();

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {
            emailError.style.display = 'block';
        } else {
            emailError.style.display = 'none';
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

    document.getElementById('address').addEventListener('input', validateAddress);
</script>
@endpush

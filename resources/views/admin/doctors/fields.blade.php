<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['id' => 'first_name', 'class' => 'form-control', 'maxlength' => 100]) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['id' => 'surname', 'class' => 'form-control', 'maxlength' => 100]) !!}
</div>

<!-- Other Names Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_names', 'Other Names:') !!}
    {!! Form::text('other_names', null, ['id' => 'other_names', 'class' => 'form-control', 'maxlength' => 100 , 'placeholder' => 'Enter other name optional']) !!}
</div>

<!-- Gender -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'maxlength' => 50, 'placeholder' => 'john@example.com']) !!}
    <div id="emailError" class="text-danger" style="display: none;">Invalid email format.</div>
    <small id="emailHelp" class="form-text text-muted" style="display: none;">Example: john@example.com</small>
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['id' => 'phone_number', 'class' => 'form-control', 'maxlength' => 10, 'placeholder' => '07XXXXXXXX or 01XXXXXXXX']) !!}
    <div id="phoneError" class="text-danger" style="display: none;"><p>The correct format is 07XXXXXXXX or 01XXXXXXXX.</p></div>
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['id' => 'address', 'class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'e.g., 123 Main St, Springfield']) !!}
    <div id="addressError" class="text-danger" style="display: none;">Invalid address format. Please follow the example: 123 Main St, Springfield.</div>
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    {!! Form::text('date_of_birth', null, ['class' => 'form-control', 'id' => 'date_of_birth', 'placeholder' => 'Select Date of Birth']) !!}
</div>

<!-- Specialization Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specialization_id', 'Specialization :') !!}
    {!! Form::select('specialization_id', $specializations->pluck('specialty', 'id')->prepend('Select Specialty ', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department :') !!}
    {!! Form::select('department_id', $department->pluck('name', 'id')->prepend('Select Department', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- License Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('license_number', 'License Number:') !!}
    {!! Form::text('license_number', null, ['class' => 'form-control', 'maxlength' => 100]) !!}
</div>

<!-- Years Of Experience Field -->
<div class="form-group col-sm-6">
    {!! Form::label('years_of_experience', 'Years Of Experience:') !!}
    {!! Form::number('years_of_experience', null, ['class' => 'form-control']) !!}
</div>

<!-- Employment Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employment_status_id', 'Employment Status :') !!}
    {!! Form::select('employment_status_id', $emp_status->pluck('status', 'id')->prepend('Select Status', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_id', 'Shift :') !!}
    {!! Form::select('shift_id', $shift->pluck('day_of_week', 'id')->prepend('Select Shift', ''), null, ['class' => 'form-control', 'required']) !!}
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
    document.getElementById('address').addEventListener('input', validateAddress);

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

    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#date_of_birth", {
            dateFormat: "Y-m-d",
            maxDate: "today"
        });
    });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endpush

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Patients</h1>
                    <div>
                        @include('flash::message')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @include('adminlte-templates::common.errors')

        <div class="card">
            {!! Form::open(['route' => 'admin.patients.store', 'id' => 'patientForm']) !!}

            <div class="card-body">
                <div class="row">
                    @include('admin.patients.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('home') }}" class="btn btn-default bg-danger">Cancel</a>
                <a href="{{ route('admin.patients.create') }}" class="btn btn-default bg-warning">Reset</a>
                <a href="{{ route('admin.wards.create') }}" class="btn btn-default bg-info text-white" id="proceedto">Inpatient</a>
                <a href="{{ route('admin.insurances.create') }}" class="btn btn-default bg-success text-white" id="proceed">Outpatient</a>

            </div>

            {!! Form::close() !!}
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#proceed, #proceedto').on('click', function(event) {
                let isValid = true;
                $('form [required]').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });

                if (!isValid) {
                    event.preventDefault();
                    alert('Please fill out all required fields.');
                }
            });
        });


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
        let phoneNumber = phoneInput.value.replace(/\D/g, ''); // Remove all non-digit characters

        // Auto-formatting
        if (phoneNumber.length > 10) {
            phoneNumber = phoneNumber.substring(0, 10); 
        }

        phoneInput.value = phoneNumber;

        // Validation
        const phonePattern = /^(07|01)\d{8}$/; 
        if (!phonePattern.test(phoneNumber)) {
            phoneError.style.display = 'block';
        } else {
            phoneError.style.display = 'none';
        }
    });

        function capitalizeFirstLetter(string) {
            return string.replace(/\b\w/g, function(letter) {
                return letter.toUpperCase();
            });
        }

        function validateAndFormatEmergencyContactName(event) {
            const inputField = event.target;
            let value = inputField.value;

            // Allow only letters and spaces
            value = value.replace(/[^a-zA-Z\s]/g, '');

            // Capitalize the first letter of each word
            value = capitalizeFirstLetter(value);

            inputField.value = value;

            // Display error message if invalid characters are entered
            const errorField = document.getElementById('emergencyContactNameError');
            if (/[^a-zA-Z\s]/.test(inputField.value)) {
                errorField.style.display = 'block';
            } else {
                errorField.style.display = 'none';
            }
        }

        document.getElementById('emergency_contact_name').addEventListener('input', validateAndFormatEmergencyContactName);

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

    </script>
@endsection

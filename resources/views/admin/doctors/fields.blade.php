<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required', 'maxlength' => 300, 'maxlength' => 300]) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control', 'required', 'maxlength' => 300, 'maxlength' => 300]) !!}
</div>

<!-- Other Names Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_names', 'Other Names:') !!}
    {!! Form::text('other_names', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Gender -->
<div class="form-group col-sm-6">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 10]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['id' => 'phone_number', 'class' => 'form-control', 'maxlength' => 14]) !!}
    <small id="phoneHelp" class="form-text text-muted">Format: (XXX) XXX-XXXX</small>
    <div id="phoneError" class="text-danger" style="display: none;">Incorrect format. The correct format is (XXX) XXX-XXXX.</div>
</div>
@push('page_scripts')
<script>
    document.getElementById('phone_number').addEventListener('input', function() {
        const phoneInput = this;
        const phoneError = document.getElementById('phoneError');
        let phoneNumber = phoneInput.value.replace(/\D/g, ''); 

        // Auto-formatting
        if (phoneNumber.length > 0) {
            phoneNumber = '(' + phoneNumber.substring(0, 3);
        }
        if (phoneNumber.length > 4) {
            phoneNumber += ') ' + phoneNumber.substring(3, 6);
        }
        if (phoneNumber.length > 9) {
            phoneNumber += '-' + phoneNumber.substring(6, 10);
        }

        phoneInput.value = phoneNumber;

        // Validation
        const phonePattern = /^\(\d{3}\) \d{3}-\d{4}$/; 
        if (!phonePattern.test(phoneNumber)) {
            phoneError.style.display = 'block';
        } else {
            phoneError.style.display = 'none';
        }
    });
</script>
@endpush

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>


<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    {!! Form::text('date_of_birth', null, ['class' => 'form-control', 'id' => 'date_of_birth']) !!}
</div>

@push('page_scripts')
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#date_of_birth').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            });
        });
    </script>
@endpush


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

<!-- Lisence Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lisence_number', 'Lisence Number:') !!}
    {!! Form::text('lisence_number', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
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
 main
</div>

</div>


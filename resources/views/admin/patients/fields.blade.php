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
    {!! Form::text('other_names', null, ['id' => 'other_names', 'class' => 'form-control', 'maxlength' => 100, 'placeholder' => 'Enter other name optional']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control']) !!}
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

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'maxlength' => 50, 'placeholder' => 'john@example.com']) !!}
    <div id="emailError" class="text-danger" style="display: none;">Invalid email format.</div>
    <small id="emailHelp" class="form-text text-muted" style="display: none;">Example: john@example.com</small>
</div>

<!-- Blood Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('blood_group', 'Blood Group:') !!}
    {!! Form::text('blood_group', old('blood_group', session('blood_group')), ['class' => 'form-control', 'maxlength' => 10, 'required' => 'required']) !!}
</div>

<!-- Emergency Contact Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_contact_name', 'Emergency Contact Name:') !!}
    {!! Form::text('emergency_contact_name', old('emergency_contact_name', session('emergency_contact_name')), ['class' => 'form-control', 'id' => 'emergency_contact_name', 'maxlength' => 100, 'required' => 'required', 'placeholder' => 'Enter emergency contact name']) !!}
    <div id="emergencyContactNameError" class="text-danger" style="display: none;">Invalid format. Only letters and spaces are allowed.</div>
</div>

<!-- Emergency Contact Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_contact_phone', 'Emergency Contact Phone:') !!}
    {!! Form::text('emergency_contact_phone', old('emergency_contact_phone', session('emergency_contact_phone')), ['id' => 'phone_number_2','class' => 'form-control', 'maxlength' => 100, 'required' => 'required','placeholder' => '07XXXXXXXX or 01XXXXXXXX', 'oninput' => 'validatePhoneNumber()']) !!}
    <div id="phoneError_2" class="text-danger" style="display: none;"><p>The correct format is 07XXXXXXXX or 01XXXXXXXX.</p></div>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', old('status', session('status')), ['class' => 'form-control', 'maxlength' => 100, 'required' => 'required']) !!}
</div>

<!-- Insurance Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurance_id', 'Insurance:') !!}
    {!! Form::select('insurance_id', $insurances->pluck('id', 'id')->prepend('Select Insurance', ''), old('insurance_id', session('insurance_id')), ['class' => 'form-control']) !!}
</div>

<!-- Nurse Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nurse_id', 'Nurse:') !!}
    {!! Form::select('nurse_id', $nurses->mapWithKeys(function ($nurses) {
        return [$nurses->id => $nurses->first_name . ' ' . $nurses->surname . ' ' . $nurses->other_names];
    })->prepend('Select Nurse', ''), old('nurse_id', session('nurse_id')), ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor:') !!}
    {!! Form::select('doctor_id', $doctors->mapWithKeys(function ($doctors) {
        return [$doctors->id => $doctors->first_name . ' ' . $doctors->surname . ' ' . $doctors->other_names];
    })->prepend('Select Doctor', ''), old('doctor_id', session('doctor_id')), ['class' => 'form-control', 'required' => 'required']) !!}
</div>

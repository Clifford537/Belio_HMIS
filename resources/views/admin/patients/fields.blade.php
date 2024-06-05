<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', old('first_name', session('first_name')), ['class' => 'form-control', 'maxlength' => 100, 'required' => 'required']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', old('surname', session('surname')), ['class' => 'form-control', 'maxlength' => 100, 'required' => 'required']) !!}
</div>

<!-- Other Names Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_names', 'Other Names:') !!}
    {!! Form::text('other_names', old('other_names', session('other_names')), ['class' => 'form-control', 'maxlength' => 100]) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', old('gender', session('gender')), ['class' => 'form-control', 'maxlength' => 10, 'required' => 'required']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', old('phone_number', session('phone_number')), ['class' => 'form-control', 'maxlength' => 50, 'required' => 'required']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', old('address', session('address')), ['class' => 'form-control', 'maxlength' => 50, 'required' => 'required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', old('email', session('email')), ['class' => 'form-control', 'maxlength' => 50, 'required' => 'required']) !!}
</div>

<!-- Blood Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('blood_group', 'Blood Group:') !!}
    {!! Form::text('blood_group', old('blood_group', session('blood_group')), ['class' => 'form-control', 'maxlength' => 10, 'required' => 'required']) !!}
</div>

<!-- Emergency Contact Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_contact_name', 'Emergency Contact Name:') !!}
    {!! Form::text('emergency_contact_name', old('emergency_contact_name', session('emergency_contact_name')), ['class' => 'form-control', 'maxlength' => 100, 'required' => 'required']) !!}
</div>

<!-- Emergency Contact Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_contact_phone', 'Emergency Contact Phone:') !!}
    {!! Form::text('emergency_contact_phone', old('emergency_contact_phone', session('emergency_contact_phone')), ['class' => 'form-control', 'maxlength' => 100, 'required' => 'required']) !!}
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

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 10]) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'required', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
</div>

<!-- Blood Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('blood_group', 'Blood Group:') !!}
    {!! Form::text('blood_group', null, ['class' => 'form-control', 'maxlength' => 10, 'maxlength' => 10]) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Other Names Field -->
<div class="form-group col-sm-6">
    {!! Form::label('other_names', 'Other Names:') !!}
    {!! Form::text('other_names', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Emergency Contact Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_contact_name', 'Emergency Contact Name:') !!}
    {!! Form::text('emergency_contact_name', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Emergency Contact Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emergency_contact_phone', 'Emergency Contact Phone:') !!}
    {!! Form::text('emergency_contact_phone', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('status', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('status', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Insurance Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurance_id', 'Insurance Id:') !!}
    {!! Form::select('insurance_id', $insurances->pluck('id', 'id')->prepend('Select', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nurse Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nurse_id', 'Nurse Id:') !!}
    {!! Form::select('nurse_id', $nurses->mapWithKeys(function ($nurses) {
        return [$nurses->id => $nurses->first_name . ' ' . $nurses->surname . ' ' . $nurses->other_names];
    })->prepend('Select nurse', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Doctor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    {!! Form::select('Doctor_id', $doctors->mapWithKeys(function ($doctors) {
        return [$doctors->id => $doctors->first_name . ' ' . $doctors->surname . ' ' . $doctors->other_names];
    })->prepend('Select Doctor', ''), null, ['class' => 'form-control', 'required']) !!}
</div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 191, 'maxlength' => 191]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 191, 'maxlength' => 191]) !!}
</div>
<div class="form-group col-sm-6">
    <strong>Password:</strong>
    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
</div>
<div class="form-group col-sm-6">
    <strong>Confirm Password:</strong>
    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
</div>

<div class="form-group col-sm-12">
    <strong>Role:</strong>
    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
</div>


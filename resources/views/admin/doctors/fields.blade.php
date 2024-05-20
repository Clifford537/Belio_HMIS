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
    {!! Form::text('address', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 50, 'maxlength' => 50]) !!}
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
    {!! Form::select('specialization_id', $specs->pluck('specialty', 'id')->prepend('Select ', ''), null, ['class' => 'form-control', 'required']) !!}     
</div>

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

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department :') !!}
    {!! Form::select('department_id', $department->pluck('name', 'id')->prepend('Select department', ''), null, ['class' => 'form-control', 'required']) !!}
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
    {!! Form::label('employment_status_id', 'Employment Status Id:') !!}
    {!! Form::select('employment_status_id', $emp_status->pluck('status', 'id')->prepend('Select', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_id', 'Shift Id:') !!}
    {!! Form::select('shift_id', $shift->pluck('day_of_week', 'id')->prepend('Select', ''), null, ['class' => 'form-control', 'required']) !!}
</div>
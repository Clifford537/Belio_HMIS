<!-- Admission Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_id', 'Admission:') !!}
    {!! Form::select('admission_id', $admissions->pluck('id', 'id')->prepend('Select Admission', ''), null, ['class' => 'form-control']) !!}
</div>


<!-- Discharge Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discharge_date', 'Discharge Date:') !!}
    {!! Form::text('discharge_date', null, ['class' => 'form-control','id'=>'discharge_date','required' => 'required']) !!}
</div>


@push('page_scripts')
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#discharge_date').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            });
        });
    </script>
@endpush

<!-- Discharge Instructions Field -->
<div class="form-group col-sm-12">
    {!! Form::label('discharge_instructions', 'Discharge Instructions:') !!}
    {!! Form::text('discharge_instructions', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Discharge Disposition Field -->
<div class="form-group col-sm-12">
    {!! Form::label('discharge_disposition', 'Discharge Disposition:') !!}
    {!! Form::text('discharge_disposition', null, ['class' => 'form-control','id'=>'discharge_date']) !!}
</div>

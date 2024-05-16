<!-- Day Of Week Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_of_week', 'Day Of Week:') !!}
    {!! Form::text('day_of_week', null, ['class' => 'form-control','id'=>'day_of_week']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#day_of_week').datepicker()
    </script>
@endpush

<!-- Time Of Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_of_day', 'Time Of Day:') !!}
    {!! Form::text('time_of_day', null, ['class' => 'form-control']) !!}
</div>
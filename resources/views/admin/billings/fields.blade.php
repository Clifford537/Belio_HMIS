<!-- Patient Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_id', 'Admission:') !!}
    {!! Form::select('admission_id', $admissions->pluck('id', 'id')->prepend('Select Admission', ''), null, ['class' => 'form-control', 'required']) !!} 
</div>


<!-- Billing Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('billing_date', 'Billing Date:') !!}
    {!! Form::text('billing_date', null, ['class' => 'form-control','id'=>'billing_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#billing_date').datepicker()
    </script>
@endpush
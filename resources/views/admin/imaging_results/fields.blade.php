<!-- Imaging Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imaging_type', 'Imaging Type:') !!}
    {!! Form::text('imaging_type', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Imaging Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imaging_date', 'Imaging Date:') !!}
    {!! Form::text('imaging_date', null, ['class' => 'form-control','id'=>'imaging_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#imaging_date').datepicker()
    </script>
@endpush

<!-- Imaging Results Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('imaging_results', 'Imaging Results:') !!}
    {!! Form::textarea('imaging_results', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Technician Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('technician_id', 'Technician Id:') !!}
    {!! Form::number('technician_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Reporting Radiologist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reporting_radiologist', 'Reporting Radiologist:') !!}
    {!! Form::text('reporting_radiologist', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Comments Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comments', 'Comments:') !!}
    {!! Form::textarea('comments', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Image Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_link', 'Image Link:') !!}
    {!! Form::text('image_link', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>
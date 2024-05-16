<!-- Imaging Type Field -->
<div class="col-sm-12">
    {!! Form::label('imaging_type', 'Imaging Type:') !!}
    <p>{{ $imagingResult->imaging_type }}</p>
</div>

<!-- Imaging Date Field -->
<div class="col-sm-12">
    {!! Form::label('imaging_date', 'Imaging Date:') !!}
    <p>{{ $imagingResult->imaging_date }}</p>
</div>

<!-- Imaging Results Field -->
<div class="col-sm-12">
    {!! Form::label('imaging_results', 'Imaging Results:') !!}
    <p>{{ $imagingResult->imaging_results }}</p>
</div>

<!-- Technician Id Field -->
<div class="col-sm-12">
    {!! Form::label('technician_id', 'Technician Id:') !!}
    <p>{{ $imagingResult->technician_id }}</p>
</div>

<!-- Reporting Radiologist Field -->
<div class="col-sm-12">
    {!! Form::label('reporting_radiologist', 'Reporting Radiologist:') !!}
    <p>{{ $imagingResult->reporting_radiologist }}</p>
</div>

<!-- Comments Field -->
<div class="col-sm-12">
    {!! Form::label('comments', 'Comments:') !!}
    <p>{{ $imagingResult->comments }}</p>
</div>

<!-- Image Link Field -->
<div class="col-sm-12">
    {!! Form::label('image_link', 'Image Link:') !!}
    <p>{{ $imagingResult->image_link }}</p>
</div>


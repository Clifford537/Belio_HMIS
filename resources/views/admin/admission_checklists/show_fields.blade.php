<!-- Checklist Field -->
<div class="col-sm-12">
    {!! Form::label('checklist', 'Checklist:') !!}
    <p>{{ $admissionChecklist->checklist }}</p>
</div>

<!-- Ward ID Field -->
<div class="col-sm-12">
    {!! Form::label('ward_id', 'Ward Id:') !!}
    <p>{{ $ward->ward_type_id }}</p>
</div>


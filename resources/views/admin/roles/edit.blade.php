@extends('layouts.app')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h3>
                        Edit Role
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">
            <div class="card-body">
                <div class="row">
                    {!! Form::model($role, ['route' => ['admin.roles.update', $role->id],'method' => 'PATCH']) !!}
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Permission:</strong>
                        <br/>
                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    {{ Form::checkbox('selectAll', 1, false, ['id' => 'selectAll']) }}
                                    Select All
                                </label>
                                <label>
                                    {{ Form::checkbox('selectNone', 1, false, ['id' => 'selectNone']) }}
                                    Select None
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @php $counter = 0 @endphp
                        @foreach($permission as $value)
                            <div class="col-md-3"> <!-- Adjust the column width as needed -->
                                <label>
                                    {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'permission-checkbox']) }}
                                    {{ $value->name }}
                                </label>
                            </div>
                            @php $counter++ @endphp
                            @if($counter % 4 == 0)
                    </div><div class="row">
                        @endif
                        @endforeach
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle "Select All" checkbox
            $('#selectAll').change(function() {
                $('.permission-checkbox').prop('checked', this.checked);
            });

            // Handle "Select None" checkbox
            $('#selectNone').change(function() {
                $('.permission-checkbox').prop('checked', !this.checked);
            });
        });
    </script>
@endsection

<!-- Day Of Week Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_of_week', 'Day Of Week:') !!}
    {!! Form::text('day_of_week', null, ['class' => 'form-control', 'id' => 'day_of_week']) !!}
</div>

@push('page_scripts')
    <!-- Include jQuery if not already included -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap Datepicker JS if not already included -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Include Bootstrap Datepicker CSS if not already included -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <script type="text/javascript">
        $(document).ready(function(){
            $('#day_of_week').datepicker({
                format: 'DD, MM d, yyyy', // Day of the week, full date format
                autoclose: true,
                daysOfWeekDisabled: [0, 6], // Disable Sunday (0) and Saturday (6)
                todayHighlight: true
            }).on('changeDate', function(e) {
                // Show only the day of the week in the input field
                var selectedDate = e.date;
                var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                var dayOfWeek = days[selectedDate.getUTCDay()];
                $(this).val(dayOfWeek);
            });
        });
    </script>
@endpush



<!-- Time Of Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_of_day', 'Time Of Day:') !!}
    {!! Form::text('time_of_day', null, ['class' => 'form-control']) !!}
</div>
@push('page_scripts')
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Include Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <!-- Include Bootstrap Timepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
    <!-- Include Bootstrap Timepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" />
    <script>
        $(document).ready(function(){
            // Initialize the datepicker
            $('#date_of_birth').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            });

            // Initialize the timepicker
            $('#time_of_day').timepicker({
                showMeridian: false,
                defaultTime: false
            });
        });
    </script>
@endpush

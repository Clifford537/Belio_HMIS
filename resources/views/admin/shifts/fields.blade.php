<!-- Day Of Week Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_of_week', 'Day Of Week:') !!}
    {!! Form::text('day_of_week', null, ['class' => 'form-control', 'id' => 'day_of_week']) !!}
</div>

<!-- Time Of Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_of_day', 'Time Of Day:') !!}
    {!! Form::text('time_of_day', null, ['class' => 'form-control', 'id' => 'time_of_day', 'placeholder' => 'Select Time Of Day']) !!}
</div>

@push('page_scripts')
    <!-- Include jQuery if not already included -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Initialize flatpickr for the Day Of Week field -->
    <script type="text/javascript">
        $(document).ready(function(){
            flatpickr("#day_of_week", {
                dateFormat: "l", 
                disable: [
                    function(date) {
                        return (date.getDay() === 0 || date.getDay() === 6);
                    }
                ]
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            flatpickr("#time_of_day", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
                minuteIncrement: 1,
                defaultDate: "today"
            });
        });

  
        function formatDateTime(timeValue) {
            var today = new Date();
            var formattedDate = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
            return formattedDate + ' ' + timeValue;
        }
        
        $('#your_form_id').submit(function(event) {
            var timeValue = $('#time_of_day').val();
            var formattedDateTime = formatDateTime(timeValue);
            $('#time_of_day').val(formattedDateTime);
        });
    </script>
@endpush

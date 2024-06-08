<!-- Imaging Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_type', 'Image Type:') !!}
    {!! Form::select('image_type', ['X-Ray' => 'X-Ray', 'MRI' => 'MRI', 'CT Scan' => 'CT Scan', 'Ultrasound' => 'Ultrasound'], null, ['class' => 'form-control', 'placeholder' => 'Select Image Type']) !!}
</div>

<!-- Imaging Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imaging_date', 'Imaging Date:') !!}
    {!! Form::text('imaging_date', null, ['class' => 'form-control date', 'id' => 'imaging_date', 'placeholder' => 'Select Imaging Date']) !!}
</div>

<!-- Imaging Results Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('imaging_results', 'Imaging Results:') !!}
    {!! Form::textarea('imaging_results', null, ['class' => 'form-control', 'maxlength' => 65535, 'placeholder' => 'Enter Imaging Results']) !!}
</div>

<!-- Technician Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('technician', 'Technician:') !!}
    {!! Form::select('technician', $technician->pluck('first_name', 'id')->prepend('Select Technician', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Reporting Radiologist Field -->
<div class="form-group col-sm-6">
    {!! Form::label('radiologist', 'Radiologist:') !!}
    {!! Form::select('radiologist', $radiologist->pluck('first_name', 'id')->prepend('Select Radiologist', ''), null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Comments Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comments', 'Comments:') !!}
    {!! Form::textarea('comments', null, ['class' => 'form-control', 'maxlength' => 65535, 'placeholder' => 'Enter Comments']) !!}
</div>

<!-- Image Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_link', 'Image Link:') !!}
    {!! Form::text('image_link', null, ['class' => 'form-control', 'maxlength' => 100, 'placeholder' => ' example https://example.com/image.jpg', 'id' => 'image_link']) !!}
    <span id="image_link_error" class="text-danger"></span> 
</div>

@push('page_scripts')
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Include jQuery Validation plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function () {
            // Initialize flatpickr for date field
            $('.date').flatpickr({
                dateFormat: "Y-m-d",
                minDate: "today"
            });
        });

        // Client-side validation for image link
        document.addEventListener('DOMContentLoaded', function () {
            var imageLinkInput = document.getElementById('image_link');
            var imageLinkError = document.getElementById('image_link_error');

            imageLinkInput.addEventListener('input', function () {
                var imageLinkValue = this.value.trim();
                if (imageLinkValue === '') {
                    imageLinkError.textContent = 'Image Link is required';
                } else if (!isValidUrl(imageLinkValue)) {
                    imageLinkError.textContent = 'Please enter a valid URL';
                } else {
                    imageLinkError.textContent = ''; // Clear any previous error messages
                }
            });

            function isValidUrl(url) {
                var pattern = /^(ftp|http|https):\/\/[^ "]+$/;
                return pattern.test(url);
            }
        });
    </script>
@endpush

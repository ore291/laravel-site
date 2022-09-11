<div class="row mb-3">
    <div class="col-12 col-md-6  ">
        <div class="form-group">
            <?php
            $field_name = 'event';
            $field_lable = 'Event';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-md-6  ">

        
        <div class="form-group">
            <?php
            $field_name = 'booking_no';
            $field_lable = 'Booking Number';
            $field_placeholder = $field_lable;
            $required = 'required';
             
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"])}}
        </div>
    </div>

</div>

<div class="row mb-3">
    <div class="col-12 ">
        <div class="form-group">
            <?php
            $field_name = 'live_streaming_link';
            $field_lable = 'Live Streaming Link';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class("form-control ")->attributes(["$required"]) }}
           
        </div>
    </div>
   
</div>
<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'tips';
            $field_lable = __("Tips");
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'odds';
            $field_lable = __("Odd");
            $field_placeholder = $field_lable;
            $required = 'required';
           
            ?>
             {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'date';
            $field_lable = __("Date");
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->date($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'time';
            $field_lable = __("Time");
            $field_placeholder = $field_lable;
            $required = 'required';
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->time($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>






<div></div>


<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />

{{-- @push('after-styles')
    <!-- File Manager -->
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush --}}

@push('after-scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('select2:open', () => {
                document.querySelector('.select2-search__field').focus();
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            // $('.select2-category').select2({
            //     theme: "bootstrap",
            //     placeholder: '@lang('Select an option')',
            //     minimumInputLength: 2,
            //     allowClear: true,
            //     ajax: {
            //         url: '{{ route('backend.categories.index_list') }}',
            //         dataType: 'json',
            //         data: function(params) {
            //             return {
            //                 q: $.trim(params.term)
            //             };
            //         },
            //         processResults: function(data) {
            //             return {
            //                 results: data
            //             };
            //         },
            //         cache: true
            //     }
            // });

            // $('.select2-tags').select2({
            //     theme: "bootstrap",
            //     placeholder: '@lang('Select an option')',
            //     minimumInputLength: 2,
            //     allowClear: true,
            //     ajax: {
            //         url: '{{ route('backend.tags.index_list') }}',
            //         dataType: 'json',
            //         data: function(params) {
            //             return {
            //                 q: $.trim(params.term)
            //             };
            //         },
            //         processResults: function(data) {
            //             return {
            //                 results: data
            //             };
            //         },
            //         cache: true
            //     }
            // });
        });
    </script>

    <!-- Date Time Picker & Moment Js-->
    <script type="text/javascript">
        $(function() {
            $('.datetime').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                icons: {
                    time: 'far fa-clock',
                    date: 'far fa-calendar-alt',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'far fa-calendar-check',
                    clear: 'far fa-trash-alt',
                    close: 'fas fa-times'
                }
            });
        });
    </script>
@endpush

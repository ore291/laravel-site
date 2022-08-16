<div class="row mb-3">
    <div class="col-12 col-md-6  ">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = 'Name';
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
            $field_name = 'emblem';
            $field_lable = 'Image';
            $field_placeholder = $field_lable;
            if (Isset($edit)) {
                $required = false;
            } else {
                $required = 'required';
            }
            
      
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control ')->attributes(["$required"])->acceptImage() }}
        </div>
    </div>

</div>

<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'country';
            $field_lable = 'Country';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class("form-control ")->attributes(["$required"]) }}
           
        </div>
    </div>
    <div class="col-12 col-md-6  ">
        <div class="form-group">
            <?php
            $field_name = 'code';
            $field_lable = 'League Code';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control ')->attributes(["$required"]) }}
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

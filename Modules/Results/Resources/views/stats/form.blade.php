<div class="row mb-3">
    <div class="col-12 col-md-6  ">
        <div class="form-group">
            <?php
            $field_name = 'percent';
            $field_lable = "Winning Rate";
            $field_placeholder = $field_lable;
            $required = "";
          
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-md-6  ">

        
        <div class="form-group">
            <?php
            $field_name = 'odds';
            $field_lable = 'Todays Odd';
            $field_placeholder = $field_lable;
            $required = '';
             
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"])}}
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

   
@endpush

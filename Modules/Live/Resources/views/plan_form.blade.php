<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'plans[]';
            $field_lable = 'plans';
            $field_placeholder = $field_lable;
            $required = 'required';
            $select_options = $plans
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            <select required name="plans[]" id="" class="form-control select2" multiple>
                @foreach ($plans as $plan)
                    <option  class="elipsis" value="{{ $plan->id }}">{{ $plan->name }}
                    </option>
                @endforeach
            </select>
            {{-- {{ html()->multiselect($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }} --}}
        </div>
    </div>
   

</div>











<!-- Select2 Library -->
<x-library.select2 />


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

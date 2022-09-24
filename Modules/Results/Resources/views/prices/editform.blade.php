<div class="row mb-3">
    <div class="col-12   ">
        <div class="form-group">
            <?php
            $field_name = 'currency';
            $field_lable = 'Countries Currency';
            $field_placeholder = __('Select an option');
            $required = 'required';
            $select_options = $currencies;
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>


</div>

@foreach ($plans as $plan)
    <h3 class="my-1">{{$plan->name}}</h3>
    <input type="hidden" name="{{'plans' . '[' . $plan->name .  ']' .  '[id]'}}" value="{{$plan->id}}">
    <input type="hidden" name="{{'plans' . '[' . $plan->name .  ']' .  '[name]'}}" value="{{$plan->name}}">
    <div class="row mb-3">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="form-group">
                <?php
                $field_name = 'plans' . '[' . $plan->name .  ']' .  '[monthly]';
                $field_lable = 'Monthly Price';
                $field_placeholder = $field_lable;
                $required = 'required';
                
                ?>
                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
               
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="form-group">
                <?php
                $field_name ='plans' . '[' . $plan->name .  ']' .  '[6months]';
                $field_lable = ' Price Per Six Months';
                $field_placeholder = $field_lable;
                $required = 'required';
                
                ?>
                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="form-group">
                <?php
                $field_name = 'plans' . '[' . $plan->name .  ']' . '[yearly]';
                $field_lable = ' Price Per Year';
                $field_placeholder = $field_lable;
                $required = 'required';
                
                ?>
                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
            </div>
        </div>
    </div>
@endforeach











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
   
@endpush

<div class="row mb-3">
    <div class="col-12 ">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = 'Name';
            $field_placeholder = 'Name';
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'is_disabled';
            $field_lable = _("Status");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = [
                0 => 'Active',
                1 => "Disabled"
                // 'News' => 'News',
            ];
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'content';
            $field_lable ='Plan Content'
         
        
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required("required") !!}
            {{ html()->textarea($field_name)->placeholder($field_lable)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="form-group">
            <?php
            $field_name = 'n_per_month';
            $field_lable = 'Naira Price Per Month';
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
            $field_name = 'n_per_6months';
            $field_lable = 'Naira Price Per Six Months';
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
            $field_name = 'n_per_year';
            $field_lable = 'Naira Price Per Year';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="form-group">
            <?php
            $field_name = 'k_per_month';
            $field_lable = 'Shilling Price Per Month';
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
            $field_name = 'k_per_6months';
            $field_lable = 'Shilling Price Per Six Months';
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
            $field_name = 'k_per_year';
            $field_lable = 'Shilling Price Per Year';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="form-group">
            <?php
            $field_name = 'd_per_month';
            $field_lable = 'Dollar Price Per Month';
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
            $field_name = 'd_per_6months';
            $field_lable = 'Dollar Price Per Six Months';
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
            $field_name = 'd_per_year';
            $field_lable = 'Dollar Price Per Year';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
        </div>
    </div>
</div>

@if ($plan->sms_plan == 1)
    <div class="row mb-3">
        <div class="col-12 col-md-6 ">
            <div class="form-group">
                <?php
                $field_name = 'n_weekly';
                $field_lable = 'Naira Price Per Week';
                $field_placeholder = $field_lable;
                $required = 'required';
                
                ?>
                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="form-group">
                <?php
                $field_name = 'n_only';
                $field_lable = 'Only Naira Accepted';
                $field_placeholder = $field_lable;
                $required = 'required';
                $select_options = [
                    1 => "YES",
                    0 => "NO",
                ];
                ?>
                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
            </div>
        </div>
    </div>
@endif





<div></div>


<!-- Select2 Library -->
<x-library.select2 />


{{-- @push('after-styles')
    <!-- File Manager -->
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush --}}

@push ('after-scripts')

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
            document.querySelector('.select2-container--open .select2-search__field').focus();
        });

       

    });
</script>

<script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>


<script type="text/javascript">
    CKEDITOR.replace('content', {
        language: '{{App::getLocale()}}',
        defaultLanguage: 'en'
    });

    

   
</script>
@endpush
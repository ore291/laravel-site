<div class="row mb-3">
    <div class="col-12 col-md-6  ">
        <div class="form-group">
            <?php
            $field_name = 'expert_name';
            $field_lable = 'Expert Name';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'image';
            $field_lable = 'Image';
            $field_placeholder = $field_lable;
            $required = false;
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control ')->attributes(["$required"])->acceptImage() }}
        </div>
    </div>

</div>

<div class="row mb-3">
    <div class="col-12 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'bet_site';
            $field_lable = 'Bet Site';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control ')->attributes(["$required"]) }}

        </div>
    </div>
    <div class="col-12 col-md-4  ">
        <div class="form-group">
            <?php
            $field_name = 'booking_no';
            $field_lable = 'Booking Number';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control ')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-md-4  ">
        <div class="form-group">
            <?php
            $field_name = 'bg_color';
            $field_lable = 'Background Color i.e #fff / white';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control ')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'odds';
            $field_lable = 'Odds';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control')->attributes(["$required"]) }}

        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'bet_ad_link';
            $field_lable = 'Ad Link';
            $field_placeholder = $field_lable;
            $required = 'required';
            
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->class('form-control ')->attributes(["$required"]) }}

        </div>
    </div>

</div>







<div class="row mb-3">
    <div class="col-12 col-md-6  ">
        <div class="form-group">
            <?php
            $field_name = 'is_disabled';
            $field_lable = 'Status';
            $field_placeholder = $field_lable;
            $required = 'required';
            $select_options = [
                '0' => 'Active',
                '1' => 'Disabled',
            ];
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
</div>


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


        });
    </script>
@endpush

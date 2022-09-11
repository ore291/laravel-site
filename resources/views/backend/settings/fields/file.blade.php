@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
@endphp

<div class="form-group mb-3 {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}" class='form-label'> <strong>{{ $field['label'] }}</strong> ({{ $field['name'] }})</label> {!! $required_mark !!}
    <input type="{{ $field['type'] }}"
           name="{{ $field['name'] }}"
           class="form-control {{ Arr::get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}"
           id="{{ $field['name'] }}"
           accept="image/png, image/gif, image/jpeg"
           placeholder="{{ $field['label'] }}" {{ $required }}>

    @if ($errors->has($field['name'])) <small class="invalid-feedback">{{ $errors->first($field['name']) }}</small> @endif
</div>

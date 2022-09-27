<div class="text-end">
    @can('edit_' . $module_name)
        <x-buttons.edit route='{!! route("backend.$module_name.edit", $data) !!}' title="{{ __('Edit') }} {{ ucwords(Str::singular($module_name)) }}"
            small="true" />
    @endcan
    @if ($module_name != 'experts')
    <x-buttons.show route='{!! route("backend.$module_name.show", $data) !!}' title="{{ __('Show') }} {{ ucwords(Str::singular($module_name)) }}"
        small="true" />
    @endif
    @if ($module_name != 'plans' or 'experts')
        <x-buttons.delete route='{!! route("backend.$module_name.destroy", $data) !!}'
            title="{{ __('Delete') }} {{ ucwords(Str::singular($module_name)) }}" small="true" />
    @endif
</div>

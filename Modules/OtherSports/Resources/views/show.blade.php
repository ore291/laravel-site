@extends('backend.layouts.app')

@section('title')
    {{ __($module_action) }} {{ __($module_title) }}
@endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item route='{{ route("backend.$module_name.index") }}' icon='{{ $module_icon }}'>
            {{ __($module_title) }}
        </x-backend-breadcrumb-item>
        <x-backend-breadcrumb-item type="active">{{ __($module_action) }}</x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <x-backend.section-header>
                <i class="{{ $module_icon }}"></i> {{ __($module_title) }} <small
                    class="text-muted">{{ __($module_action) }}</small>

                <x-slot name="subtitle">
                    @lang(':module_name Management Dashboard', ['module_name' => Str::title($module_name)])
                </x-slot>
                <x-slot name="toolbar">
                    <x-buttons.return-back />
                    <a href="{{ route("backend.$module_name.index") }}" class="btn btn-secondary" data-toggle="tooltip"
                        title="{{ ucwords($module_name) }} List"><i class="fas fa-list"></i> List</a>
                    @can('edit_' . $module_name)
                        <x-buttons.edit route='{!! route("backend.$module_name.edit", $$module_name_singular) !!}'
                            title="{{ __('Edit') }} {{ ucwords(Str::singular($module_name)) }}" class="ms-1" />
                    @endcan
                </x-slot>
            </x-backend.section-header>

            <hr>

            <div class="row mt-4">

                <div class="col-12 col-md-6">
                    <p>{{ $$module_name_singular->country }}</p>

                    <p>{{ $$module_name_singular->team_a }} vs {{ $$module_name_singular->team_b }}</p>
                    <p>
                        Category : {{ $category->name }}
                    </p>
                    <p>
                        Tips : {{ $$module_name_singular->tips }}
                    </p>
                    <p>
                        Odds : {{ $$module_name_singular->odds }}
                    </p>

                    <p>
                        Date: {{ date('D d,M Y', strtotime($$module_name_singular->date_t)) }}
                    </p>
                    <p>
                        Time: {{ date('h:i A', strtotime($$module_name_singular->time_t)) }}
                    </p>

                    <p>
                        Score :    {{$$module_name_singular->score_a . "  -  " . $$module_name_singular->score_b }}
                    </p>
                  
                    @if ($$module_name_singular->status == 0)
                        <p> status : <span class="btn btn-primary " style="background-color: blue; color: white">Pending</span></p>
                    @elseif ($$module_name_singular->status == 1)
                        <p> status : <span class="btn btn-success" style="background-color: green; color: white">Green</span></p>
                    @else
                        <p> status : <span class="btn btn-danger" style="background-color: red; color: white">Red</span></p>
                    @endif

                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-end text-muted">
                        Updated: {{ $$module_name_singular->updated_at->diffForHumans() }},
                        Created at: {{ $$module_name_singular->created_at->isoFormat('LLLL') }}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endsection

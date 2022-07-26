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

                <div class="col-12 ">
                    <h2 class="my-2">{{ $$module_name_singular->name }}</h2>
                    <table class="table table-striped table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Monthly Price</th>
                                <th scope="col">6 Months Price</th>
                                <th scope="col">Yearly Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Naira</th>
                                <td> {{ $$module_name_singular->n_per_month }}</td>
                                <td> {{ $$module_name_singular->n_per_6months }}</td>
                                <td> {{ $$module_name_singular->n_per_year }}</td>
                            </tr>
                           
                            <tr>
                                <th scope="row">Dollars</th>
                                <td> {{ $$module_name_singular->d_per_month }}</td>
                                <td> {{ $$module_name_singular->d_per_6months }}</td>
                                <td> {{ $$module_name_singular->d_per_year }}</td>
                            </tr>

                        </tbody>
                    </table>

                    @if ($$module_name_singular->sms_plan == 1)
                        <p>
                            Naira Price Per Week : @money($$module_name_singular->n_weekly, 'NGN', true) 
                        </p>
                    @endif



                    {{-- <p>
                        Naira Price Per Month : {{ $$module_name_singular->n_per_month }}
                    </p>
                    <p>
                        Naira Price Per Six Month : {{ $$module_name_singular->n_per_6months }}
                    </p>
                    <p>
                        Naira Price Per Year : {{ $$module_name_singular->n_per_year }}
                    </p> --}}

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

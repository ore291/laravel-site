@extends('backend.layouts.app')

@section('title')
    {{ __($module_action) }} {{ __($module_title) }}
@endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ __($module_title) }}
        </x-backend-breadcrumb-item>
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
                    @can('add_' . $module_name)
                        <x-buttons.create route='{{ route("backend.$module_name.create") }}'
                            title="{{ __('Create') }} {{ ucwords(Str::singular($module_name)) }}" />
                    @endcan

                    {{-- @can('restore_' . $module_name)
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href='{{ route("backend.$module_name.trashed") }}'>
                                <i class="fas fa-eye-slash"></i> View trash
                            </a>
                        </li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                    </ul>
                </div>
                @endcan --}}
                </x-slot>
            </x-backend.section-header>

            <div class="row mt-4">
                <div class="col">
                    <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Country
                                </th>
                                <th>
                                    Currency
                                </th>
                                <th>
                                    Plan Name
                                </th>
                                <th>
                                    Monthly Price
                                </th>
                                <th>
                                    6months Price
                                </th>
                                <th>
                                    Yearly Price
                                </th>

                                {{-- <th class="text-center d-flex ">
                                    curr_code
                                </th>
                                <th>
                                  Date
                                </th> --}}
                               



                                {{-- <th class="text-end">
                                    Action
                                </th> --}}
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-7">
                    <div class="float-left">

                    </div>
                </div>
                <div class="col-5">
                    <div class="float-end">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-styles')
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}">
@endpush

@push('after-scripts')
    <!-- DataTables Core and Extensions -->
    <script type="text/javascript" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>

    <script type="text/javascript">
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: true,
            responsive: true,
            ajax: '{{ route("backend.$module_name.index_data") }}',
            columns: [{
                    data: 'id',
                    name: 'id',
                    searchable: false
                },
                 {
                     data: 'country_name',
                     name: 'country_name',
                 },
                 {
                     data: 'currency',
                     name: 'currency',
                 },
                 {
                     data: 'plan_name',
                     name: 'plan_name',
                 },
                 {
                     data: 'monthly',
                     name: 'monthly',
                 },
                 {
                     data: '6months',
                     name: '6months',
                 },
                 {
                     data: 'yearly',
                     name: 'yearly',
                 },
                
                // {
                //     data: 'status',
                //     name: 'status',
                //     render: function(data) {
                //         if(data == 0){
                //             return `<i class="fa fa-times-circle fa-2x text-danger me-1 mr-1"></i> <p>Red</p>`
                //         }else{
                //             return `<i class="fa fa-check-circle fa-2x text-success me-1 mr-1"></i> <p>Green</p>`
                //         }
                       
                //     },

                // },
                // {
                //     data: 'date',
                //     name: 'date',

                // },

                // {
                //     data: 'action',
                //     name: 'action',
                //     orderable: false,
                //     searchable: false
                // }
            ]
        });
    </script>
@endpush

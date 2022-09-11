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

                </x-slot>
            </x-backend.section-header>
            <hr>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <p>
                <strong>

                    {{ $user->name }}

                </strong>
            </p>
            <p>{{ $user->email }}</p>
            <p>{{ $user->mobile }}</p>

            <div>
                <ul class="list-unstyled">
                    @foreach ($subs as $sub)
                        <li class="d-flex align-items-center ">
                            <span>{{ label_case($sub->plan_name) }} - </span>
                            <div class="ml-2 ms-4 text-nowrap">
                                @if (Carbon\Carbon::now()->between($sub->start_date, $sub->end_date))
                                    <span class="text-nowrap">Expires On

                                        {{ date('D, M d Y', strtotime($sub->end_date)) }}
                                    </span>
                                @else
                                    <span class="text-danger">Expired</span>
                                @endif
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>




            <form action="{{ '/admin/upgrade-user/' . $user->id }}" method="POST">
                @method('PUT')
                @csrf

                <div class="row mt-4">
                    <div class="col-12 col-md-6 ">
                        <div class="form-group">
                            <?php
                            $field_name = 'plan';
                            $field_lable = __('Plan');
                            $field_placeholder = 'Select a plan to upgrade user';
                            $required = 'required';
                            $select_options = $plans;
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <?php
                            $data = [
                                'w' => 'Weekly',
                                'm' => 'Monthly',
                                '6m' => '6 Months',
                                'y' => 'Yearly',
                            ];
                            $field_name = 'duration';
                            $field_lable = __('Plan');
                            $field_placeholder = 'Select a duration';
                            $required = 'required';
                            $select_options = $data;
                            ?>
                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        {{-- <button class="btn btn-success" type="submit">Save</button> --}}
                        <div class="form-group">
                            {{ html()->submit($text = icon('fas fa-save') . ' Save')->class('btn btn-success') }}
                        </div>
                    </div>


                </div>
            </form>






            <!--/.col-->

            <!--/.row-->
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{-- <small class="float-end text-muted">
                    Updated: {{$user->updated_at->diffForHumans()}},
                    Created at: {{$user->created_at->isoFormat('LLLL')}}
                </small> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

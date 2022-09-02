@extends('frontend.layouts.app')

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
    <div class="max-w-6xl mx-auto p-5">
        {{-- <h1 class="text-center text-3xl font-semibold my-2"></h1> --}}
        <div class="grid grid-cols-3 gap-5 mb-20">
            <div class=" col-span-2 flex flex-col items-center justify-center bg-gray-900 py-10">
                <!-- Component Start -->
                <h1 class="text-lg text-gray-400 font-medium">LIVE EVENTS</h1>
                <div class="flex flex-col mt-6">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden sm:rounded-lg">
                                <table class="min-w-full text-sm text-gray-400">
                                    <thead class="bg-gray-800 text-xs uppercase font-medium">
                                        <tr>
                                            <th></th>
                                            <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                                Event
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                                Booking Code
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                                Live Streaming Link
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-gray-800">
                                        @forelse ($$module_name as $event)
                                            <tr class="bg-black bg-opacity-20">
                                                <td class="pl-4">
                                                   {{$loop->index + 1}}
                                                </td>
                                                <td class="flex px-6 py-4 whitespace-nowrap">
                                                  
                                                    <span class="ml-2 font-medium">{{$event->event}}</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{$event->booking_no}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <a class="hover:text-green-400" href="{{$event->live_streaming_link}}">{{$event->live_streaming_link}}</a>
                                                </td>


                                            </tr>
                                        @empty
                                        <p>No live events available.</p>
                                        @endforelse


                                    </tbody>
                                </table>
                                {{ $$module_name->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Component End  -->
            </div>
            <div id="fs-standings"></div>
            <script>
                (function(w, d, s, o, f, js, fjs) {
                    w['fsStandingsEmbed'] = o;
                    w[o] = w[o] || function() {
                        (w[o].q = w[o].q || []).push(arguments)
                    };
                    js = d.createElement(s), fjs = d.getElementsByTagName(s)[0];
                    js.id = o;
                    js.src = f;
                    js.async = 1;
                    fjs.parentNode.insertBefore(js, fjs);
                }(window, document, 'script', 'mw', 'https://cdn.footystats.org/embeds/standings.js'));
                mw('params', {
                    leagueID: 7704
                });
            </script>
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
                    data: 'event',
                    name: 'event',

                },
                {
                    data: 'booking_no',
                    name: 'booking_no',

                },
                {
                    data: 'live_streaming_link',
                    name: 'live_streaming_link',

                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    </script>
@endpush

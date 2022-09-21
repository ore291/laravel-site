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
    <div class="p-2 max-w-5xl mx-auto">
        {{-- <h1 class="text-center text-3xl font-semibold my-2"></h1> --}}
        <h1 class="text-3xl my-3 text-gray-400 font-medium text-center">LIVE EVENTS</h1>
        <div class=" lg:col-span-2  bg-gray-900 pb-10">
            <!-- Component Start -->



            <div class="shadow  sm:rounded-lg  mt-2 p-2 overflow-x-auto relative w-full">
                <table class="table-auto  text-sm text-gray-400 overflow-scroll w-full">
                    <thead class="bg-gray-800 text-xs uppercase font-normal">
                        <tr>
                            <th></th>
                            <th scope="col" class="px-1 py-3 text-left tracking-wider whitespace-nowrap">
                                Event
                            </th>
                            <th scope="col" class="px-1 py-3 text-left tracking-wider  whitespace-nowrap">
                                Booking Code
                            </th>
                            <th scope="col" class="px-1 py-3 text-left tracking-wider  whitespace-nowrap">
                                Live Streaming Link
                            </th>
                            <th scope="col" class="px-1 py-3 text-left tracking-wider whitespace-nowrap">
                                Tips
                            </th>
                            <th scope="col" class="px-1 py-3 text-left tracking-wider whitespace-nowrap">
                                Odds
                            </th>
                            <th scope="col" class="px-1 py-3 text-left tracking-wider whitespace-nowrap">
                                Date
                            </th>
                            <th scope="col" class="px-1 py-3 text-left tracking-wider whitespace-nowrap">
                                Time
                            </th>


                        </tr>
                    </thead>
                    <tbody class="bg-gray-800">
                        @forelse ($$module_name as $event)
                            <tr class="bg-black bg-opacity-20 text-left">
                                <td class="pl-1">
                                    {{ $loop->index + 1 }}
                                </td>
                                <td class="flex px-1 py-4 whitespace-nowrap">

                                    <span class=" font-medium">{{ $event->event }}</span>
                                </td>
                                <td class="px-1 py-4 whitespace-nowrap">
                                    {{ $event->booking_no }}
                                </td>
                                <td class="px-1 py-4 whitespace-nowrap truncate">
                                    <a class="hover:text-green-400"
                                        href="{{ $event->live_streaming_link }}">{{ $event->live_streaming_link }}</a>
                                </td>
                                <td class=" px-1 py-4 whitespace-nowrap">

                                    <span class=" font-medium">{{ $event->tips }}</span>
                                </td>
                                <td class=" px-1 py-4 whitespace-nowrap">

                                    <span class=" font-medium">{{ $event->odds }}</span>
                                </td>
                                <td class="   px-1 py-4 whitespace-nowrap">
                                    <span class=" font-medium">{{ $event->date }}</span>

                                </td>
                                <td class="   px-1 py-4 whitespace-nowrap">

                                    <span class=" font-medium">{{ date('g:i a', strtotime($event->time)) }}</span>

                                </td>



                            </tr>
                        @empty
                            <p>No live events available.</p>
                        @endforelse


                    </tbody>
                </table>
                <div class="p-2">
                    {{ $$module_name->links() }}
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

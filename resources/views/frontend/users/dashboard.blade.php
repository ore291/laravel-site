@extends('frontend.layouts.app')

@section('title')
    {{ $$module_name_singular->name }}'s Dashboard
@endsection

@section('content')
    <div class="parent md:h-screen md:grid md:grid-cols-6">
        @include('frontend.includes.sidebar')
        <main class="main bg-white text-black md:col-span-5 p-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 p-10 max-w-4xl mx-auto">
                <div class="col-span-2 bg-[whitesmoke] border border-black rounded-t-md p-5">
                    <table width="100%" align="center" cellpadding="10px">
                        <tbody class="text-start">
                            <tr>
                                <th>Name</th>
                                <td id="name">{{ $$module_name_singular->name }}</td>
                            </tr>
                            <tr>
                                <th>User ID</th>
                                <td id="user_id">{{ $$module_name_singular->username }}</td>
                            </tr>
                            <tr>
                                <th>Email Addess</th>
                                <td id="email">{{ $$module_name_singular->email }}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <td id="phone">{{ $$module_name_singular->mobile }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td id="country">{{ $$module_name_singular->country }}</td>
                            </tr>
                            <tr>
                                <th>Joined Date</th>
                                <td id="joined">{{ date('d-m-Y', strtotime($$module_name_singular->created_at)) }}</td>
                            </tr>
                            <tr>
                                <th>Current Level</th>
                                <td id="plan">{{ $userSub->plan_name }}</td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="flex items-center justify-start space-x-3 my-3">
                        <button class="bg-green-700 text-white rounded-md flex items-center justify-center">
                            <a href="{{ route('frontend.users.payment') }}" type="button" class="btn btn-round btn-success"
                                style="padding: 5px;font-weight: 600;"><i class="fa fa-credit-card"></i>&nbsp;Make
                                Payment</a>
                        </button>
                        @auth
                            @if (auth()->user()->id == $$module_name_singular->id)
                                <button class="bg-blue-700 text-white rounded-md flex items-center justify-center">
                                    <a href="{{ route('frontend.users.profileEdit', encode_id($$module_name_singular->id)) }}"
                                        type="button" class="btn btn-round btn-warning"
                                        style="padding: 5px;font-weight: 600;"><i class="fa fa-edit"></i>&nbsp;Edit
                                        Profile</a>
                                </button>
                            @endif
                        @endauth
                    </div>
                </div>

                <div class="bg-[whitesmoke] border border-black rounded-t-md p-2 py-3 flex flex-col divide-y space-y-2">
                    <div class="flex items-center justify-between font-medium ">
                        <span>Subscription</span>
                        <div
                            class="px-5 h-8 flex items-center text-sm justify-center rounded-full text-white bg-red-600 whitespace-nowrap">
                            {{ $userSub->plan_name }}
                        </div>
                    </div>
                    <div class="flex items-center justify-between font-medium ">
                        @if (Carbon\Carbon::now()->between($userSub->start_date, $userSub->end_date))
                            <span>Expires On</span>
                            <div class="">
                                {{ date('D, M d Y', strtotime($userSub->end_date)) }}
                            </div>
                        @else
                            <p class="text-red-600">Expired</p>
                        @endif

                    </div>
                    <div class="py-2">
                        <div
                            class="px-5 h-8 flex items-center cursor-pointer justify-center rounded-md text-white bg-green-600 hover:bg-green-800">
                            <a href="{{ route('frontend.users.payment') }}" class="font-medium ">Upgrade</a>
                        </div>
                    </div>
                    @if (isset($rolloverSub))
                        <div class="flex items-center justify-between font-medium ">
                            <span>Rollover</span>
                            @if (Carbon\Carbon::now()->between($rolloverSub->start_date, $rolloverSub->end_date))
                                <p class="text-green-600">Active</p>
                            @else
                                <p class="text-red-600">Expired</p>
                            @endif

                        </div>
                        <div class="flex items-center justify-between font-medium ">

                            <span>Expires On</span>
                            <div class="">
                                {{ date('D, M d Y', strtotime($rolloverSub->end_date)) }}
                            </div>
                        </div>
                    @else
                        <div class="flex items-center justify-start font-medium ">
                            <span>Rollover</span>
                            {{-- <div class="px-5 h-8 flex items-center justify-center rounded-full text-white bg-red-600">
                                Free Plan
                            </div> --}}
                        </div>
                        <div class="flex items-center justify-between font-medium ">
                            <span>Expires On</span>
                            <div class="">

                            </div>
                        </div>
                        <div class="py-2">
                            <div
                                class="px-5 h-8 flex items-center cursor-pointer justify-center rounded-md text-white bg-green-600 hover:bg-green-800">
                                <a href="{{ route('frontend.users.payment') }}" class="font-medium ">Subscribe</a>
                            </div>
                        </div>
                    @endif

                    @if (isset($smsSub))
                        <div class="flex items-center justify-between font-medium ">
                            <span>SMS</span>
                            @if (Carbon\Carbon::now()->between($smsSub->start_date, $smsSub->end_date))
                                <p class="text-green-600">Active</p>
                            @else
                                <p class="text-red-600">Expired</p>
                            @endif
                        </div>
                        <div class="flex items-center justify-between font-medium ">
                            <span>Expires On</span>
                            <div class="">
                                {{ date('D, M d Y', strtotime($smsSub->end_date)) }}
                            </div>
                        </div>
                    @else
                        <div class="flex items-center justify-start font-medium ">
                            <span>SMS</span>
                            {{-- <div class="px-5 h-8 flex items-center justify-center rounded-full text-white bg-red-600">
                            Free Plan
                        </div> --}}
                        </div>
                        <div class="flex items-center justify-between font-medium ">
                            <span>Expires On</span>
                            <div class="">

                            </div>
                        </div>
                        <div class="py-2">
                            <div
                                class="px-5 h-8 flex items-center cursor-pointer justify-center rounded-md text-white bg-green-600 hover:bg-green-800">
                                <a href="{{ route('frontend.users.payment') }}" class="font-medium ">Subscribe</a>
                            </div>
                        </div>
                    @endif

                    <p class="my-2 p-1 animate-pulse  text-green-500 text-left font-medium text-sm">
                        Upgrade to any of our regular plans to gain access to our VIP section
                    </p>
                </div>
            </div>
        </main>
    </div>
@endsection

@extends('frontend.layouts.app')

@section('title')
    {{ $$module_name_singular->name }}'s Dashboard
@endsection

@section('content')
    <div class="parent md:h-screen grid grid-cols-1 md:grid-cols-6">
        @include('frontend.includes.sidebar')
        <main class="main bg-white text-black md:col-span-5 p-1 md:p-10">
            <div class="bg-gray-100 flex  md:hidden justify-start items-center p-8">
                <div x-data="{ open: false }" class="relative">
                    <button x-on:click="open = true"
                        class="flex items-center bg-white focus:bg-gray-400 text-gray-700 focus:text-gray-900 font-semibold rounded focus:outline-none focus:shadow-inner py-2 px-4"
                        type="button">
                        <span class="mr-1">Menu</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            style="margin-top:3px">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <div x-show="open" x-on:click.away="open = false"
                        class="bg-white text-gray-700 rounded shadow-lg absolute  py-2 mt-1" style="min-width:20rem">
                        <nav>
                            {{-- <a href="/"
                    class="block py-2 px-4 font-semibold rounded transition duration-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-home" aria-hidden="true"></i> <span>Home</span>
                 </a> --}}
                            <a href="/dashboard"
                                class="block py-2 px-4 font-semibold rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <i class="fas fa-home" aria-hidden="true"></i> <span>Dashboard</span>
                            </a>
                            <a href="/live"
                                class="block py-2 px-4 font-semibold rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <i class="fas fa-crown" aria-hidden="true"></i> <span>Livebet 247</span>
                            </a>
                            
                            <a href="{{ setting('telegram_url') }}"
                                class="flex items-center space-x-1 font-semibold  py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <?php
                                echo '<?xml version="1.0" encoding="utf-8"?>';
                                ?>
                                <!DOCTYPE svg
                                    PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg
                                    width="24px" height="24px" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                    xmlns:serif="http://www.serif.com/"
                                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                                    <path id="telegram-1"
                                        d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z" />
                                </svg> <span>Join Our Telegram</span>
                            </a>
                            {{-- <a href="{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}"
                    class="font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                    <i class="fas fa-user" aria-hidden="true"></i> <span>Profile</span>
                  </a> --}}
                            <a href="{{ route('frontend.users.payment') }}"
                                class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <i class="fas fa-credit-card-alt" aria-hidden="true"></i> <span>Make Payment</span>
                            </a>
                            <a href="/predictions"
                                class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <i class="fa fa-futbol-o" aria-hidden="true"></i> <span>Football Tips</span>
                            </a>
                            <a href="/basketball"
                                class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <i class="fas fa-basketball-ball" aria-hidden="true"></i> <span>Basketball Tips</span>
                            </a>
                            <a href="/tennis"
                                class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <i class="fas fa-table-tennis-paddle-ball" aria-hidden="true"></i> <span>Tennis Tips</span>
                            </a>
                            <a href="/ice-hockey"
                                class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <i class="fas fa-hockey-puck" aria-hidden="true"></i> <span>Ice Hockey Tips</span>
                            </a>
                            <a href="/boxing"
                                class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <i class="fas fa-dumbbell" aria-hidden="true"></i> <span>Boxing Tips</span>
                            </a>
                            <a href="/predictions"
                                class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                                <i class="fas fa-trophy" aria-hidden="true"></i> <span>Rollover Tips</span>
                            </a>

                            <div class="h-6 border-y w-full bg-transparent">

                            </div>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class=" font-semibold block py-2 px-4 rounded transition duration-200 hover:bg-red-700 hover:text-white">
                                <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
                            </a>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 p-1 md:p-10 max-w-4xl mx-auto">
                <div class="md:col-span-2 bg-[whitesmoke] border border-black rounded-t-md p-5">
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
                            <a href="{{ route('frontend.users.payment') }}" type="button"
                                class="btn btn-round btn-success" style="padding: 5px;font-weight: 600;"><i
                                    class="fa fa-credit-card"></i>&nbsp;Make
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

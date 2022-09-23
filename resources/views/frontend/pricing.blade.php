@extends('frontend.layouts.app')

@section('title')
    {{ setting('app_name') }}
@endsection

@section('content')
    <div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="max-w-6xl mx-auto  px-2 md:px-10 mt-4">
                <div class="section-title mb-2">
                    <h1
                        style="font-size: 24px; text-align: center; font-family: arial black; font-style: NORMAL; color: black;">
                        PRICING PLAN</h1>
                </div>





                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-0 gap-1 content-center ">
                    @foreach ($plans as $plan)
                        <div class="border border-gray-300 group">
                            <div
                                class="w-full group-odd:bg-[#0066ff91] group-even:bg-[#bb220091] text-white h-12 flex items-center justify-center">
                                <h2 class="text-center font-bold text-xl md:text-2xl">
                                    {{ $plan->name }}
                                </h2>
                            </div>
                            <div class="p-2 !text-center">{!! $plan->content !!}</div>
                            <br>
                            @if ($plan->id !== 1)
                                <ul class="w-full">
                                    @if ($plan->sms_plan === 1 && $country_code === 'ng')
                                        <li class="border first:border-b-0 last:border-t-0 border-y py-0.5"> &nbsp;

                                            <b class="pricez text-green-700 hover:text-blue-600">
                                                <x-money amount="{{ $plan->n_weekly }}" currency="NGN" convert />-
                                                Weekly
                                            </b>

                                        </li>
                                    @endif




                                    <li class="border first:border-b-0 last:border-t-0 border-y py-0.5"> &nbsp; @if ($country_code === 'ng')
                                            <b class="pricez text-green-700 hover:text-blue-600">
                                                <x-money amount="{{ $plan->n_per_month }}" currency="NGN" convert />-
                                                Monthly
                                            </b>
                                        @elseif ($country_code === 'ea')
                                            <b class="pricez text-green-700 hover:text-blue-600">
                                                <x-money amount="{{ $plan->k_per_month }}" currency="KES" convert />-
                                                Monthly
                                            </b>
                                        @else
                                            <b class="pricez text-green-700 hover:text-blue-600">
                                                <x-money amount="{{ $plan->d_per_month }}" currency="USD" convert />-
                                                Monthly
                                            </b>
                                        @endif
                                    </li>

                                    @if ($plan->id !== 6)
                                        <li class="border first:border-b-0 last:border-t-0 border-y py-0.5"> &nbsp; @if ($country_code === 'ng')
                                                <b class="pricez text-green-700 hover:text-blue-600">
                                                    <x-money amount="{{ $plan->n_per_6months }}" currency="NGN" convert />-
                                                    6 Months
                                                </b>
                                            @elseif ($country_code === 'ea')
                                                <b class="pricez text-green-700 hover:text-blue-600">
                                                    <x-money amount="{{ $plan->k_per_6months }}" currency="KES" convert />-
                                                    6 Months
                                                </b>
                                            @else
                                                <b class="pricez text-green-700 hover:text-blue-600">
                                                    <x-money amount="{{ $plan->d_per_6months }}" currency="USD" convert />-
                                                    6 Months
                                                </b>
                                            @endif
                                        </li>
                                    @endif
                                    @if ($plan->id !== 6)
                                        <li class="border first:border-b-0 last:border-t-0 border-y py-0.5"> &nbsp; @if ($country_code === 'ng')
                                                <b class="pricez text-green-700 hover:text-blue-600">
                                                    <x-money amount="{{ $plan->n_per_year }}" currency="NGN" convert />-
                                                    1 year
                                                </b>
                                            @elseif ($country_code === 'ea')
                                                <b class="pricez text-green-700 hover:text-blue-600">
                                                    <x-money amount="{{ $plan->k_per_year }}" currency="KES" convert />
                                                    -
                                                    1 year
                                                </b>
                                            @else
                                                <b class="pricez text-green-700 hover:text-blue-600">
                                                    <x-money amount="{{ $plan->d_per_year }}" currency="USD" convert />
                                                    -
                                                    1 year
                                                </b>
                                            @endif
                                        </li>
                                    @endif
                                </ul>
                            @endif

                            <br>
                            <div class="w-full flex justify-center my-2">
                                <div style="text-align: center;"
                                    class=" w-[140px] h-8 rounded-full bg-blue-600 transform hover:scale-105 transition-all text-white flex items-center justify-center">
                                    <a href="/login"><button>Subscribe Now</button></a></div>
                            </div>

                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection

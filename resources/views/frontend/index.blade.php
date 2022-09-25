@extends('frontend.layouts.app')

@section('title')
    {{ 'Home' }}
@endsection

@section('content')
    {{-- @include('frontend.includes.messages') --}}
    <div class="w-full bg-white">

        <section class="container max-w-6xl mx-auto   py-1 mt-2 ">
            <div class="relative w-full">
                <div class="owl-carousel ">
                    <img src="{{ asset('img/slider/1.png') }}" class="block w-full rounded "
                        alt="..."style="min-height:200px;">
                    <img src="{{ asset('img/slider/2.png') }}" class="block w-full rounded "
                        alt="..."style="min-height:200px;">
                    <img src="{{ asset('img/slider/3.png') }}" class="block w-full rounded "
                        alt="..."style="min-height:200px;">

                </div>
                {{-- <div class="owl-carousel ">
                    <img src="{{ asset('img/betfuse/1.png') }}" class="block w-full rounded "
                        alt="..."style="min-height:200px;">
                    <img src="{{ asset('img/betfuse/2.png') }}" class="block w-full rounded "
                        alt="..."style="min-height:200px;">
                    <img src="{{ asset('img/betfuse/3.png') }}" class="block w-full rounded "
                        alt="..."style="min-height:200px;">

                </div> --}}
            </div>
        </section>

        <section class="container max-w-6xl mx-auto bg-white">
            <script>
                window.name = @json(setting('app_name'));
            </script>

            <div id="vue-div">

                <pred-tabs></pred-tabs>

            </div>

        </section>

        @if (setting('home_page_1') !== null)
            <section class="my-5 md:my-12 p-1 lg:p-0 max-w-6xl mx-auto">
                <a href={{ setting('homepage_1_ad_link') }} class="appearance-none ">
                    <img src="/{{ setting('home_page_1') }}" class="w-full object-cover" alt="">
                </a>
            </section>
        @endif


        <section class="px-1 md:px-0 py-5 md:py-20 max-w-6xl mx-auto ">
            <div class="grid grid-cols-1 md:grid-cols-2 md:divide-x gap-y-10 md:gap-0">
                <div class="w-full text-black">
                    <h4 class="text-center font-bold mb-1 text-2xl">
                        Football Popular Categories
                    </h4>
                    <div class="grid grid-cols-4 place-items-center">
                        <a href="/predictions" class="flex flex-col items-center justify-between">
                            <img src="/img/OVER-15.png" class="w-[50px] md:w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-norrmal text-xs md:text-lg whitespace-nowrap md:font-medium">
                                <b>1.5 Goals</b>
                            </p>
                        </a>
                        <a href="/predictions" class="flex flex-col items-center justify-between">
                            <img src="/img/dc.png" class="w-[50px] md:w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-norrmal text-xs md:text-lg whitespace-nowrap md:font-medium">
                                <b>Double Chance</b>
                            </p>
                        </a>
                        <a href="/predictions" class="flex flex-col items-center justify-between">
                            <img src="/img/draw.png" class="w-[50px] md:w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-norrmal text-xs md:text-lg whitespace-nowrap md:font-medium">
                                <b>Draws</b>
                            </p>
                        </a>

                        <a href="/predictions" class="flex flex-col items-center justify-between">
                            <img src="/img/cs.png" class="w-[50px] md:w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-norrmal text-xs md:text-lg whitespace-nowrap md:font-medium">
                                <b>Correct Score</b>
                            </p>
                        </a>
                    </div>
                    <div class="text-center my-5 md:my-2 flex items-center justify-center">
                        <a href="/predictions"
                            class="rounded font-medium text-xl h-12 w-[250px] bg-red-500 hover:bg-b text-white flex items-center justify-center">
                            View More Categories
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="w-full text-black">
                    <h4 class="text-center font-bold mb-1 text-2xl">
                        Other Sports Popular Categories
                    </h4>
                    <div class="grid grid-cols-4 place-items-center">
                        <a href="/basketball" class="flex flex-col items-center justify-between">
                            <img src="/img/basketball.png" class="w-[50px] md:w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-norrmal text-xs md:text-lg whitespace-nowrap md:font-medium">
                                <b>Basketball</b>
                            </p>
                        </a>
                        <a href="/tennis" class="flex flex-col items-center justify-between">
                            <img src="/img/tennis.png" class="w-[50px] md:w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-norrmal text-xs md:text-lg whitespace-nowrap md:font-medium">
                                <b>Tennis</b>
                            </p>
                        </a>
                        <a href="/boxing" class="flex flex-col items-center justify-between">
                            <img src="/img/boxing-new.png" class="w-[50px] md:w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-norrmal text-xs md:text-lg whitespace-nowrap md:font-medium">
                                <b>Boxing</b>
                            </p>
                        </a>
                        <a href="/ice-hockey" class="flex flex-col items-center justify-between">
                            <img src="/img/icehockey.png" class="w-[50px] md:w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-norrmal text-xs md:text-lg whitespace-nowrap md:font-medium">
                                <b>Ice Hockey</b>
                            </p>
                        </a>

                    </div>
                    <div class="text-center my-5 md:my-2  flex items-center justify-center">
                        <a href="/basketball"
                            class="rounded font-medium text-xl h-12 w-[250px] bg-secBg text-white flex items-center justify-center">
                            View More Categories
                            <i class="fa fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section class="mb-2 mt-5 max-w-6xl mx-auto px-2 md:px-0 bg-[#f9f9f9]">

        <div class="w-full" id="accordion">
            <div class="fantasy_sectionMiddleInnerToggle">
                <div class="" style="text-align: center !important;font-size: 30px; padding: 20px;font-weight: 600;">
                    Subscribe to Premium plan to have direct access to our Expert!</div>

                <div class="fantasy_sectionMiddleCard" style="border-bottom: 6px solid #ffcf26;">


                    <div class="grid grid-cols-1 md:grid-cols-3 place-content-center ">
                        <div class="p-1 text-center flex items-center justify-center ">
                            <div class="expertIcon">
                                <img src="/img/betfuse/img.png" alt="SPORTVERIFIED EXPERT"
                                    style="width:100px !important;">
                            </div>
                        </div>
                        <div class="col-span-2 " style="padding: 6px;">
                            <h6 class="text-center flex items-center justify-center">
                                <span class="text-black capitalize ">
                                    <img class="icoCountryFlag"
                                        style="width:30px;height: 100%; transform: none; margin:5px;"
                                        src="/img/betfuse/fb.png">
                                </span>
                                <span class="text-black uppercase">
                                    {{ setting('app_name') }} EXPERT
                                </span>
                                <small class="text-green-500 float-none"
                                    style="border-radius: .15rem; padding: .30em .4em;font-weight: 500;">FOOTBALL</small>
                            </h6>
                            <p>
                                <small>Our expert gives the best game of the day when you subscribe to Premium
                                    plan</small>
                            </p>

                        </div>
                    </div>
                    <div class="w-full flex items-center justify-center " id="heading"
                        style="width:100%; margin-bottom: 10px;">
                        <a href="/pricing" class="text-center w-full text-white  mt-1 bg-secBg"
                            style=" color:white; font-weight:600; font-size:100%;padding:10px;">Subscribe
                            to Premium plan to Get Access.</a>
                    </div>


                </div>
            </div>
        </div>



    </section>



    <section class="mb-2 mt-5 max-w-6xl mx-auto px-2 md:px-0 bg-[#f9f9f9]">
        <div class="w-full bg-secBg rounded flex justify-start items-center text-secText  py-3 pl-5">
            <h3 class="text-[16px] font-semibold mb-0">TRENDING EVENTS PREDICTIONS</h3>
        </div>
        <div class="w-full bg-white shadow ">
            <h2 class="font-semibold text-sm md:text-2xl text-black p-2 mb-1">
                Today's Football Popular Predictions
            </h2>

            <table class="table-auto w-full">
                <thead class="border-b border-b-black font-semibold text-black">
                    <tr class="p-2 px-5">
                        <th class="text-start  p-2 ml-1">Event</th>
                        <th class="text-start p-2">Tips</th>
                        <th class="text-start p-2 mr-1">Odds</th>
                        <th class="text-start p-2 mr-1">Result</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($trending_pred as $pred)
                        <tr class="even:bg-white odd:bg-[#F2F2F2]">
                            <td>
                                <div class="flex flex-col items-start justify-center pl-2">
                                    <span class="text-sm font-medium">{{ $pred->team_a . ' vs ' . $pred->team_b }}</span>
                                    <div class="flex items-center justify-between space-x-1">
                                        <img src="/svg/{{ $pred->emblem }}" alt="logo" class="w-5 h-5" />
                                        <span>{{ $pred->country }}</span>
                                        <span class=" text-sm ">
                                            : {{ $pred->date_t }} {{ date('g:i A', strtotime($pred->time_t)) }}
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-col items-start justify-center pl-2">
                                    <span class="font-semibold text-sm uppercase ">
                                        {{ $pred->tips }}
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-col items-start justify-center pl-2">
                                    <span class="font-medium text-sm ">
                                        {{ $pred->odds }}
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="flex flex-col items-start justify-center pl-2">
                                    <span class="font-semibold text-sm uppercase ">
                                        {{ $pred->score_a . ' - ' . $pred->score_b }}
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p>No Predictions available </p>
                    @endforelse


                </tbody>
            </table>
        </div>
    </section>

    <section class="mt-5  md:mt-20 mb-5 max-w-6xl mx-auto px-2 md:px-0 bg-[#f9f9f9]">
        <div class="w-full bg-secBg rounded flex justify-start items-center text-secText  py-3 pl-5">
            <h3 class="text-sm md:text-lg font-semibold mb-0">UPCOMING PREDICTIONS</h3>
        </div>
        <div class="w-full bg-white shadow ">

            <table class="table-auto w-full border-spacing-2 ">
                <thead class="border-b border-b-black font-semibold text-black">
                    <tr class="p-2 md:px-5">
                        <th class="text-start  p-2 ">Event</th>
                        <th class="text-start p-2">Tips</th>
                        <th class="text-start p-2 ">Odds</th>
                        <th class="text-start p-2 ">Result</th>
                    </tr>
                </thead>
                @if (count($upcoming_pred) < 1)
                    <tbody class="text-sm">No Predictions available for Today</tbody>
                @else
                    <tbody>
                        @foreach ($upcoming_pred as $pred)
                            <tr class="even:bg-white odd:bg-[#F2F2F2]">
                                <td>
                                    <div class="flex flex-col items-start justify-center pl-2">
                                        <span
                                            class="text-sm font-medium">{{ $pred->team_a . ' vs ' . $pred->team_b }}</span>
                                        <div class="flex items-center justify-between space-x-1">
                                            <img src="/svg/{{ $pred->emblem }}" alt="logo" class="w-5 h-5" />
                                            <span>{{ $pred->country }}</span>
                                            <span class=" text-sm ">
                                                : {{ date('g:i A', strtotime($pred->time_t)) }}
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-col items-start justify-center pl-2">
                                        <span class="font-semibold text-sm uppercase ">
                                            {{ $pred->tips }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-col items-start justify-center pl-2">
                                        <span class="font-medium text-sm ">
                                            {{ $pred->odds }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="flex flex-col items-start justify-center pl-2">
                                        <span class="font-semibold text-sm uppercase ">
                                            {{ $pred->score_a . ' - ' . $pred->score_b }}
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                @endif

            </table>
        </div>
    </section>

    @if (setting('home_page_2') !== null)
        <section class="my-5 md:my-12 p-1 lg:p-0 max-w-6xl mx-auto">
            <a href={{ setting('homepage_2_ad_link') }} class="appearance-none ">
                <img src="/{{ setting('home_page_2') }}" class="w-full object-cover" alt="">
            </a>
        </section>
    @endif

    <section class="my-2 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 gap-x-10 py-20">
            <div class="bg-black flex flex-col items-center justify-between text-white font-semibold p-5">
                <h4 class="text-center text-2xl ">DON'T GAMBLE, INVEST.</h4>
                <p class="text-white text-center px-2" style="font-size:15px;">
                    <small class="text-[15px]">The investment scheme is recommended for serious bettors who believe in the
                        smart way of making
                        profit steadily. In this scheme, we provide not less than 2.00 odds daily.</small>
                </p>

                <div class="flex items-center justify-center mt-5 bg-[#198754] text-white">
                    <a href="/register" class=" h-8 flex-justify-center items-center rounded-sm px-2 py-1">
                        JOIN NOW
                    </a>
                </div>


            </div>

            <div class="bg-[#000b2b] flex flex-col items-center justify-between text-white font-semibold p-5">

                <div class="part-team w-full text-white pb-2 pt-2">



                    <div class="result-class text-left">
                        <div class="ti text-center">
                            <h4 class="mt-0 mb-0 font-bold text-2xl">Results</h4>
                        </div>
                        <ul class="flex justify-between mt-3" style="padding:0px;">

                            @forelse ($results as $result)
                                <li class="flex flex-col items-center justify-between  text-center"
                                    style="margin-right:5px;">

                                    {{-- <span class="text-white" style="font-size:12px;">18:00</span><br> --}}
                                    @if ($result->status == 0)
                                        <i class="fa fa-times-circle" style="color:red;font-size: 25px;"></i>
                                    @else
                                        <i class="fa fa-check-circle" style="color:green;font-size: 25px;"></i>
                                    @endif

                                    <span class="text-white mt-2" style="font-size:14px;">{{ $result->date }}</span><br>

                                </li>
                            @empty
                                <p>No Results Yet</p>
                            @endforelse






                        </ul>


                        <style type="text/css">
                            .blink_me,
                            #ball {
                                animation: blinker 3s linear infinite;
                            }

                            @keyframes blinker {
                                50% {
                                    opacity: 0;
                                }
                            }
                        </style>
                    </div>

                </div>
                <div class="grid grid-cols-3 mt-3 justify-between w-full mb-10">
                    <div class="col-span-2 text-center acc-profit">
                        <p class="text-white">

                            <b>Well analyzed by Experts, with
                                Up to <span style="color: #87CEFA">{{ $perc->value }}%</span> Accuracy.</b>
                        </p>
                    </div>
                    <div class="flex items-center    flex-col space-y-1">
                        <div class="match-time text-center">
                            <span class="mb-2 text-white">Today's Odd</span>
                            <span style="color:white;font-weight:bold;" class="blink_me">

                                {{ $d_odd->value }}

                            </span>
                        </div> <a href="/login" class="text-xs">
                            <button
                                class="rounded px-3 py-2 bg-[#dc3545] text-white flex items-center justify-center cursor-pointer ">

                                Get Access Now


                            </button> </a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="my-2 max-w-6xl mx-auto px-2 md:px-0 bg-[#f9f9f9]">
        <div class="w-full bg-secBg rounded flex justify-start items-center text-secText  py-3 pl-5">
            <h3 class="text-sm font-semibold mb-0">LATEST PREDICTION RESULTS</h3>
        </div>
        <div class="w-full bg-white shadow ">

            <table class="table-auto w-full">
                <thead class="border-b border-b-black font-semibold text-black">
                    <tr class="p-2 px-5 text-center">
                        <th class="text-center  p-2 ">Date</th>
                        <th class="text-center p-2">Event</th>
                        <th class="text-center p-2 ">Prediction</th>
                        <th class="text-center p-2 ">Result</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($results_pred as $pred)
                        <tr class="even:bg-white py-1 odd:bg-[#F2F2F2]">
                            <td class="text-center">

                                {{ date('d M, Y', strtotime($pred->date_t)) }}

                            </td>

                            <td class="text-center">


                                <span class="text-sm font-medium">{{ $pred->team_a . ' vs ' . $pred->team_b }}</span>


                            </td>
                            <td class="text-center">

                                <span class="text-sm uppercase font-medium">
                                    {{ $pred->tips }}
                                </span>

                            </td>
                            <td class="text-center">

                                <span class="font-semibold text-sm uppercase ">
                                    {{ $pred->score_a . ' - ' . $pred->score_b }}
                                </span>

                            </td>
                        </tr>
                    @empty
                        <p class="p-2">No Results available </p>
                    @endforelse

                </tbody>
            </table>
        </div>
    </section>

    @if (setting('home_page_3') !== null)
        <section class="my-5 md:my-12 p-1 lg:p-0 max-w-6xl mx-auto">
            <a href={{ setting('homepage_3_ad_link') }} class="appearance-none ">
                <img src="/{{ setting('home_page_3') }}" class="w-full object-cover" alt="">
            </a>
        </section>
    @endif

    <section class="my-5 p-1 lg:p-0 max-w-6xl mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-8 mt-4">
                    <div class="section-title mb-2">
                        <h1 class="text-2xl font-bold text-left text-secBg">FREE FOOTBALL PREDICTION SITE
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <p class="text-justify">
                        <b style="color: green;">{{ setting('app_name') }}</b> is the best free Soccer prediction site in
                        the
                        world and the site that predicts Soccer matches correctly. We are the most accurate Soccer
                        prediction site providing our users with the most accurate Soccer predictions around the world.


                    <p>
                        We provide the best Soccer predictions and sport betting tips daily. We select the most reliable
                        Soccer betting tips and we carefully analyze our predictions especially our Sure 2, Banker, Sure 3,
                        Sure 5, Combo, BTS and more to give you the best.
                    </p>

                    <p>
                        We provide our subscribers with the best and most accurate Soccer predictions making us the best
                        Soccer prediction site in the world.
                    </p>


                    </p>

                    <p class="text-justify">
                        Not everyone has what it takes to be a successful punter. Which, therefore, has raised a lot of
                        questions from soccer fans all over the world to find perfect solution by searching the best
                        prediction site that provides 100% guaranteed Soccer predictions.. Many Soccer fans all over the
                        world are tired of losing their bets as a result of not seeking guidance from reliable Soccer
                        prediction site like ours.
                    </p>
                    <p class="text-justify">
                        But don't worry, you're one of the luckiest Soccer fan for using {{ setting('app_name') }}.com as
                        your
                        best guide to Soccer betting and predictions.

                        As one of the best Soccer prediction site in the world, we offer our visitors and subscribers with
                        sure Soccer predictions and the most accurate Soccer predictions everyday to maximize profits.
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-8 mt-4">
                    <div class="section-title mb-2">
                        <h2 class=" text-2xl font-bold text-left text-secBg">ACCURATE SOCCER PREDICTION -
                            HOW IS THIS
                            POSSIBLE?</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <p class="text-justify">
                        <b style="color: green;">{{ setting('app_name') }}</b> understands the attraction of this league
                        and
                        provides expert analysis and Soccer betting tips, to ensure you come out tops with your wagers.

                        <b style="color: green;">{{ setting('app_name') }}</b> works round the clock to grow your Soccer
                        betting tips bankroll. When you engage with our platform, you can rest assure that you see things
                        from the lens of our informed experts. You need not waste your time and resources in endless
                        searches for Fixed matches or Fixed games, because none exist. All you need to do is tune in to our
                        daily list of best Soccer betting predictions and smile to the land of consistent winnings.


                    </p>
                    <p class="text-justify">
                        You can check our Pricing Plans to see our pricing for our best winning Soccer prediction
                        categories.

                        To learn more on how to win with sure Soccer predictions, visit our how to win page and learn more.

                        Thank you for choosing {{ setting('app_name') }} as the best Soccer prediction site. We hope our
                        team
                        have served you better? Contact us for any enquries below.
                        <br>Email : <b style="color:green;">{{ setting('email') }}</b>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-8 mt-4">
                    <div class="section-title mb-2">
                        <h2 class="text-2xl font-bold text-left text-secBg" style="text-transform: uppercase;">Best
                            Prediction Site In The World</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <p class="text-justify">{{ setting('app_name') }} is the best prediction site in the world. Our
                        website
                        works to help you win with the best Soccer tips in the industry. Both Amateur and Professional
                        tipsters can get fast, reliable and efficient Soccer betting tips from our site. We understands the
                        attraction of league and provides expert analysis and Soccer betting tips, to ensure you come out
                        tops with your wagers.</p>
                    <p class="text-justify">
                        At <b style="color: green;"> {{ setting('app_name') }}</b>, we offer the best betting tips and
                        guide on
                        how to make money steadily from Soccer betting. Example of scheme offered is Soccer investment
                        scheme where we unveil the world of Soccer investment and guide you on how to increase your profits
                        immediately! Our investment tracker shows our recent performance as we encourage transparency in
                        Soccer investments and also Rollover Bet which serves as a cash builder. This differs them from us
                        all other forecasting platform across the world. Our platform also gives punters the heads up by
                        predicting sure Soccer predictions for tomorrow with our Upcoming Tips. We also have a store where
                        punters can use in making selections for Soccer predictions/tips for the weekend.
                    </p>
                </div>
            </div>


        </div>
    </section>
@endsection

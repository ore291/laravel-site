@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    {{-- @include('frontend.includes.messages') --}}
    <div class="w-full bg-white">

        <section class="container max-w-6xl mx-auto   py-1 mt-2 ">
            <div class="relative w-full">
                <div class="owl-carousel ">
                    <img src="{{ asset('img/slider/5.jpg') }}" class="block w-full rounded"
                        alt="..."style="min-height:150px;">
                    <img src="{{ asset('img/slider/oslide4.jpg') }}" class="block w-full rounded"
                        alt="..."style="min-height:150px;">
                    <img src="{{ asset('img/slider/oslide11.jpg') }}" class="block w-full rounded"
                        alt="..."style="min-height:150px;">
                    <img src="{{ asset('img/slider/slide3.jpg') }}" class="block w-full rounded"
                        alt="..."style="min-height:150px;">
                    <img src="{{ asset('img/slider/slidenew.jpg') }}" class="block w-full rounded"
                        alt="..."style="min-height:150px;">
                </div>
            </div>
        </section>

        <section class="container max-w-6xl mx-auto bg-white">

            <div id="vue-div">

                <pred-tabs></pred-tabs>

            </div>

        </section>

        <section class="py-20 max-w-6xl mx-auto ">
            <div class="grid grid-cols-1 md:grid-cols-2 md:divide-x ">
                <div class="w-full text-black">
                    <h4 class="text-center font-semibold text-2xl">
                        Football Popular Categories
                    </h4>
                    <div class="grid grid-cols-4 place-items-center">
                        <a href="/predictions" class="flex flex-col items-center justify-center">
                            <img src="/img/OVER-15.png" class="w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-medium"><b>1.5 Goals</b></p>
                        </a>
                        <a href="/predictions" class="flex flex-col items-center justify-center">
                            <img src="/img/draw.png" class="w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-medium"><b>Draws</b></p>
                        </a>
                        <a href="/predictions" class="flex flex-col items-center justify-center">
                            <img src="/img/Double-Chance-new.png" class="w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-medium"><b>Double Chance</b></p>
                        </a>
                        <a href="/predictions" class="flex flex-col items-center justify-center">
                            <img src="/img/Correct-Score-new.png" class="w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-medium"><b>1.5 Goals</b></p>
                        </a>
                    </div>
                    <div class="text-center mt-2 flex items-center justify-center">
                        <a href="/predictions"
                            class="rounded font-semibold text-xl h-12 w-[250px] bg-red-500 hover:bg-red-600 text-white flex items-center justify-center">
                            View More Categories
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="w-full text-black">
                    <h4 class="text-center font-semibold text-2xl">
                        Other Sports Popular Categories
                    </h4>
                    <div class="grid grid-cols-4 place-items-center">
                        <a href="/basketball" class="flex flex-col items-center justify-center">
                            <img src="/img/Basketball-1.png" class="w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-medium"><b>Basketball</b></p>
                        </a>
                        <a href="/boxing" class="flex flex-col items-center justify-center">
                            <img src="/img/boxing.png" class="w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-medium"><b>Boxing</b></p>
                        </a>
                        <a href="/ice-hockey" class="flex flex-col items-center justify-center">
                            <img src="/img/Ice-Hockey-1.png" class="w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-medium"><b>Ice Hockey</b></p>
                        </a>
                        <a href="/tennis" class="flex flex-col items-center justify-center">
                            <img src="/img/Tennis-1.png" class="w-[75px]" alt="" srcset="">
                            <p class="text-[#0A58CA] font-medium"><b>Tennis</b></p>
                        </a>
                    </div>
                    <div class="text-center mt-2 flex items-center justify-center">
                        <a href="/predictions"
                            class="rounded font-semibold text-xl h-12 w-[250px] bg-green-500 hover:bg-green-600 text-white flex items-center justify-center">
                            View More Categories
                            <i class="fa fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </div>


    <section class="mt-20 mb-5 max-w-6xl mx-auto px-2 md:px-0 bg-[#f9f9f9]">
        <div class="w-full bg-black rounded flex justify-start items-center text-white  py-3 pl-5">
            <h3 class="text-sm font-semibold mb-0">TRENDING PREDICTIONS</h3>
        </div>
        <div class="w-full bg-white shadow ">
            <h2 class="font-bold text-2xl text-black p-2">
                Today's Football Popular Predictions
            </h2>
            <table class="table-auto w-full border-spacing-2 ">
                <thead class="border-b border-b-black font-semibold text-black">
                    <tr class="p-2 px-5">
                        <th class="text-start  p-2 ml-1">Event</th>
                        <th class="text-start p-2">Tips</th>
                        <th class="text-start p-2 mr-1">Odds</th>
                        <th class="text-start p-2 mr-1">Time</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($trending_pred as $pred)
                    <tr class="even:bg-white odd:bg-[#F2F2F2]">
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="text-sm font-medium">{{$pred->team_a . " vs " . $pred->team_b }}</span>
                                <div class="flex items-center justify-between space-x-1">
                                    <img src="/svg/{{$pred->emblem}}" alt="logo" class="w-5 h-5" />
                                    <span>{{$pred->country}}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="font-semibold text-sm uppercase ">
                                    {{$pred->tips}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="font-medium text-sm ">
                                    {{$pred->odds}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class=" text-sm ">
                                    {{date('g:i A', strtotime($pred->time_t))}}
                                </span>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <p>No Predictions available for Today</p>
                    @endforelse
                   

                </tbody>
            </table>
        </div>
    </section>
    <section class="mb-2 mt-5 max-w-6xl mx-auto px-2 md:px-0 bg-[#f9f9f9]">
        <div class="w-full bg-black rounded flex justify-start items-center text-white  py-3 pl-5">
            <h3 class="text-sm font-semibold mb-0">UPCOMING EVENTS PREDICTIONS</h3>
        </div>
        <div class="w-full bg-white shadow ">

            <table class="table-auto w-full">
                <thead class="border-b border-b-black font-semibold text-black">
                    <tr class="p-2 px-5">
                        <th class="text-start  p-2 ml-1">Event</th>
                        <th class="text-start p-2">Tips</th>
                        <th class="text-start p-2 mr-1">Odds</th>
                        <th class="text-start p-2 mr-1">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($upcoming_pred as $pred)
                    <tr class="even:bg-white odd:bg-[#F2F2F2]">
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="text-sm font-medium">{{$pred->team_a . " vs " . $pred->team_b }}</span>
                                <div class="flex items-center justify-between space-x-1">
                                    <img src="/svg/{{$pred->emblem}}" alt="logo" class="w-5 h-5" />
                                    <span>{{$pred->country}}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="font-semibold text-sm uppercase ">
                                    {{$pred->tips}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="font-medium text-sm ">
                                    {{$pred->odds}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="text-sm ">
                                    {{$pred->date_t}}
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
    <section class="my-2 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 gap-x-10 py-20">
            <div class="bg-black flex flex-col items-center justify-center text-white font-semibold p-5">
                <span class="text-lg font-bold">
                    Rollover Tips <b class="animate-pulse ">( Football )</b>
                </span>
                <p class="text-center text-sm font-bold">
                    The Professional plan is reserved for investors looking to make meaningful profits from low odds
                    accumulators. It has Odds from 1.6 to 2.1 This Plan offers Soccer based on minimal risks.
                </p>
                <p class="text-white pr-2 pl-2 mb-2 pb-1 text-center" style="font-size:14px;">
                    <small>To secure your investment, we employ a highly effective <b
                            style="color:red;font-size:14px;font-weight: 800;">risk management strategy</b>.<br /> Join now
                        to
                        learn more.</small>
                </p>
                <div class="part-team w-full text-white pb-2 pt-2">



                    <div class="result-class text-left">
                        <div class="ti text-center">
                            <h4 class="mt-0 mb-0 font-bold text-2xl">Results</h4>
                        </div>
                        <ul class="flex justify-between mt-3" style="padding:0px;">

                            <li class="inline-block text-center" style="margin-right:5px;">
                                <span class="text-white" style="font-size:13px;">2022-08-01</span><br>
                                <span class="text-white" style="font-size:12px;">18:00</span><br>
                                <i class="fa fa-check-circle" style="color:red;font-size: 20px;"></i>
                            </li>
                            <li class="inline-block text-center" style="margin-right:5px;">
                                <span class="text-white" style="font-size:13px;">2022-08-01</span><br>
                                <span class="text-white" style="font-size:12px;">18:00</span><br>
                                <i class="fa fa-check-circle" style="color:red;font-size: 20px;"></i>
                            </li>
                            <li class="inline-block text-center" style="margin-right:5px;">
                                <span class="text-white" style="font-size:13px;">2022-08-01</span><br>
                                <span class="text-white" style="font-size:12px;">18:00</span><br>
                                <i class="fa fa-check-circle" style="color:red;font-size: 20px;"></i>
                            </li>
                            <li class="inline-block text-center" style="margin-right:5px;">
                                <span class="text-white" style="font-size:13px;">2022-08-01</span><br>
                                <span class="text-white" style="font-size:12px;">18:00</span><br>
                                <i class="fa fa-check-circle" style="color:red;font-size: 20px;"></i>
                            </li>





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
                            <b style="font-size:17px !important;color:red;display:block !important;">
                                75%
                            </b>
                            <b>Winning Rate in the last 30 days</b>
                        </p>
                    </div>
                    <div class="flex items-center    flex-col space-y-1">
                        <div class="match-time text-center">
                            <span class="mb-2 text-white">Today's Odd</span>
                            <span style="color:white;font-weight:bold;" class="blink_me">

                                1.72

                            </span>
                        </div> <a href="account.php" class="text-xs">
                            <button
                                class="rounded px-3 py-2 bg-[#dc3545] text-white flex items-center justify-center cursor-pointer ">

                                Get Access Now


                            </button> </a>
                    </div>
                </div>


            </div>
            <div class="bg-[#000B2B] flex flex-col items-center justify-center text-white font-semibold p-5">
                <span class="text-lg font-bold">
                    Rollover Tips <b class="animate-pulse ">( Other Sport )</b>
                </span>
                <p class="text-center text-sm font-bold">
                    The Professional plan is reserved for investors looking to make meaningful profits from low odds
                    accumulators. It has Odds from 1.6 to 2.1 This Plan offers Boxing,Tennis, Basketball and Ice-Hockey
                    Predictions based on minimal risks.
                </p>
                <p class="text-white pr-2 pl-2 mb-2 pb-1 text-center" style="font-size:14px;">
                    <small>To secure your investment, we employ a highly effective <b
                            style="color:red;font-size:14px;font-weight: 800;">risk management strategy</b>.<br /> Join now
                        to
                        learn more.</small>
                </p>
                <div class="part-team w-full text-white pb-2 pt-2">



                    <div class="result-class text-left">
                        <div class="ti text-center">
                            <h4 class="mt-0 mb-0 font-bold text-2xl">Results</h4>
                        </div>
                        <ul class="flex justify-between mt-3" style="padding:0px;">

                            <li class="inline-block text-center" style="margin-right:5px;">
                                <span class="text-white" style="font-size:13px;">2022-08-01</span><br>
                                <span class="text-white" style="font-size:12px;">18:00</span><br>
                                <i class="fa fa-check-circle" style="color:red;font-size: 20px;"></i>
                            </li>
                            <li class="inline-block text-center" style="margin-right:5px;">
                                <span class="text-white" style="font-size:13px;">2022-08-01</span><br>
                                <span class="text-white" style="font-size:12px;">18:00</span><br>
                                <i class="fa fa-check-circle" style="color:red;font-size: 20px;"></i>
                            </li>
                            <li class="inline-block text-center" style="margin-right:5px;">
                                <span class="text-white" style="font-size:13px;">2022-08-01</span><br>
                                <span class="text-white" style="font-size:12px;">18:00</span><br>
                                <i class="fa fa-check-circle" style="color:red;font-size: 20px;"></i>
                            </li>
                            <li class="inline-block text-center" style="margin-right:5px;">
                                <span class="text-white" style="font-size:13px;">2022-08-01</span><br>
                                <span class="text-white" style="font-size:12px;">18:00</span><br>
                                <i class="fa fa-check-circle" style="color:red;font-size: 20px;"></i>
                            </li>





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
                            <b style="font-size:17px !important;color:red;display:block !important;">
                                75%
                            </b>
                            <b>Winning Rate in the last 30 days</b>
                        </p>
                    </div>
                    <div class="flex items-center    flex-col space-y-1">
                        <div class="match-time text-center">
                            <span class="mb-2 text-white">Today's Odd</span>
                            <span style="color:white;font-weight:bold;" class="blink_me">

                                1.72

                            </span>
                        </div> <a href="account.php" class="text-xs">
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
        <div class="w-full bg-black rounded flex justify-start items-center text-white  py-3 pl-5">
            <h3 class="text-sm font-semibold mb-0">LATEST RESULTS</h3>
        </div>
        <div class="w-full bg-white shadow ">

            <table class="table-fixed w-full">
                <thead class="border-b border-b-black font-semibold text-black">
                    <tr class="p-2 px-5 text-center">
                        <th class="text-start  p-2 ml-1">Event</th>
                        <th class="text-start p-2">Prediction</th>
                        <th class="text-start p-2 mr-1">Date</th>
                        <th class="text-start p-2 mr-1">Score</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($results_pred as $pred)
                    <tr class="even:bg-white odd:bg-[#F2F2F2]">
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="text-sm font-medium">{{$pred->team_a . " vs " . $pred->team_b }}</span>
                                <div class="flex items-center justify-between space-x-1">
                                    <img src="/svg/{{$pred->emblem}}" alt="logo" class="w-5 h-5" />
                                    <span>{{$pred->country}}</span>
                                </div>
                            </div>
                        </td>
                       
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="font-medium text-sm ">
                                    {{$pred->tips}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="text-sm ">
                                    {{$pred->date_t}}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-col items-start justify-center pl-2">
                                <span class="font-semibold text-sm uppercase ">
                                    {{$pred->score_a . ' - ' . $pred->score_b}}
                                </span>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <p class="p-2">No Results available </p>
                    @endforelse

                </tbody>
            </table>
        </div>
    </section>

    <section class="my-20 p-1 lg:p-0 max-w-6xl mx-auto">
        <img src="/img/1xbet2.jpeg" class="w-full object-cover" alt="">
    </section>
    <section class="my-5 p-1 lg:p-0 max-w-6xl mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-8 mt-4">
                    <div class="section-title mb-2">
                        <h1 class="text-5xl font-bold text-center text-black">FREE FOOTBALL PREDICTION SITE</h1>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <p class="text-justify">
                        <b style="color: green;">{{ app_name() }}</b> is the best free Soccer prediction site in the
                        world and the site that predicts Soccer matches correctly. We are the most accurate Soccer
                        prediction site providing our users with the most accurate Soccer predictions around the world.

                        We provide the best Soccer predictions and sport betting tips daily. We select the most reliable
                        Soccer betting tips and we carefully analyze our predictions especially our Sure 2, Banker, Sure 3,
                        Sure 5, Combo, BTS and more to give you the best.

                        We provide our subscribers with the best and most accurate Soccer predictions making us the best
                        Soccer prediction site in the world.
                    </p>
                    <p class="text-justify">
                        Not everyone has what it takes to be a successful punter. Which, therefore, has raised a lot of
                        questions from soccer fans all over the world to find perfect solution by searching the best
                        prediction site that provides 100% guaranteed Soccer predictions.. Many Soccer fans all over the
                        world are tired of losing their bets as a result of not seeking guidance from reliable Soccer
                        prediction site like ours.
                    </p>
                    <p class="text-justify">
                        But don't worry, you're one of the luckiest Soccer fan for using {{ app_name() }}.com as your
                        best guide to Soccer betting and predictions.

                        As one of the best Soccer prediction site in the world, we offer our visitors and subscribers with
                        sure Soccer predictions and the most accurate Soccer predictions everyday to maximize profits.
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-8 mt-4">
                    <div class="section-title mb-2">
                        <h2 class="font-extrabold text-5xl text-center text-black">ACCURATE SOCCER PREDICTION - HOW IS THIS
                            POSSIBLE?</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <p class="text-justify">
                        <b style="color: green;">{{ app_name() }}.com</b> understands the attraction of this league and
                        provides expert analysis and Soccer betting tips, to ensure you come out tops with your wagers.

                        <b style="color: green;">{{ app_name() }}.com</b> works round the clock to grow your Soccer
                        betting tips bankroll. When you engage with our platform, you can rest assure that you see things
                        from the lens of our informed experts. You need not waste your time and resources in endless
                        searches for Fixed matches or Fixed games, because none exist. All you need to do is tune in to our
                        daily list of best Soccer betting predictions and smile to the land of consistent winnings.


                    </p>
                    <p class="text-justify">
                        You can check our Pricing Plans to see our pricing for our best winning Soccer prediction
                        categories.

                        To learn more on how to win with sure Soccer predictions, visit our how to win page and learn more.

                        Thank you for choosing {{ app_name() }}.com as the best Soccer prediction site. We hope our team
                        have served you better? Contact us for any enquries below.
                        <br>Email : <b style="color:green;">contact@sportverified.com</b>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-8 mt-4">
                    <div class="section-title mb-2">
                        <h2 class="font-extrabold text-5xl text-center text-black" style="text-transform: uppercase;">Best
                            Prediction Site In The World</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <p class="text-justify">{{ app_name() }}.com is the best prediction site in the world. Our website
                        works to help you win with the best Soccer tips in the industry. Both Amateur and Professional
                        tipsters can get fast, reliable and efficient Soccer betting tips from our site. We understands the
                        attraction of league and provides expert analysis and Soccer betting tips, to ensure you come out
                        tops with your wagers.</p>
                    <p class="text-justify">
                        At <b style="color: green;">{{ app_name() }}</b>, we offer the best betting tips and guide on
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

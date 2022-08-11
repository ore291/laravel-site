@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="max-w-6xl mx-auto  px-2 md:px-10 mt-4">
                <div class="section-title mb-2">
                    <h1
                        style="font-size: 20px; text-align: center; font-family: arial black; font-style: NORMAL; color: green;">
                        PRICING LIST</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">

                    <div class="col-md-4">
                        <div class="col-md-12"
                            style="background-color: green; height: 40px; margin-top: 30px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px; color: white;">
                            FREE PLAN <span style="font-size: 15px;"></span></div>
                        <div class="col-md-12"
                            style="background-color: white; border: 1px solid gray; border-top: none;   margin-top: 0px; padding: 4px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px;">
                            <ul
                                style="text-align: left; font-size: 17px; font-weight: normal; font-family: calibri;color: black;">
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to free predictions on the
                                    website and 3 other categories</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Correct score</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Double Chance &amp; Draw
                                    No Bet</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Draws </li>
                                <li><span class="glyphicon glyphicon-remove"></span> &nbsp; Not eligible to view other
                                    prediction categories.</li>
                                <br>
                                <li><span class="glyphicon glyphicon-ok"></span><b> &nbsp; ₦0 / $0 / KSH0 Monthly </b></li>

                            </ul>
                            <div style="text-align: left;"><a href="/register"><button
                                        style="text-align: center; background-color: green; border:none; font-size: 14px; width: 100%; color:white;border-radius: 10px;">Sign
                                        Up</button></a></div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="col-md-12"
                            style="background-color: green; height: 40px; margin-top: 30px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px; color: white;">
                            REGULAR PLAN <span style="font-size: 15px;"></span></div>
                        <div class="col-md-12"
                            style="background-color: white; border: 1px solid gray; border-top: none;   margin-top: 0px; padding: 4px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px;">
                            <ul
                                style="text-align: left; font-size: 17px; font-weight: normal; font-family: calibri;color: black;">
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to free predictions on the
                                    website and 6 other categories inclusive.</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Double Chance</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Draws </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to HT/FT </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Over/Under goals </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Both teams score</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Take Risk</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Handicap</li>
                                <br>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦2,000 / $10 / KSH1,000
                                        Monthly</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦10,000 / $50 / KSH5,000 6
                                        Months</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦20,000 / $100 / KSH10,000 1
                                        year</b></li>

                            </ul>
                            <div style="text-align: left;"><a href="/register"><button
                                        style="text-align: center; background-color: green; border:none; font-size: 14px; width:100%; color:white;border-radius: 10px;">Sign
                                        Up</button></a></div>
                        </div>

                    </div>


                    <div class="col-md-4">
                        <div class="col-md-12"
                            style="background-color: green; height: 40px; margin-top: 30px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px; color: white;">
                            BASIC PLAN <span style="font-size: 15px;"> </span></div>
                        <div class="col-md-12"
                            style="background-color: white; border: 1px solid gray; border-top: none; margin-top: 0px; padding: 4px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px;">

                            <ul
                                style="text-align: left; font-size: 17px; font-weight: normal; font-family: calibri;color: black;">
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to free categories, Regular
                                    and 5 more categories </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Correct score </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Double Chance </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Draws </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Banker of the day</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Sure 2</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Sure 3 odds</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Sure 5 odds</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Weekend 50 odds</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Other Leagues</li>
                                <br>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦5,000 / $15 / KSH3,000
                                        Monthly</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦25,000 / $85 / KSH8,000 6
                                        Months</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦45,000 / $180 / KSH10,000 1
                                        year</b></li>


                            </ul>
                            <div style="text-align: left;"><a href="/register"><button
                                        style="text-align: center; background-color: green; border:none; font-size: 14px; width:100%;border-radius: 10px; color:white;">Sign
                                        Up</button></a></div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12"
                            style="background-color: green; height: 40px; margin-top: 30px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px; color: white;">
                            PREMIUM PLAN <span style="font-size: 15px;"></span></div>
                        <div class="col-md-12"
                            style="background-color: white; border: 1px solid gray; border-top: none;  margin-top: 0px; padding: 4px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px;">


                            <ul
                                style="text-align: left; font-size: 17px; font-weight: normal; font-family: calibri;color: black;">
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to All Predictions and
                                    Categories on the Website.</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Correct Sccore</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Double Chance</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Draws </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Sure 2 odds </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Sure 3 odds </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Sure 5 odds </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Combo</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Weekly Jackpot </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Popular Leagues </li>

                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Super 10 odds </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to all Top Leagues
                                    Predictions </li><br>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦7,000 / $25 / KSH5,000
                                        Monthly</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦40,000 / $90 / KSH12,000 6
                                        Months</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦60,000 / $200 / KSH14,000 1
                                        year</b></li>

                            </ul>
                            <div style="text-align: left;"><a href="#../register/"><button
                                        style="text-align: center; background-color: green; border:none; font-size: 14px; width:100%;border-radius: 10px; color:white;">Sign
                                        Up</button></a></div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="col-md-12"
                            style="background-color: green; height: 40px; margin-top: 30px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px; color: white;">
                            SMS PLAN <span style="font-size: 15px;"></span></div>
                        <div class="col-md-12"
                            style="background-color: white; border: 1px solid gray; border-top: none;   margin-top: 0px; padding: 4px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px;">
                            <ul
                                style="text-align: left; font-size: 17px; font-weight: normal; font-family: calibri;color: black;">
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>Recieve Games By SMS on Your
                                        Phone Daily.</b></li>
                                <!--<li><span class="glyphicon glyphicon-ok"></span> &nbsp; Exclusive to Nigerians Only</li>-->
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b> Banker and Sure 2 odds on your
                                        phones daily </b></li>

                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to free predictions on the
                                    website and Regular Categories.</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Double Chance</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Draws </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to HT/FT </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Over/Under goals </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to Both teams score</li>
                                <li><span class="glyphicon glyphicon-remove"></span> &nbsp; <b> Available to Nigerians only
                                    </b> </li>
                                <br>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦2,500 Weekly</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦4,000 Monthly</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦35,000 6 Months</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦70,000 1 year</b></li>

                            </ul>
                            <div style="text-align:left;"><a href="/register"><button
                                        style="text-align: center; background-color: green; border:none; font-size: 14px; width:100%;border-radius:10px;color:white;">Sign
                                        Up</button></a></div>
                        </div>

                    </div>



                    <div class="col-md-4">
                        <div class="col-md-12"
                            style="background-color: green; height: 40px; margin-top: 30px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px; color: white;">
                            ROLLOVER PLAN <span style="font-size: 15px;"></span></div>
                        <div class="col-md-12"
                            style="background-color: white; border: 1px solid gray; border-top: none;   margin-top: 0px; padding: 4px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px;">


                            <ul
                                style="text-align: left; font-size: 17px; font-weight: normal; font-family: calibri;color: black;">
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to All Rollover Prediction.
                                </li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Matches and Scores</li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; Access to all Top Leagues
                                    Predictions </li><br>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦5,000 / $15 / KHS 1,370
                                        Weekly</b></li>
                                <li><span class="glyphicon glyphicon-ok"></span> &nbsp; <b>₦15,000 / $40 / KHS 4,120
                                        Monthly</b></li>

                            </ul>
                            <div style="text-align: left;"><a href="/register"><button
                                        style="text-align: center; background-color: green; border:none; font-size: 14px; width:100%;border-radius: 10px; color:white;">Signup</button></a>
                            </div>
                        </div>

                    </div>






                </div>
            </div>
        </div>
    </div>
@endsection

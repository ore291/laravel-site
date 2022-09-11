<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Plan;
use App\Models\Transaction;
use App\Http\Resources\PlanResource;
use App\Models\Subscription;
use Carbon\Carbon;

class ApiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     */
    public function plans(Request $request)
    {

        return PlanResource::collection(Plan::where("id", "!=", 1)->where("is_disabled", 0)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     */
    public function subs(Request $request, $id)
    {



        $userSub = Subscription::where('user_id', $id)->whereIn('plan_id', [1, 2, 3, 4])->first();
        $rolloverSub = Subscription::where('user_id', $id)->where('plan_id', 6)->first();
        $smsSub = Subscription::where('user_id', $id)->where('plan_id', 5)->first();

        $data = [
            "sub" => $userSub,
            "rollover" => $rolloverSub,
            "sms" => $smsSub,
        ];

        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     */
    public function upgradePackage(Request $request, $id)
    {
       
        $duration = Carbon::today();
        $message = "success";
        if ($request->duration === "w") {
            $duration = $duration->addWeek();
        } else if ($request->duration === "m") {
            $duration = $duration->addMonth();
        } else if ($request->duration === "6m") {
            $duration =  $duration->addMonths(6);
        } else if ($request->duration === "y") {
            $duration = $duration->addYear();
        }

        if ($request->payment_method === 0) {
            
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/" . $request->transactionId . "/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Authorization: Bearer " .  setting('fw_key') ,
                    "Cache-Control: no-cache",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

           

            $result = array();

            if ($response) {
                $result = json_decode($response, true);
            }

    
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                if ($result['data']['status'] === 'successful') {
                    if ($request->plan['id']  < 5) {
                        $userSub = Subscription::where('user_id', $id)->whereIn('plan_id', [1, 2, 3, 4])->first();
                        $userSub->plan_id = $request->plan['id'];
                        $userSub->plan_name = $request->plan['name'];
                        $userSub->start_date = Carbon::now();
                        $userSub->end_date = $duration;

                        $userSub->save();
                    } else if ($request->plan['id'] === 6) {
                        $userSub = Subscription::updateOrCreate(
                            ['plan_id' => $request->plan['id'], 'user_id' => $id],
                            ['start_date' => Carbon::now(), 'end_date' => $duration, 'plan_name' => $request->plan['name']]
                        );
                    } else {
                        $userSub = Subscription::updateOrCreate(
                            ['plan_id' => $request->plan['id'], 'user_id' => $id],
                            ['start_date' => Carbon::now(), 'end_date' =>  $duration, 'plan_name' => $request->plan['name']]
                        );
                    }

                    $transaction = Transaction::create(
                        [
                            'user_id' => $id,
                            'plan_id' => $request->plan['id'],
                            'subscription_id' => $userSub->id,
                            'references'    => $request->transactionId,
                            'payment_method' => $request->payment_method,
                            'duration' => $duration,
                            'status' => $result['data']['status']

                        ]
                    );
                }else{
                    return $result['data'];
                }
            }
        } else {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . $request->transactionId,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Authorization: Bearer " . setting('paystack_secret_key'),
                    "Cache-Control: no-cache",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

           

            $result = array();

            if ($response) {
                $result = json_decode($response, true);
            }
    
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {
                    if ($request->plan['id']  < 5) {
                        $userSub = Subscription::where('user_id', $id)->whereIn('plan_id', [1, 2, 3, 4])->first();
                        $userSub->plan_id = $request->plan['id'];
                        $userSub->plan_name = $request->plan['name'];
                        $userSub->start_date = Carbon::now();
                        $userSub->end_date = $duration;

                        $userSub->save();
                    } else if ($request->plan['id'] === 6) {
                        $userSub = Subscription::updateOrCreate(
                            ['plan_id' => $request->plan['id'], 'user_id' => $id],
                            ['start_date' => Carbon::now(), 'end_date' => $duration, 'plan_name' => $request->plan['name']]
                        );
                    } else {
                        $userSub = Subscription::updateOrCreate(
                            ['plan_id' => $request->plan['id'], 'user_id' => $id],
                            ['start_date' => Carbon::now(), 'end_date' =>  $duration, 'plan_name' => $request->plan['name']]
                        );
                    }

                    $transaction = Transaction::create(
                        [
                            'user_id' => $id,
                            'plan_id' => $request->plan['id'],
                            'subscription_id' => $userSub->id,
                            'references'    => $request->transactionId,
                            'payment_method' => $request->payment_method,
                            'duration' => $duration,
                            'status' => $result['data']['status']

                        ]
                    );
                }else{
                    return $result;
                }
            }
        }


        $messages = [
            'status' => $message,
        ];

        return $messages;
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Plan;
use App\Models\User;
use Modules\Results\Entities\Stats;
use Modules\Results\Entities\Results;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Stevebauman\Location\Location;
use App\Http\Controllers\Controller;
use Modules\Predictions\Entities\Category;
use Modules\Predictions\Entities\Prediction;
use Modules\Predictions\Transformers\PredictionResource;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $body_class = '';

        $today = Carbon::today();

        $query_date = $today->addDays(5)->toDateString();
        $back_date = $today->addDays(-3)->toDateString();

        $perc = Stats::where('name', 'percent')->first();

        $d_odd = Stats::where('name', 'odds')->first();
        $results = Results::latest('date')->take(4)->get();

     

        $trending_pred =  Prediction::where('sport_id', 1)->where('category', 22)->whereDate('date_t', Carbon::today()->toDateString())->get();
        $results_pred =  Prediction::where('sport_id', 1)->where('score_a', '!=', '?')->where('score_b', '!=', '?')->whereDate('date_t', "<=", Carbon::today()->toDateString())->orderBy('date_t', 'desc')->limit(10)->get();

        $upcoming_pred =  Prediction::where('sport_id', 1)->whereRelation('cat', 'tier', 1)->whereDate('date_t', "<=", $query_date)->whereDate('date_t', ">=", Carbon::today()->toDateString())->orderBy('date_t', 'desc')->get();

        // return view('dashboard', compact('body_class'));
        return view('frontend.index', compact('body_class', 'results_pred', 'trending_pred', 'upcoming_pred', 'perc', 'd_odd','results' ));
    }

    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function pricing()
    {
        $body_class = '';

        $plans = Plan::where('is_disabled', 0)->get();
        $ip = '102.135.32.0'; //For static IP address get
        //$ip = request()->ip(); //Dynamic IP address get
        $location = \Location::get($ip);

        $africa = array("Ghana", "Rwanda", "Cameroon", "South Africa", "Zambia", "Zimbabwe", "Uganda", "Kenya", "Tanzania", "Cote D'ivoire", "Burkina Faso", "Senegal", "Mali", "Gabon", "Mauritius");

        if ($location->countryName == "Nigeria") {
            $country_code = "ng";
        } else if (in_array($location->countryName, $africa)) {
            $country_code = "ea";
        } else {
            $country_code = "int";
        }

        return view('frontend.pricing', compact('body_class', 'plans', 'country_code'));
    }
    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function liveScores()
    {
        $body_class = '';

      

        return view('frontend.live_scores', compact('body_class'));
    }

    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.contact', compact('body_class'));
    }

    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function howtopay()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.howtopay', compact('body_class'));
    }

    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function predictions(Request $request)
    {
        $body_class = '';

        $id = $request->session()->get('user_id');

        if (!auth()->user()) {
            $user = null;
            $subs = null;
        } else {
            $user = User::findOrFail($id);
            $userSub = Subscription::where('user_id', $id)->whereIn('plan_id', [1, 2, 3, 4])->first();
            $rolloverSub = Subscription::where('user_id', $id)->where('plan_id', 6)->first();


            $subs = [
                "sub" => $userSub,
                "rollover" => $rolloverSub,

            ];
        }

        $sport_categories = Category::where('sport', 1)->where('id', '!=', 22)->whereRelation('plan', 'is_disabled', 0)->with('plan')->get();

      



        return view('frontend.predictions', compact('body_class', 'user', 'subs', 'sport_categories'));
    }
    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function basketball(Request $request)
    {
        $body_class = '';



        $sport = [
            "id" => 2,
            "sport_name" => "basketball"
        ];



        return view('frontend.otherSports', compact('body_class',  'sport'));
    }
    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function tennis(Request $request)
    {
        $body_class = '';



        $sport = [
            "id" => 3,
            "sport_name" => "tennis"
        ];



        return view('frontend.otherSports', compact('body_class', 'sport'));
    }
    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function boxing(Request $request)
    {
        $body_class = '';



        $sport = [
            "id" => 4,
            "sport_name" => "boxing"
        ];



        return view('frontend.otherSports', compact('body_class',  'sport'));
    }
    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function iceHockey(Request $request)
    {
        $body_class = '';


        $sport = [
            "id" => 5,
            "sport_name" => "ice-hockey"
        ];


        return view('frontend.otherSports', compact('body_class',  'sport'));
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }
}

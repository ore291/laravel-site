<?php

namespace Modules\Results\Http\Controllers;

use Carbon\Carbon;
use App\Models\Plan;
use App\Models\Currency;
use Laracasts\Flash\Flash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class PriceController extends Controller
{

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Prices';

        // module name
        $this->module_name = 'prices';

        // directory path of the module
        $this->module_path = 'results';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "App\Models\Price";
    }




    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';


        $$module_name = $module_model::latest()->paginate();

        return view(
            "results::$module_name.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::select('*');




        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {


                return $data->country_name;
            })
            ->editColumn('updated_at', function ($data) {
                $module_name = $this->module_name;

                $diff = Carbon::now()->diffInHours($data->updated_at);

                if ($diff < 25) {
                    return $data->updated_at->diffForHumans();
                } else {
                    return $data->updated_at->isoFormat('LLLL');
                }
            })
            ->rawColumns(['status', 'action', 'country_name'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }



    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        $currencies = Currency::where('CODE', '!=', 'USD')->where('CODE', '!=', 'NGN')->get();

        $currencies = $currencies->unique('CODE')->values()->pluck('currency', 'id');



        $plans = Plan::where('is_disabled', 0)->where('sms_plan', 0)->where('id', '!=', 1)->get();


        return view(
            "results::$module_name.create",
            compact('module_title', 'module_name', 'plans', 'currencies', 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $inc = $request->all();

        $currency = Currency::find($inc['currency']);

        $countries = Currency::where('CODE', $currency->CODE)->get();

        foreach ($countries as $country) {
            foreach ($inc['plans'] as $plan) {
                $data = [
                    'plan_id' => $plan['id'],
                    'curr_code' => $country->CODE,
                    'currency' => $country->currency,
                    'plan_name' => $plan['name'],
                    'country_name' => $country->country,
                    '6months' => $plan['6months'],
                    'monthly' => $plan['monthly'],
                    'yearly' => $plan['yearly'],
                ];

                $$module_name_singular = $module_model::create($data);
            };
        };










        Flash::success("<i class='fas fa-check'></i> New '" . $module_title . "' Added")->important();



        return redirect("admin/$module_name");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update Prices';

        // $$module_name_singular = $module_model::findOrFail($id);

        $currencies = Currency::where('CODE', '!=', 'USD')->where('CODE', '!=', 'NGN')->get();

        $currencies = $currencies->unique('CODE')->values()->pluck('currency', 'id');



        $plans = Plan::where('is_disabled', 0)->where('sms_plan', 0)->where('id', '!=', 1)->get();




        return view(
            "results::$module_name.show",
            compact('module_title', 'module_name', 'plans', 'currencies', 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $$module_name_singular = $module_model::findOrFail($id);
        $plans = Plan::pluck('name', 'id');
        $sports = Sport::pluck('name', 'id');




        return view(
            "results::$module_name.edit",
            compact('plans', 'sports', 'module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update';


        $inc = $request->all();
        $currency = Currency::find($inc['currency']);

        $existing =  $module_model::where('curr_code', $currency->CODE)->get();

        if ($existing->count() > 0) {

            foreach ($inc['plans'] as $plan) {
                $data = [
                    '6months' => $plan['6months'],
                    'monthly' => $plan['monthly'],
                    'yearly' => $plan['yearly'],
                ];

                $success = $module_model::where('plan_id', $plan['id'])->where('curr_code', $currency->CODE)->update($data);
            };



            Flash::success("<i class='fas fa-check'></i>  '" . $currency->currency . " " . $module_title . "' Updated")->important();

             return redirect("admin/$module_name");
        }


        Flash::warning("<i class='fas fa-times'></i>  '" . $currency->currency . " " . $module_title . "' Have not been created")->important();

        return redirect("admin/$module_name/create");


       
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);

        $$module_name_singular->delete();

        Flash::success('<i class="fas fa-check"></i> ' . label_case($module_name_singular) . ' Deleted Successfully!')->important();



        return redirect("admin/$module_name");
    }
}

<?php

namespace Modules\Results\Http\Controllers;

use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class ExpertController extends Controller
{

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Experts';

        // module name
        $this->module_name = 'experts';

        // directory path of the module
        $this->module_path = 'results';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Results\Entities\Expert";
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
            ->rawColumns(['status', 'action', 'image'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }



    // /**
    //  * Show the form for creating a new resource.
    //  * @return Renderable
    //  */
    // public function create()
    // {
    //     $module_title = $this->module_title;
    //     $module_name = $this->module_name;
    //     $module_path = $this->module_path;
    //     $module_icon = $this->module_icon;
    //     $module_model = $this->module_model;
    //     $module_name_singular = Str::singular($module_name);

    //     $module_action = 'Create';

    //     $currencies = Currency::where('CODE', '!=', 'USD')->where('CODE', '!=', 'NGN')->get();

    //     $currencies = $currencies->unique('CODE')->values()->pluck('currency', 'id');



    //     $plans = Plan::where('is_disabled', 0)->where('sms_plan', 0)->where('id', '!=', 1)->get();


    //     return view(
    //         "results::$module_name.create",
    //         compact('module_title', 'module_name', 'plans', 'currencies', 'module_icon', 'module_action', 'module_name_singular')
    //     );
    // }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    // public function store(Request $request)
    // {
    //     $module_title = $this->module_title;
    //     $module_name = $this->module_name;
    //     $module_path = $this->module_path;
    //     $module_icon = $this->module_icon;
    //     $module_model = $this->module_model;
    //     $module_name_singular = Str::singular($module_name);

    //     $module_action = 'Store';

    //     $inc = $request->all();

    //     $currency = Currency::find($inc['currency']);

    //     $countries = Currency::where('CODE', $currency->CODE)->get();

    //     foreach ($countries as $country) {
    //         foreach ($inc['plans'] as $plan) {
    //             $data = [
    //                 'plan_id' => $plan['id'],
    //                 'curr_code' => $country->CODE,
    //                 'currency' => $country->currency,
    //                 'plan_name' => $plan['name'],
    //                 'country_name' => $country->country,
    //                 '6months' => $plan['6months'],
    //                 'monthly' => $plan['monthly'],
    //                 'yearly' => $plan['yearly'],
    //             ];

    //             $$module_name_singular = $module_model::create($data);
    //         };
    //     };










    //     Flash::success("<i class='fas fa-check'></i> New '" . $module_title . "' Added")->important();



    //     return redirect("admin/$module_name");
    // }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    // public function show()
    // {
    //     $module_title = $this->module_title;
    //     $module_name = $this->module_name;
    //     $module_path = $this->module_path;
    //     $module_icon = $this->module_icon;
    //     $module_model = $this->module_model;
    //     $module_name_singular = Str::singular($module_name);

    //     $module_action = 'Update Prices';

    //     // $$module_name_singular = $module_model::findOrFail($id);

    //     $currencies = Currency::where('CODE', '!=', 'USD')->where('CODE', '!=', 'NGN')->get();

    //     $currencies = $currencies->unique('CODE')->values()->pluck('currency', 'id');



    //     $plans = Plan::where('is_disabled', 0)->where('sms_plan', 0)->where('id', '!=', 1)->get();




    //     return view(
    //         "results::$module_name.show",
    //         compact('module_title', 'module_name', 'plans', 'currencies', 'module_icon', 'module_action', 'module_name_singular')
    //     );
    // }

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


        return view(
            "results::$module_name.edit",
            compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request,int $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);


        $module_action = 'Update';

        $$module_name_singular = $module_model::findOrFail($id);

        $data = $request->all();


        $data['image'] = $$module_name_singular->image;

        if (isset($request->image)) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName =  time() . '.' . $request->image->extension();

            $request->image->move(public_path('ads'), $imageName);


            $data['image'] = '/ads/' . $imageName;
        }


        $$module_name_singular->update($data);




        Flash::success("<i class='fas fa-check'></i> '" . Str::singular($module_title) . "' Updated Successfully")->important();

        return redirect("admin/$module_name");
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

        // $$module_name_singular = $module_model::findOrFail($id);

        // $$module_name_singular->delete();

        Flash::warning('<i class="fas fa-times"></i> ' . ' Do not delete this!')->important();



        return redirect("admin/$module_name");
    }
}

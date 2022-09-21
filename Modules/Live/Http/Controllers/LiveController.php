<?php

namespace Modules\Live\Http\Controllers;

use Flash;
use Carbon\Carbon;
use App\Models\Plan;
use Akaunting\Money\Money;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Akaunting\Money\Currency;
use App\Events\TipPostEvent;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Results\Entities\Stats;

class LiveController extends Controller
{


    public function __construct()
    {
        // Page Title
        $this->module_title = 'Live Bets';

        // module name
        $this->module_name = 'live_events';

        // directory path of the module
        $this->module_path = 'live';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Live\Entities\LiveEvents";
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
            "live::index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function liveStream()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate(10);


        return view(
            "live::live",
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

        $$module_name = $module_model::select("id", "event", "booking_no", "live_streaming_link", 'tips', 'odds', 'date', 'time', "updated_at");

        $data = $$module_name;





        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {


                return $data->name;
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
            ->rawColumns(['name', 'status', 'action'])
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


        return view(
            "live::create",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function plan()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $plans = Plan::all();

        $plans2 = Stats::where('name', 'plans')->first();

        $useful_plans = array();

        if (isset($plans2)) {
            $plans_array = explode(',', $plans2->value);

            $useful_plans = Plan::whereIn('id', $plans_array)->get();
        };






        $module_action = 'Edit Plans';


        return view(
            "live::plan",
            compact('module_title', 'module_name', 'useful_plans', 'module_icon', 'plans', 'module_action', 'module_name_singular')
        );
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function plan_store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);



        $data = $request->all();



        foreach ($data as $key => $val) {
            if (isset($val) && $key != "_token") {
                Stats::add($key, implode(',', (array) $val));
            }
        }

        $module_action = 'Store';





        Flash::success("<i class='fas fa-check'></i> Edit Active Live Bet '" . "Plans" . "' Successful")->important();



        return redirect("admin/$module_name/plan");
    }


    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $data = $request->all();

        $$module_name_singular = $module_model::create($data);

        event(new TipPostEvent($$module_name_singular));


        Flash::success("<i class='fas fa-check'></i> New '" . Str::singular($module_title) . "' Added")->important();



        return redirect("admin/$module_name");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::findOrFail($id);






        return view(
            "live::show",
            compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

    public function sms()
    {
        $module_title = "SMS";
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        // $subs = Subscription::whereIn('plan_id', [2, 3, 4])->whereDate('end_date', '>=', Carbon::now())->with(['user'])->get();

        // dd($subs->toArray());







        return view(
            "live::sms",
            compact('module_title', 'module_name', 'module_icon',  'module_action')
        );
    }


    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function sms_data()
    {
        $module_title = "SMS";
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;


        $module_action = 'Show';

        $today = Carbon::today();




        // $$module_name = Subscription::where('plan_id', 5)->with('user')->filter(function ($item) {
        //     if (Carbon::now()->between($item->start_date, $item->end_date)) {
        //         return $item;
        //     }
        // })->get();

        $$module_name = Subscription::where('plan_id', 5)->with('user')->get();

        $$module_name = $$module_name->filter(function ($item) {
            if (Carbon::now()->between($item->start_date, $item->end_date)) {
                return $item;
            }
        })->all();

        $data = $$module_name;



        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {


                return $data->name;
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
            ->rawColumns(['name', 'status', 'action'])
            // ->orderColumns(['id'], '-:column $1')
            ->make(true);
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



        $edit = true;

        return view(
            "live::edit",
            compact('module_title', 'edit', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
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

        $$module_name_singular = $module_model::findOrFail($id);

        $$module_name_singular->delete();

        Flash::success('<i class="fas fa-check"></i> ' . label_case($module_name_singular) . ' Deleted Successfully!')->important();



        return redirect("admin/$module_name");
    }
}

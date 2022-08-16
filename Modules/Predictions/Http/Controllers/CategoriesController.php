<?php

namespace Modules\Predictions\Http\Controllers;

use App\Models\Plan;
use App\Models\Sport;
use App\Models\League;
use Flash;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Predictions\Entities\Category;
use Illuminate\Contracts\Support\Renderable;
use Yajra\DataTables\DataTables;

class CategoriesController extends Controller
{



    public function __construct()
    {
        // Page Title
        $this->module_title = 'Sport Bet Categories';

        // module name
        $this->module_name = 'sport_categories';

        // directory path of the module
        $this->module_path = 'predictions';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Predictions\Entities\Category";
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
            "predictions::$module_name.index",
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

        $$module_name = $module_model::select('id', 'name', 'sport_name', 'plan_name', 'updated_at');

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

    // /**
    //  * Select Options for Select 2 Request/ Response.
    //  *
    //  * @return Response
    //  */
    // public function index_list(Request $request)
    // {
    //     $module_title = $this->module_title;
    //     $module_name = $this->module_name;
    //     $module_path = $this->module_path;
    //     $module_icon = $this->module_icon;
    //     $module_model = $this->module_model;
    //     $module_name_singular = Str::singular($module_name);

    //     $module_action = 'List';

    //     $term = trim($request->q);

    //     if (empty($term)) {
    //         return response()->json([]);
    //     }

    //     $query_data = $module_model::where('name', 'LIKE', "%$term%")->published()->limit(10)->get();

    //     $$module_name = [];

    //     foreach ($query_data as $row) {
    //         $$module_name[] = [
    //             'id'   => $row->id,
    //             'text' => $row->name,
    //         ];
    //     }

    //     return response()->json($$module_name);
    // }

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

        $plans = Plan::pluck('name', 'id');
        $sports = Sport::pluck('name', 'id');


        return view(
            "predictions::$module_name.create",
            compact('module_title', 'module_name', 'plans', 'sports', 'module_icon', 'module_action', 'module_name_singular')
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

        $data = $request->all();

        $plans = Plan::where('id', $data['tier'])->first();
        $sports = Sport::where('id', $data['sport'])->first();

        $data['sport_name'] = $sports->name;
        $data['plan_name'] = $plans->name;



        $$module_name_singular = $module_model::create($data);




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
            "predictions::$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
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
            "predictions::$module_name.edit",
            compact('plans','sports', 'module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
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

        $plans = Plan::where('id', $data['tier'])->first();
        $sports = Sport::where('id', $data['sport'])->first();

        $data['sport_name'] = $sports->name;
        $data['plan_name'] = $plans->name;

        $$module_name_singular->update($data);


        Flash::success("<i class='fas fa-check'></i> '".Str::singular($module_title)."' Updated Successfully")->important();

       

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

        Flash::success('<i class="fas fa-check"></i> '.label_case($module_name_singular).' Deleted Successfully!')->important();

      

        return redirect("admin/$module_name");
    }
}

<?php

namespace Modules\Predictions\Http\Controllers;

use Flash;
use Carbon\Carbon;
use App\Models\Plan;
use Akaunting\Money\Money;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Akaunting\Money\Currency;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class PlansController extends Controller
{


    public function __construct()
    {
        // Page Title
        $this->module_title = 'Subscription Plans';

        // module name
        $this->module_name = 'plans';

        // directory path of the module
        $this->module_path = 'predictions';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "App\Models\Plan";
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

        $$module_name = $module_model::select('id', 'name','is_disabled', 'n_per_month', 'n_per_6months', 'n_per_year', 'd_per_month', 'd_per_6months', 'd_per_year', 'k_per_month', 'k_per_6months', 'k_per_year', 'updated_at');

        // $data = $$module_name->each(function ($item, $key) {
        //     $item->n_per_month =  Money::NGN($item->n_per_month, true);
        //     $item->n_per_6months =  Money::NGN($item->n_per_6months, true);
        //     $item->n_per_year =  Money::NGN($item->n_per_year, true);
        //     $item->k_per_month =  Money::KES($item->k_per_month, true);
        //     $item->k_per_6months =  Money::KES($item->k_per_6months, true);
        //     $item->k_per_year =  Money::KES($item->k_per_year, true);
        //     $item->d_per_month =  Money::USD($item->d_per_month, true);
        //     $item->d_per_6months =  Money::USD($item->d_per_6months, true);
        //     $item->d_per_year =  Money::USD($item->d_per_year, true);
        // });
       
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
            "predictions::$module_name.create",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular')
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


        $$module_name_singular->n_per_month =  Money::NGN($$module_name_singular->n_per_month, true);
        $$module_name_singular->n_per_6months =  Money::NGN($$module_name_singular->n_per_6months, true);
        $$module_name_singular->n_per_year =  Money::NGN($$module_name_singular->n_per_year, true);
        $$module_name_singular->k_per_month =  Money::KES($$module_name_singular->k_per_month, true);
        $$module_name_singular->k_per_6months =  Money::KES($$module_name_singular->k_per_6months, true);
        $$module_name_singular->k_per_year =  Money::KES($$module_name_singular->k_per_year, true);
        $$module_name_singular->d_per_month =  Money::USD($$module_name_singular->d_per_month, true);
        $$module_name_singular->d_per_6months =  Money::USD($$module_name_singular->d_per_6months, true);
        $$module_name_singular->d_per_year =  Money::USD($$module_name_singular->d_per_year, true);




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





        return view(
            "predictions::$module_name.edit",
            compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
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

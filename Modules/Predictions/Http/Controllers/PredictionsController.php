<?php

namespace Modules\Predictions\Http\Controllers;



use Flash;
use Carbon\Carbon;
use App\Models\Plan;
use App\Models\League;
use Illuminate\Support\Str;
use App\Events\TipPostEvent;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controller;
use Modules\Predictions\Entities\Category;
use Illuminate\Contracts\Support\Renderable;
use Modules\Predictions\Entities\Prediction;

class PredictionsController extends Controller
{


    public function __construct()
    {
        // Page Title
        $this->module_title = 'Predictions';

        // module name
        $this->module_name = 'predictions';

        // directory path of the module
        $this->module_path = 'predictions';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        $this->module_model = "Modules\Predictions\Entities\Prediction";



        // // module model name, path
        // $this->module_model = "Modules\Article\Entities\Post";
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

        $module_action = 'List';
        $module_model = $this->module_model;

        $$module_name = $module_model::latest()->paginate();

        $module_name_singular = Str::singular($module_name);

        return view('predictions::index', compact('module_title', 'module_name', 'module_name', 'module_icon', 'module_name_singular', "$module_name", 'module_action'));
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

        $$module_name = $module_model::where('sport_id', 1 )->select('id', 'team_a', 'team_b', 'country', 'tips', 'odds', 'date_t','time_t','updated_at');

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;
                $module_name_singular = Str::singular($module_name);

                return view('backend.includes.action_column', compact('module_name','module_name_singular', 'data'));
            })
            ->editColumn('name', function ($data) {
                // $is_featured = ($data->is_featured) ? '<span class="badge bg-primary">Featured</span>' : '';

                return $data->country;
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

        $categories = Category::all();
        $leagues = League::all();
        // $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        return view('predictions::create', compact('categories', 'leagues', 'module_title', 'module_name', 'module_name', 'module_icon', 'module_name_singular'));
    }


    public function add()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_action = 'Create';

        $categories = Category::pluck("name" , "id")->all();
        $leagues = League::all()->pluck("short" , "id");

      
        // $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        return view('predictions::add', compact('categories', 'leagues', 'module_action', 'module_title', 'module_name', 'module_name', 'module_icon', 'module_name_singular'));
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

        $league = League::where('id', $data['league'])->first();
        $data['country'] = $league->name;
        $data['emblem'] = $league->emblem;
        $data['sport_id'] = 1;
        $data['team_a'] = ucwords($data['team_a']);
        $data['team_b'] = ucwords($data['team_b']);
        $data['sport_name'] = 'football';



        $$module_name_singular = $module_model::create($data);

        if($$module_name_singular->category == 11){
            event(new TipPostEvent($$module_name_singular));
        }




        Flash::success("<i class='fas fa-check'></i> New '" . Str::singular($module_title) . "' Added")->important();



        return redirect("admin/$module_name/add");
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

        $category = Category::findOrFail($$module_name_singular->category);

       

       

        return view(
            "predictions::show",
            compact('module_title','category', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
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
        $categories = Category::pluck("name" , "id")->all();
        $leagues = League::all()->pluck("short" , "id");


      

        return view(
            "predictions::edit",
            compact('categories','leagues', 'module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
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

        $league = League::where('id', $data['league'])->first();
        $data['country'] = $league->name;
        $data['emblem'] = $league->emblem;

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

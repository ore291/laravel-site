<?php

namespace Modules\Predictions\Http\Controllers;



use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Plan;
use App\Models\League;
use App\Models\SportCategory;


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
        // $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        return view('predictions::index', compact('module_title', 'module_name', 'module_name', 'module_icon', 'module_name_singular'));
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
        
      $categories = SportCategory::all();
        $leagues = League::all();
        // $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        return view('predictions::add', compact('categories','leagues', 'module_title', 'module_name', 'module_name', 'module_icon', 'module_name_singular'));
    }
    

    public function add()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        
      $categories = SportCategory::all();
        $leagues = League::all();
        // $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        return view('predictions::add', compact('categories','leagues', 'module_title', 'module_name', 'module_name', 'module_icon', 'module_name_singular'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('predictions::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('predictions::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}

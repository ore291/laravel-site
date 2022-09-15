<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Settings';

        // module name
        $this->module_name = 'settings';

        // directory path of the module
        $this->module_path = 'settings';

        // module icon
        $this->module_icon = 'fas fa-cogs';

        // module model name, path
        $this->module_model = "App\Models\Setting";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
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

        $$module_name = $module_model::paginate();

        Log::info(label_case($module_title . ' ' . $module_action) . ' | User:' . Auth::user()->name . '(ID:' . Auth::user()->id . ')');

        return view(
            "backend.$module_path.index",
            compact('module_title', 'module_name', "$module_name", 'module_path', 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    public function store(Request $request)
    {
        $rules = Setting::getValidationRules();
    
        $data = $this->validate($request, $rules);

        if ($request->has('site_logo')) {
            $imageName = time() . '.' . $request->site_logo->extension();
            $request->site_logo->move(public_path('img'), $imageName);
            $data['site_logo'] = 'img/'. $imageName;
        }

        if ($request->has('site_favicon')) {
            $imageName = time() . '.' . $request->site_favicon->extension();
            $request->site_favicon->move(public_path('img'), $imageName);
            $data['site_favicon'] = 'img/'. $imageName;
        }
        if ($request->has('home_page_3')) {
            $imageName = time() . '.' . $request->home_page_3->extension();
            $request->home_page_3->move(public_path('img'), $imageName);
            $data['home_page_3'] = 'img/'. $imageName;
        }
        if ($request->has('home_page_1')) {
            $imageName = time() . '.' . $request->home_page_1->extension();
            $request->home_page_1->move(public_path('img'), $imageName);
            $data['home_page_1'] = 'img/'. $imageName;
        }
        if ($request->has('home_page_2')) {
            $imageName = time() . '.' . $request->home_page_2->extension();
            $request->home_page_2->move(public_path('img'), $imageName);
            $data['home_page_2'] = 'img/'. $imageName;
        }
        if ($request->has('football_ad')) {
            $imageName = time() . '.' . $request->football_ad->extension();
            $request->football_ad->move(public_path('img'), $imageName);
            $data['football_ad'] = 'img/'. $imageName;
        }
        if ($request->has('other_sports_ad')) {
            $imageName = time() . '.' . $request->other_sports_ad->extension();
            $request->other_sports_ad->move(public_path('img'), $imageName);
            $data['other_sports_ad'] = 'img/'. $imageName;
        }
      

        $validSettings = array_keys($rules);

        foreach ($data as $key => $val) {
            if (in_array($key, $validSettings)) {
                Setting::add($key, $val, Setting::getDataType($key));
            }
        }

      

        return redirect()->back()->with('status', 'Settings has been saved.');
    }
}

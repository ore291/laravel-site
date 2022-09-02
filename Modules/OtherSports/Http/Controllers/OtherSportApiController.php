<?php

namespace Modules\OtherSports\Http\Controllers;

use Carbon\Carbon;
use App\Models\League;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Support\Renderable;
use Modules\Predictions\Entities\Category;
use Modules\Predictions\Entities\Prediction;
use Modules\Predictions\Transformers\PredictionResource;

class OtherSportApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @param int $id
     */
    public function index(Request $request, int $id)
    {

        $days = $request->days;
        $today = Carbon::today();

        $query_date = $today->addDays($days)->toDateString();

        return PredictionResource::collection(Prediction::whereRelation('cat', 'tier', 1)->where('sport_id', $id)->whereNotIn('category', [21, 22])->whereDate('date_t',  $query_date)
            ->take($request->limit)->get());
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @param int $id
     */
    public function football(Request $request)
    {

        $days = $request->days;
        $category = $request->category;
        $today = Carbon::today();

        $query_date = $today->addDays($days)->toDateString();

        if (isset($request->userId)) {
            return PredictionResource::collection(Prediction::where('sport_id', 1)->where('category', $category)->whereDate('date_t',  $query_date)->get());
        } else {
            return PredictionResource::collection(Prediction::where('sport_id', 1)->where('category', $category)->whereDate('date_t',  $query_date)->get());
        }
    }





    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('predictions::create');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function bulkInsert(Request $request)
    {
        $data = $request->json()->all();

        foreach ($data as $prediction) {

            $category = Category::where('id', $prediction['cat'])->first();

            $pred_save = Prediction::create([
                'team_a' => ucwords($prediction['team_a']),
                'team_b' => ucwords($prediction['team_b']),
                'tips' => $prediction['tips'],
                'odds' => $prediction['odds'],
                'date_t' => $prediction['date'],
                'time_t' => $prediction['time'],
                'sport_id' => $category->sport,
                'category' => $prediction['cat'],
                'emblem' => $category->sport_name,
                'country' =>  $prediction['country'],
                'sport_name' => $category->sport_name
            ]);
        }

        return response()->json([
            'status' => 'success',
        ]);
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

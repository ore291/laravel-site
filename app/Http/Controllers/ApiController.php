<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Team;
use App\Http\Resources\TeamResource;
use App\Http\Resources\TeamCollection;

class ApiController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     */
    public function search(Request $request)
    {
        $searchQuery = $request->query('term');
        // return new TeamCollection(Team::where('name','LIKE',"%{$name}%")->get());
        return TeamResource::collection(Team::where('name','LIKE',"%{$searchQuery}%")->get());
        // return Team::where('name','LIKE',"%{$name}%")->get();
        // return $name;
    }
}

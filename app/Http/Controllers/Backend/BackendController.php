<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Transaction;
use Modules\Predictions\Entities\Prediction;

class BackendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_count = User::count();
        $pred_count = Prediction::count();

        $revenue = Transaction::all()->sum('amount');

        return view('backend.index', compact('user_count', 'revenue', 'pred_count'));
    }
}

<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\Plan;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Events\Frontend\UserRegistered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:191'],
            'last_name' => ['required', 'string', 'max:191'],
            'country' => ['required', 'string', 'max:191'],
            'mobile' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'country'  => $request->country,
            'mobile'  => $request->mobile,
            'name'       => ucwords($request->first_name.' '.$request->last_name),
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        // username
        $username = config('app.initial_username') + $user->id;
        $user->username = $username;
        $user->save();

        event(new Registered($user));
        event(new UserRegistered($user));

        $userSub = new Subscription();

        $plan = Plan::findOrFail(1);

        $userSub->user_id = $user->id;
        $userSub->plan_id = 1;
        $userSub->plan_name = $plan->name;
        $userSub->start_date = Carbon::now();
        $userSub->end_date = new Carbon('first day of January 2050');

        $userSub->save();

      

        $request->session()->put('user_id', $user->id);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Events\Frontend\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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

      

        $request->session()->put('user_id', $user->id);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:50'],
            'lastname' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:60', 'unique:'.User::class],
            'type' => ['required', 'string', 'max:20'],
            'agreed' => ['required', 'string', 'max:6'],
            'email' => ['required', 'string', 'email', 'max:80', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'type' => $request->type,
            'agreed' => $request->agreed,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $userDetail = new UserDetail([
            
        ]);
        $userDetail->user_id = $user->id;
        $user->userDetails()->save($userDetail);
        event(new Registered($user));

        Auth::login($user);
       

        return redirect(RouteServiceProvider::HOME);
    }
}

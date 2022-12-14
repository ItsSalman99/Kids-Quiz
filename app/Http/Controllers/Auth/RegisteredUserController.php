<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Alert;

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
        // dd($request->all());

        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country_list,
            'city' => $request->city_list,
            'address' => $request->address,
            'gender' => $request->gender,
            'profile_info' => $request->add_info,
            'avatar' => $request->file_upload,
            'password' => Hash::make($request->password),
            'user_type' => 3
        ]);

        event(new Registered($user));

        Auth::login($user);

        toast("Kudos, Account has been created successfully!", "success");

        return redirect(RouteServiceProvider::HOME);
    }
}

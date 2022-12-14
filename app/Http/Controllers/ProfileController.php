<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;


class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.profile.create');
    }

    public function store(Request $request)
    {

        $user = User::where('id', Auth::user()->id)->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->profile_info = $request->info;
        // $user->avatar => $request->file_upload,
        // $user->password = Hash::make($request->password),

        $user->save();

        toast("Profile updated successfully!", "success");

        return redirect()->back();


    }

}

<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\ScheduleExam;

class LoginController extends Controller
{
    public function create()
    {
        return view('Site.Auth.login');
    }
    public function store(Request $request)
    {
        $student = User::where('batch_id', '!=', null)
            ->where('name', '=', $request->name)
            ->where('email', '=', $request->email)
            ->count();

        $user = User::where('name', '=', $request->name)->get();
        $schedule= ScheduleExam::all();


        if ($student == 0) {
            return redirect()->back()->with('error', 'Invalid Login Credentials');
        } else {
            return view('Site.Pages.examcard',compact('user','schedule'));
        }
    }
}

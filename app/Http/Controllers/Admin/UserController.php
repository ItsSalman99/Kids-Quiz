<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'DESC')->where('batch_id','=',null)->get();
        return view('Admin.User.index', compact('user'));
    }

    public function create()
    {
        return view('Admin.User.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email,$this->id,id',
            'password' => 'required|confirmed',
            'profile' => 'required|max:2000',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('storage/profile', $filename);
            $user->user_img =  $filename;
        }
        $user->save();
        return redirect()->back()->with('user', 'User Created Successfully!');
    }

    public function edit($id)
    {
        $user= User::find($id);
        return view('Admin.User.edit',compact('user'));
    }

    public function update(Request $request)
    {
        $user= User::find($request->u_id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('storage/profile', $filename);
            $user->user_img =  $filename;
        }
        $user->save();
        return redirect()->back()->with('edit', 'User updated Successfully!');
    }

    public function delete(Request $request)
    {
        $user= User::where('id',$request->id)->delete();
        return response()->json(["status" => "User Deleted Successfully!"]);
    }
}

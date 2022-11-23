@extends('frontend.layouts.main')


@section('content')
    <div style="width: 50%; margin: 0 auto;">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <h2>Register yourself to use application features</h2>
            </div>

            <div style="display: flex">
                <div style="width: 50%">
                    <input type="text" placeholder="First Name" style="width: 95%; padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
                </div>
                <div style="width: 50%">
                    <input type="text" placeholder="Last Name" style="width: 95%; padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
                </div>
            </div>

            <div style="margin-top: 40px">
                <input type="email" placeholder="Email" name="email" required style="width: 98%; padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
            </div>

            <div style="display: flex; margin-top: 40px">
                <div style="width: 50%">
                    <input type="password" placeholder="New Password" style="width: 95%; padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
                </div>
                <div style="width: 50%">
                    <input type="password" placeholder="Repeat Password" style="width: 95%; padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
                </div>
            </div>

            <div style="margin-top: 40px">
                <select name="level" style="color: #fff; width: 98%; padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
                    <option value="">Select Your Class</option>
                    <option value="1" style="color: #000">Class 1</option>
                    <option value="1" style="color: #000">Class 2</option>
                    <option value="1" style="color: #000">Class 3</option>
                    <option value="1" style="color: #000">Class 4</option>
                </select>
            </div>

            <div style="margin-top: 40px">
                <button>Create Free Account</button>
            </div>


        </form>
    </div>
@endsection

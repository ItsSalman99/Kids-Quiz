@extends('frontend.layouts.main')


@section('content')
    <div style="width: 50%; margin: 0 auto;">
        @if ($errors->any())
            <div >
                <div style="background-color: red; color: #fff">
                    {{ __('Whoops! Something went wrong.') }}
                </div>

                <ul style="list-style: none">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <h2>Login To Continue</h2>
            </div>
            <div style="margin-top: 40px">
                <input type="email" placeholder="Email" name="email" required
                    style="width: 100%; padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
            </div>
            <div style="margin-top: 40px">
                <input type="password" placeholder="Password" name="password" required
                    style="width: 100%; padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
            </div>

            <div style="margin-top: 40px">
                <button>Login</button>
            </div>

            {{-- <div style="width: 50%; margin: 0 auto; display: flex">
                <div style="width: 50%">
                    <input type="text" placeholder="email" style="padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
                </div style="width: 50%">
                <div>
                    <input type="text" placeholder="email" style="padding: 20px; background-color: transparent; border: 2px solid #fff; border-radius: 10px;">
                </div>
            </div> --}}

        </form>
    </div>
@endsection

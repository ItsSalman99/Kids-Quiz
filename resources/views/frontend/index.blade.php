@extends('frontend.layouts.main')

@section('content')
    <section style="width: 50%; margin: 0 auto; transform: translateY(50%)">
        <h1>Ready to Play?</h1>
        <button>
            <a href="{{ route('login') }}">LogIn</a>
        </button>
        <br><br>
        <button>
            <a href="{{ route('register') }}">
                Create New Account
            </a>
        </button>
    </section>
@endsection

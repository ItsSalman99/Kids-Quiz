@extends('backend.layouts.main')

@section('content')
    @extends('frontend.layouts.main')

@section('content')
    <section style="width: 50%; margin: 0 auto; transform: translateY(50%)">
        <h1>Hello {{ Auth::user()->name }} !</h1>
        <h4>Welcome to your dashboard</h4>
        <hr>
        <h1>Ready to Play?</h1>
        <button>
            Start Quiz
        </button>
    </section>
@endsection

@endsection

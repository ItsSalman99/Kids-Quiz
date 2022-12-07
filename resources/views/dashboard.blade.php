@extends('backend.layouts.main')

@section('content')
    <section style="width: 50%; margin: 0 auto; transform: translateY(50%)">
        <h1>Hello {{ Auth::user()->name }} !</h1>
        <span>
            Level - {{ Auth::user()->level }}
        </span>
        <h4>Welcome to your dashboard</h4>
        <hr>
        <h1>Ready to Play?</h1>
        <button>
            <a href="{{ route('quizes.questions') }}">
                Start Quiz
            </a>
        </button>
    </section>
@endsection

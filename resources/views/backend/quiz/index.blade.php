@extends('backend.layouts.main')

@section('content')
    <section style="width: 70%; margin: 0 auto; margin-bottom: 50px;">
        <h1 style="font-size: 50px">Quiz</h1>

        <form action="{{ route('quizes.questions.store') }}" method="POST" style="margin-bottom: 400px;">
            @csrf
            @foreach ($questions as $question)
                <div style="padding: 20px; border: 2px solid #eee; background-color: #fff; border-radius: 20px; margin-bottom: 40px;">
                    <span style="font-size: 30px; position: relative; left: -450px; top: 10px; color: #000">#{{ $question->id }}</span>
                    <h1 style="text-align: left; color: #000">Question : {{ $question->question }}</h1>
                    <h4 style="text-align: left; color: #000">Options :</h4>
                    <div style="display: flex">
                        @foreach ($question->options as $key => $item)
                            <div  style="margin-right: 20px; margin-top: 10px; margin-bottom: 20px; text-align: left;">
                                {{-- {{ $key + 1 }} --}}
                                <input type="radio" name="answer{{$item->question_id}}" id="" value="{{ $item->name }}">
                                <span style="color: #000">
                                    {{ $item->name }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            <button class="my-4">
                Submit
            </button>
        </form>

    </section>
@endsection

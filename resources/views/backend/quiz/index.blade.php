@extends('backend.layouts.main')

@section('content')
    <div class="wrapper position-relative">
        <div class="top_content_area pt-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo_area ms-5">
                            <a href="{{ route('dashboard') }}">
                                <img src="{{ asset('assets/backend/assets/images/logo/logo.png') }}" width="10%"
                                    alt="image_not_found">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <div class="count_box overflow-hidden rounded-pill d-flex float-end me-5">
                            <div class="count_clock ps-2">
                                <img src="{{ asset('assets/backend/assets/images/counter/clock.png') }}"
                                    alt="image_not_found">
                            </div>
                            <div class="count_title px-1">
                                <h4 class="pe-5">Quiz</h4>
                                <span>Time start</span>
                            </div>
                            <div class="count_number rounded-pill bg-white overflow-hidden me-2 text-center countdown_timer"
                                data-countdown="2022/10/24">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <form class="multisteps_form position-relative overflow-hidden mt-5" id="wizard" method="POST"
                action="{{ route('quizresult.store') }}">
                @csrf
                <!-- Form-header-content -->
                <div class="form_header_content text-center pt-4">
                    <h2>QUIZ</h2>
                    <span>Fill out this Tirnva quiz for fun!</span>
                </div>
                @foreach ($questions as $question)
                    <!------------------------- Step-1 ----------------------------->
                    <div class="multisteps_form_panel step">
                        <!-- Form-content -->
                        <span class="question_number text-uppercase mb-3 float-end">
                            QUESTION 1/{{ count($questions) }}</span>
                        <div class="progress rounded-pill">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h1 class="question_title px-5 py-3 animate__animated animate__fadeInRight animate_25ms">
                            {{ $question->question }}
                        </h1>
                        <!-- Form-items -->
                        <div class="form_items ps-5">
                            <ul class="list-unstyled p-0">
                                @foreach ($question->options as $option)
                                    <li
                                        class="active step_1 ps-5 rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                        <input type="radio" id="opt_1" name="question_{{ $question->id }}_option"
                                            value="{{ $option->name }}" required>
                                        <label for="opt_1">
                                            {{ $option->name }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
        </div>
        <!---------- Form Button ---------->
        <div class="form_btn py-5 text-center">
            <button type="submit" class="submitBTN" style="display: none">
                Submit
            </button>
            <div class="nextlast">
                <button type="button" class="f_btn disable text-uppercase rounded-pill text-white" id="prevBtn"
                    onclick="nextPrev(-1)"><span><i class="fas fa-arrow-left"></i></span>
                    Last Question
                </button>
                <button type="button" class="f_btn active text-uppercase rounded-pill text-white" id="nextBtn"
                    onclick="nextPrev(1)">
                    Next Question
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
        </form>
    </div>
@endsection

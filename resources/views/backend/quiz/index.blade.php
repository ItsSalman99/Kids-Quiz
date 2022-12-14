@extends('backend.layouts.main')

@section('content')
    <div class="wrapper position-relative">
        <div class="top_content_area pt-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo_area ms-5">
                            <a href="{{ route('dashboard') }}">
                                <img src="{{ asset('assets/backend/assets/images/logo/logo.png') }}" width="10%" alt="image_not_found">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <div class="count_box overflow-hidden rounded-pill d-flex float-end me-5">
                            <div class="count_clock ps-2">
                                <img src="{{ asset('assets/backend/assets/images/counter/clock.png') }}" alt="image_not_found">
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
                action="https://jthemes.net/themes/html/quizo/thankyou/index-3.html">
                <!-- Form-header-content -->
                <div class="form_header_content text-center pt-4">
                    <h2>QUIZ</h2>
                    <span>Fill out this Tirnva quiz for fun!</span>
                </div>
                <!------------------------- Step-1 ----------------------------->
                <div class="multisteps_form_panel step">
                    <!-- Form-content -->
                    <span class="question_number text-uppercase mb-3 float-end">QUESTION 1/4</span>
                    <div class="progress rounded-pill">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h1 class="question_title px-5 py-3 animate__animated animate__fadeInRight animate_25ms">Make a Multiple
                        Choice Test
                        Template Using Excel?</h1>
                    <!-- Form-items -->
                    <div class="form_items ps-5">
                        <ul class="list-unstyled p-0">
                            <li class="active step_1 ps-5 rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                <input type="radio" id="opt_1" name="stp_1_select_option"
                                    value="Activate Developer Tab">
                                <label for="opt_1">Activate Developer Tab</label>
                            </li>
                            <li class="step_1 ps-5 rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                <input type="radio" id="opt_2" name="stp_1_select_option"
                                    value="Providing a Lecturer">
                                <label for="opt_2">Providing a Lecturer</label>
                            </li>
                            <li class="step_1 ps-5 rounded-pill animate__animated animate__fadeInRight animate_150ms">
                                <input type="radio" id="opt_3" name="stp_1_select_option" value="Personally Quizzes">
                                <label for="opt_3">Personally Quizzes</label>
                            </li>
                            <li class="step_1 ps-5 rounded-pill animate__animated animate__fadeInRight animate_200ms">
                                <input type="radio" id="opt_4" name="stp_1_select_option" value="Massive Batches">
                                <label for="opt_4">Massive Batches</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!------------------------- Step-2 ----------------------------->
                <div class="multisteps_form_panel step">
                    <!-- Form-content -->
                    <span class="question_number text-uppercase mb-3 float-end">QUESTION 2/4</span>
                    <div class="progress rounded-pill">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h1 class="question_title px-5 py-3 animate__animated animate__fadeInRight animate_25ms">Who is Anakin
                        Skywalker when he Goes to the dark sid?</h1>
                    <!-- Form-items -->
                    <div class="form_items ps-5">
                        <ul class="list-unstyled p-0">
                            <li class="step_2 ps-5 rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                <input type="radio" id="opt_5" name="stp_2_select_option" value="Darth sidious">
                                <label for="opt_5">Darth sidious</label>
                            </li>
                            <li class="step_2 ps-5 rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                <input type="radio" id="opt_6" name="stp_2_select_option" value="Darth Tyanus">
                                <label for="opt_6">Darth Tyanus</label>
                            </li>
                            <li class="step_2 ps-5 rounded-pill animate__animated animate__fadeInRight animate_150ms">
                                <input type="radio" id="opt_7" name="stp_2_select_option" value="both (a) and (b)">
                                <label for="opt_7">Dark Vadar</label>
                            </li>
                            <li class="step_2 ps-5 rounded-pill animate__animated animate__fadeInRight animate_200ms">
                                <input type="radio" id="opt_8" name="stp_2_select_option" value="Darth Mael">
                                <label for="opt_8">Darth Mael</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!------------------------- Step-3 ----------------------------->
                <div class="multisteps_form_panel step">
                    <!-- Form-content -->
                    <span class="question_number text-uppercase mb-3 float-end">QUESTION 3/4</span>
                    <div class="progress rounded-pill">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h1 class="question_title px-5 py-3 animate__animated animate__fadeInRight animate_25ms">How did the
                        country of Greenland get its name?</h1>
                    <!-- Form-items -->
                    <div class="form_items ps-5">
                        <ul class="list-unstyled p-0">
                            <li class="step_3 ps-5 rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                <input type="radio" id="opt_9" name="stp_3_select_option"
                                    value="From its formely green landscape">
                                <label for="opt_9">From its formely green landscape</label>
                            </li>
                            <li class="step_3 ps-5 rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                <input type="radio" id="opt_10" name="stp_3_select_option"
                                    value="From a man named greene and early">
                                <label for="opt_10">From a man named greene and early</label>
                            </li>
                            <li class="step_3 ps-5 rounded-pill animate__animated animate__fadeInRight animate_150ms">
                                <input type="radio" id="opt_11" name="stp_3_select_option"
                                    value="From the color of the northern lights">
                                <label for="opt_11">From the color of the northern lights</label>
                            </li>
                            <li class="step_3 ps-5 rounded-pill animate__animated animate__fadeInRight animate_200ms">
                                <input type="radio" id="opt_12" name="stp_3_select_option"
                                    value="A play to entice people to move there">
                                <label for="opt_12">A play to entice people to move there</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!------------------------- Step-4 ----------------------------->
                <div class="multisteps_form_panel step">
                    <!-- Form-content -->
                    <span class="question_number text-uppercase mb-3 float-end">Question 4/4</span>
                    <div class="progress rounded-pill">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h1 class="question_title px-5 py-3 animate__animated animate__fadeInRight animate_25ms">How many
                        square
                        miles does the principality of Monaco have?</h1>
                    <!-- Form-items -->
                    <div class="form_items ps-5">
                        <ul class="list-unstyled p-0">
                            <li class="step_4 ps-5 rounded-pill animate__animated animate__fadeInRight animate_50ms">
                                <input type="radio" id="opt_13" name="stp_4_select_option" value="0.25">
                                <label for="opt_13">0.25</label>
                            </li>
                            <li class="step_4 ps-5 rounded-pill animate__animated animate__fadeInRight animate_100ms">
                                <input type="radio" id="opt_14" name="stp_4_select_option" value="0.75">
                                <label for="opt_14">0.75</label>
                            </li>
                            <li class="step_4 ps-5 rounded-pill animate__animated animate__fadeInRight animate_150ms">
                                <input type="radio" id="opt_15" name="stp_4_select_option" value="8.0">
                                <label for="opt_15">8.0</label>
                            </li>
                            <li class="step_4 ps-5 rounded-pill animate__animated animate__fadeInRight animate_200ms">
                                <input type="radio" id="opt_16" name="stp_4_select_option" value="280">
                                <label for="opt_16">280</label>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        </form>
        <!---------- Form Button ---------->
        <div class="form_btn py-5 text-center">
            <button type="button" class="f_btn disable text-uppercase rounded-pill text-white" id="prevBtn"
                onclick="nextPrev(-1)"><span><i class="fas fa-arrow-left"></i></span> Last Question</button>
            <button type="button" class="f_btn active text-uppercase rounded-pill text-white" id="nextBtn"
                onclick="nextPrev(1)"> Next Question <i class="fas fa-arrow-right"></i></button>
        </div>
    </div>
@endsection

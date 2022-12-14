@extends('backend.layouts.main')

@section('content')
    <div class="wrapper position-relative">
        <div class="top_content_area pt-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo_area ms-5">
                            <a href="index-2.html">
                                <img src="{{ asset('assets/backend/assets/images/logo/logo.png') }}" width="10%"
                                    alt="image_not_found">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-block">
                        <div class="d-flex float-end">
                            <button class="btn btn-danger ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                                Log Out
                            </button>
                            <a href="{{ route('profile.index') }}" class="btn text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-gear-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-bottom: 100px;">
            <div class="multisteps_form position-relative overflow-hidden mt-5">
                <!-- Form-header-content -->
                <div class="form_header_content text-center pt-4">
                    <h2>Hello, {{ Auth::user()->name }}</h2>
                    <span>Welcome to your dashboard</span>
                </div>
                <div class="form_header_content text-center pt-4">
                    <h2>Quiz Attempt</h2>
                    <span style="font-size: 70px">0</span>
                </div>
                <div class="form_btn py-5 text-center">
                    <a href="{{ route('quizes.questions') }}">
                        <button type="button" class="f_btn active text-uppercase rounded-pill text-white">
                            Start Question
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!---------- Form Button ---------->
    </div>
@endsection

@extends('Admin.Layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"> View Exam</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View Exam</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        Exam Name: {{$exam->exam_name}}
        @php
        $i=1;
        @endphp
        <p>
            @foreach ($exam->question as $questions)
        <ul>
            <h3>Q{{$i}} {{$questions->question}}</h3>

            @foreach ($questions->option as $options)
            <li> {{$options->option1}}</li>
            <li> {{$options->option2}}</li>
            <li> {{$options->option3}}</li>
            <li> {{$options->option4}}</li>
            @endforeach
        </ul>
        @php
        $i++;
        @endphp
        @endforeach
        </p>
    </div>
</div>
@endsection
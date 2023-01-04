@extends('Admin.Layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Questions</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Question</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Question</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="{{route('admin.question.update')}}" method="POST">
                                <input type="hidden" name="que_id" value="{{$question->id}}">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label for="inputProductTitle" class="form-label">Exam Name</label>
                                            <select class="form-select mb-3" aria-label="Default select example" name="exam_id">
                                                <option value="">Select Exam Name</option>
                                                @foreach ($exam as $exams)
                                                @if ($exams->id == $question->exam_id)
                                                <option value="{{$exams->id}}" selected>{{$exams->exam_name}}</option>
                                                @else
                                                <option value="{{$exams->id}}">{{$exams->exam_name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label for="inputProductDescription" class="form-label">Enter Question</label>
                                            <input value="{{$question->question}}" class="form-control  @error('question') is-invalid @enderror" type="text" name="question" id="inputProductDescription" placeholder="Enter Question" />
                                            @error('question')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                      
                                        @foreach ($question->option as $options)
                                        <input type="hidden" name="opt_id" value="{{$options->id}}">
                                        <div class=" col-md-6 mb-3">
                                            <label for="inputProductDescription" class="form-label">Option 1</label>
                                            <input value="{{$options->option1}}" type="text" class="form-control @error('option1') is-invalid @enderror " name="option1" id="inputProductTitle" placeholder="Enter Option 
                                            ">
                                            @error('option1' )
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>


                                        <div class=" col-md-6 mb-3">
                                            <label for="inputProductDescription" class="form-label">Option 1</label>
                                            <input value="{{$options->option2}}" type="text" class="form-control @error('option2') is-invalid @enderror " name="option2" id="inputProductTitle" placeholder="Enter Option ">
                                            @error('option2' )
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class=" col-md-6 mb-3">
                                            <label for="inputProductDescription" class="form-label">Option 1</label>
                                            <input value="{{$options->option3}}" type="text" class="form-control @error('option3') is-invalid @enderror " name="option3" id="inputProductTitle" placeholder="Enter Option">
                                            @error('option3' )
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class=" col-md-6 mb-3">
                                            <label for="inputProductDescription" class="form-label">Option 1</label>
                                            <input value="{{$options->option4}}" type="text" class="form-control @error('option4') is-invalid @enderror " name="option4" id="inputProductTitle" placeholder="Enter Option ">
                                            @error('option4' )
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        @endforeach

                                        <div class="col-md-6 mb-3">
                                            <label for="inputPrice" class="form-label">Enter Right Answer</label>
                                            <input value="{{$question->right_answer}}" type="text" name="right_answer" class="form-control  @error('right_answer') is-invalid @enderror" id="inputPrice" placeholder="Enter Right Answer">
                                            @error('right_answer')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-3 mt-2">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary px-5">Update Question</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
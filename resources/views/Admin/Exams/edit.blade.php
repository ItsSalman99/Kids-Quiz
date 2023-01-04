@extends('Admin.Layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Exams</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Exam</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Exam</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="{{route('admin.exam.update')}}" method="POST">
                                    <input type="hidden" name="exam_id" value="{{$exam->id}}">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="inputProductTitle" class="form-label">Exam Name</label>
                                            <input value="{{$exam->exam_name}}" type="text" class="form-control @error('exam_name') is-invalid @enderror" name="exam_name" id="inputProductTitle" placeholder="Enter Exam Name">
                                            @error('exam_name')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputProductDescription" class="form-label">Exam Marks</label>
                                            <input value="{{$exam->exam_marks}}" class="form-control  @error('exam_marks') is-invalid @enderror" type="text" name="exam_marks" id="inputProductDescription" placeholder="Enter Exam Marks" />
                                            @error('exam_marks')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class=" col-md-6 mb-3">
                                            <label for="inputProductDescription" class="form-label">Exam Duration</label>
                                            <input value="{{$exam->exam_duration}}" type="text" class="form-control  @error('exam_duration') is-invalid @enderror" name="exam_duration" id="inputProductTitle" placeholder="Enter Exam Duration">
                                            @error('exam_duration')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="inputPrice" class="form-label">Exam Note</label>
                                            <input value="{{$exam->exam_note}}" type="text" name="exam_note" class="form-control  @error('exam_note') is-invalid @enderror" id="inputPrice" placeholder="Enter Exam Note">
                                            @error('exam_note')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3 mt-2">
                                            <label for="inputPrice" class="form-label">Active/Visible</label>
                                            <input type="checkbox" name="active" {{$exam->active == 1 ? 'checked' : ''}}>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Update Exam</button>
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
@include('Admin.Partials.scripts')
@if(Session::has('success'))
<script>
    $(function() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ Session::get('success') }}");
    })
</script>
@endif
@endsection
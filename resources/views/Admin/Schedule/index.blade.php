@extends('Admin.Layouts.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Schedule Exam</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Schedule Exams</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="lni lni-circle-plus"></i>Schedule Exam</button>
            <!-- create Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Schedule Exam</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.schedule.store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Select Batch Timings</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="batch_id">
                                        <option value="">Select exam Timings</option>
                                        @foreach ($batch as $batches)
                                        <option value="{{$batches->id}}">{{$batches->batch_timings}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Student Exam</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="exam_id">
                                        <option value="">Select Exam</option>
                                        @foreach ($exam as $exams)
                                        <option value="{{$exams->id}}">{{$exams->exam_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Schedule Exam</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Batch Timings</th>
                                <th>Exam Name</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($schedule as $schedules)
                        <tbody>
                            <tr>
                                <td>{{$schedules->batch->batch_timings}}</td>
                                <td>{{$schedules->exam->exam_name}}</td>
                                <td>{{$schedules->created_at->format('l, jS \ F ')}}</td>
                                <td>
                                <!-- <button style="padding: 5px;" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModaledit{{$batches->id}}"><i class='bx bx-edit'></i></button> -->
                                    <button style="padding: 5px;" role="{{$schedules->id}}" type="button" class="deletesch btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                        </tbody>
                      
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Admin.Partials.scripts')
@if(Session::has('success'))
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ Session::get('success') }}");
</script>
@endif
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script>
    var del = document.getElementsByClassName('deletesch');
    for (let i = 0; i < del.length; i++) {
        del[i].addEventListener('click', function() {
            var id = this.getAttribute('role');

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Schedule Exam!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        var data = {
                            "_token": "{{ csrf_token() }}",
                            "id": id,
                        };

                        $.ajax({
                            type: "POST",
                            url: "{{route('admin.schedule.delete')}}",
                            data: data,
                            success: function(response) {
                                swal(response.status, {
                                        icon: "success",
                                    })
                                    .then((result) => {
                                        window.location.reload();
                                    });
                            }
                        })
                    }
                });
        });
    }
</script>
@endsection
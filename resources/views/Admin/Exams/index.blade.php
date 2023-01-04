@extends('Admin.Layouts.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Exams</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Exam List</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <a href="{{route('admin.exam.create')}}" class="btn btn-primary"><i class="lni lni-circle-plus"></i>Exam</a>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Exam Duration</th>
                                <th>Exam Marks</th>
                                <th>Status</th>
                                <th>Total Questions</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($exam as $exams)
                        <tbody>
                            <tr>
                                <td>{{$exams->exam_name}}</td>
                                <td>{{$exams->exam_duration}}</td>
                                <td>{{$exams->exam_marks}} Marks</td>
                                <td>
                                    @if ($exams->active == 1)
                                    <span class="badge rounded-pill bg-success">Active</span>
                                    @else
                                    <span class="badge rounded-pill bg-danger">Not Active</span>
                                    @endif
                                </td>
                                <td>{{count($exams->question)}}</td>
                                <td>{{$exams->created_at->format('l, jS \ F ')}}</td>
                                <td>
                                    <a style="padding: 5px;" href="{{route('admin.exam.edit',$exams->id)}}" class="btn btn-info"><i class='bx bx-edit'></i></a>
                                    <button style="padding: 5px;" role="{{$exams->id}}" type="button" class="deleteexam btn btn-danger"><i class='bx bx-trash'></i></button>
                                    <a style="padding: 5px;" href="{{route('admin.exam.view',$exams->id)}}" class="btn btn-success"><i class="bx bx-message-detail"></i></a>
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
    var del = document.getElementsByClassName('deleteexam');
    for (let i = 0; i < del.length; i++) {
        del[i].addEventListener('click', function() {
            var id = this.getAttribute('role');

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Exam!",
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
                            url: "{{route('admin.exam.delete')}}",
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
@extends('Admin.Layouts.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Questions</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Questions List</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <a href="{{route('admin.question.create')}}" class="btn btn-primary"><i class="lni lni-circle-plus"></i>Question</a>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Question</th>
                                <th>Right Answer</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach($question as $questions)
                        <tbody>
                            <tr>
                                <td>{{$questions->exam->exam_name}}</td>
                                <td>{{$questions->question}}</td>
                                <td>{{$questions->right_answer}}</td>
                                <td>{{$questions->created_at->format('l, jS \ F ')}}</td>
                                <td>
                                    <a style="padding: 5px;" href="{{route('admin.question.edit',$questions->id)}}" class="btn btn-info"><i class='bx bx-edit'></i></a>
                                    <button style="padding: 5px;" role="{{$questions->id}}" type="button" class="deletequestion btn btn-danger"><i class='bx bx-trash'></i></button>
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
    var del = document.getElementsByClassName('deletequestion');
    for (let i = 0; i < del.length; i++) {
        del[i].addEventListener('click', function() {
            var id = this.getAttribute('role');

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Question!",
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
                            url: "{{route('admin.question.delete')}}",
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
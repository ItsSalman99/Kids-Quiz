@extends('Admin.Layouts.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Students</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Students List</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalimport"><i class="lni lni-circle-plus"></i>Import</button>
            <!-- Excel Modal -->
            <div class="modal fade" id="exampleModalimport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Student</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
    <form action="{{route('admin.student.excelstore')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="inputPrice" class="form-label">Choose CSV</label>
            <input type="file" name="excel" class="form-control" id="inputPrice">
        </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Import Student</button>
    </form>
</div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="lni lni-circle-plus"></i>Student</button>
            <!-- create Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.student.store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Student Timings</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="batch_id">
                                        <option value="">Select Student Timings</option>
                                        @foreach ($batch as $batches)
                                        <option value="{{$batches->id}}">{{$batches->batch_timings}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="inputPrice" class="form-label">Enter Student Name</label>
                                    <input type="text" name="student_name" class="form-control" id="inputPrice" placeholder="Enter Student Name">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPrice" class="form-label">Enter CR Number</label>
                                    <input type="text" name="cr_number" class="form-control" id="inputPrice" placeholder="Enter CR Number">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Student</button>
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
                                <th>Student Name</th>
                                <th>Cr Number</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ( $student as $students)
                        <tbody>
                            <tr>
                                <td>{{$students->batch->batch_timings}}</td>
                                <td>{{$students->name}}</td>
                                <td>{{$students->email}}</td>
                                <td>{{$students->created_at->format('l, jS \ F ')}}</td>
                                <td>
                                    <button style="padding: 5px;" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModaledit{{$students->id}}"><i class='bx bx-edit'></i></button>
                                    <button style="padding: 5px;" role="{{$students->id}}" type="button" class="deletestudent btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                        </tbody>
                        <div class="modal fade" id="exampleModaledit{{$students->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('admin.student.update')}}" method="POST">
                                            <input type="hidden" name="student_id" value="{{$students->id}}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="inputProductTitle" class="form-label">Student Timings</label>
                                                <select class="form-select mb-3" aria-label="Default select example" name="batch_id">
                                                    <option value="">Select Student Timings</option>
                                                    @foreach ($batch as $batches)
                                                    @if ($batches->id == $students->batch_id)
                                                    <option value="{{$batches->id}}" selected>{{$batches->batch_timings}}</option>
                                                    @endif
                                                    <option value="{{$batches->id}}">{{$batches->batch_timings}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="inputPrice" class="form-label">Enter Student Name</label>
                                                <input value="{{$students->name}}" type="text" name="student_name" class="form-control" id="inputPrice" placeholder="Enter Student Name">
                                            </div>

                                            <div class="mb-3">
                                                <label for="inputPrice" class="form-label">Enter CR Number</label>
                                                <input value="{{$students->email}}" type="text" name="cr_number" class="form-control" id="inputPrice" placeholder="Enter CR Number">
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Student</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    var del = document.getElementsByClassName('deletestudent');
    for (let i = 0; i < del.length; i++) {
        del[i].addEventListener('click', function() {
            var id = this.getAttribute('role');

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Student!",
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
                            url: "{{route('admin.student.delete')}}",
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
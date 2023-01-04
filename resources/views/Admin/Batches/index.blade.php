@extends('Admin.Layouts.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Batches</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Batches List</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="lni lni-circle-plus"></i>Batch</button>
            <!-- create Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Batch</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.batch.store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputPrice" class="form-label">Enter Batch Timings</label>
                                    <input type="text" name="batch_timings" class="form-control" id="inputPrice" placeholder="Enter Batch Timings">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPrice" class="form-label">Enter Teacher Name</label>
                                    <input type="text" name="teacher" class="form-control" id="inputPrice" placeholder="Enter Teacher Name">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPrice" class="form-label">Enter Course Name</label>
                                    <input type="text" name="course" class="form-control" id="inputPrice" placeholder="Enter Course Name">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Batch</button>
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
                                <th>Teacher Name</th>
                                <th>Course Name</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ( $batch as $batches)
                        <tbody>
                            <tr>
                                <td>{{$batches->batch_timings}}</td>
                                <td>{{$batches->teacher}}</td>
                                <td>{{$batches->course}}</td>
                                <td>{{$batches->created_at->format('l, jS \ F ')}}</td>
                                <td>
                                <button style="padding: 5px;" type="button"class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModaledit{{$batches->id}}"><i class='bx bx-edit'></i></button>
                                    <button style="padding: 5px;" role="{{$batches->id}}" type="button" class="deletebatch btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                        </tbody>
                        <div class="modal fade" id="exampleModaledit{{$batches->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Batch</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.batch.update')}}" method="POST">
                                <input type="hidden" name="batch_id" value="{{$batches->id}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputPrice" class="form-label">Enter Batch Timings</label>
                                    <input value="{{$batches->batch_timings}}" type="text" name="batch_timings" class="form-control" id="inputPrice" placeholder="Enter Batch Timings">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPrice" class="form-label">Enter Teacher Name</label>
                                    <input value="{{$batches->teacher}}" type="text" name="teacher" class="form-control" id="inputPrice" placeholder="Enter Teacher Name">
                                </div>

                                <div class="mb-3">
                                    <label for="inputPrice" class="form-label">Enter Course Name</label>
                                    <input  value="{{$batches->course}}"  type="text" name="course" class="form-control" id="inputPrice" placeholder="Enter Course Name">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Batch</button>
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
    var del = document.getElementsByClassName('deletebatch');
    for (let i = 0; i < del.length; i++) {
        del[i].addEventListener('click', function() {
            var id = this.getAttribute('role');

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this Batch!",
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
                            url: "{{route('admin.batch.delete')}}",
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
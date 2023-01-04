@extends('Admin.Layouts.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="page-wrapper">
    <div class="page-content">
        <a href="{{route('admin.user.create')}}" class="btn btn-primary mb-2"><i class="lni lni-circle-plus"></i>User</a>
        <div  class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
            @foreach ($user as $users)
            <div class="col" id="delremove">
                <div  class="card border-primary border-bottom border-3 border-0">
                    <img src="{{asset('storage/profile/'.$users->user_img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ucwords($users->name)}}</h5>
                        <p class="card-text">{{$users->email}}</p>
                        <hr>
                        <div class="d-flex align-items-center gap-2">
                            <a  style="padding: 5px;" href="{{route('admin.user.edit',$users->id)}}" class="btn btn-info"><i class='bx bx-edit'></i></a>
                            <button role="{{$users->id}}" style="padding: 5px;" type="button" class="delete btn btn-danger"><i class='bx bx-trash'></i></button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('Admin.Partials.scripts')
@if(Session::has('user'))
	<script>
		$(function() {
			toastr.options = {
				"closeButton": true,
				"progressBar": true
			}
			toastr.success("{{ Session::get('user') }}");
		})
	</script>
	@endif
<script>
    var del = document.getElementsByClassName('delete');
    for (let i = 0; i < del.length; i++) {
        del[i].addEventListener('click', function() {
            var id = this.getAttribute('role');

            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this user!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        var data= {
                            "_token": "{{ csrf_token() }}",
                            "id": id,
                        };

                        $.ajax({
                            type: "POST",
                            url: "{{route('admin.user.delete')}}",
                            data : data,
                            success: function(response) {
                                swal(response.status, {
                                        icon: "success",
                                    })
                                    .then((result) => {
                                       $("#delremove").remove();
                                    });
                            }
                        })
                    }
                });
        });
    }
</script>
@endsection
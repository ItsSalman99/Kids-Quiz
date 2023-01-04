@extends('Admin.Layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <hr />
                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-info">Create User</h5>
                            </div>
                            <hr />
                            <form action="{{route('admin.user.store')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{old('name')}}" name="name" class="form-control  @error('name') is-invalid @enderror" id="inputFirstName" placeholder="Enter Your Name">
                                        @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" value="{{old('email')}}" name="email" class="form-control  @error('email') is-invalid @enderror" id="inputEmailAddress" placeholder="example@user.com">
                                        @error('email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Choose Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="inputChoosePassword2" placeholder="Choose Password">
                                        @error('password')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"" id=" inputConfirmPassword2" placeholder="Confirm Password">
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Choose Profile Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" value="{{old('profile')}}" name="profile" class="form-control  @error('profile') is-invalid @enderror" id="file">
                                        @error('profile')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-info px-5">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Admin.Partials.scripts')

@endsection
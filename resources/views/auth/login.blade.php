@extends('frontend.layouts.main')


@section('content')
    <div class="wrapper">
        <div class="">
            <div class="container jumbotron" style="border: 10px solid #714dd7; border-radius: 10px;">
                <h2>Log In</h2>
                @if (count($errors) > 0)
                    <div class="p-1">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-warning alert-danger fade show" role="alert">{{ $error }} <button
                                    type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></div>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group my-4">
                        <input type="email" placeholder="Enter Your Email" name="email" class="form-control"
                            style="background-color: transparent; padding: 20px; border: 2px solid #ddd;" required>
                    </div>
                    <div class="form-group my-4">
                        <input type="password" placeholder="Enter Your Password" name="password" class="form-control"
                            style="background-color: transparent; padding: 20px; border: 2px solid #ddd;" required>
                    </div>
                    <div class="form-group">
                        <button class="btn text-white w-full"
                            style="background-color: #714dd7; width: 100%; padding: 10px;">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">

@include('backend.partials.head')

<body>

    @yield('content')


    @include('sweetalert::alert')

    <!-- jQuery-js include -->
    <script src="{{ asset('assets/backend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Countdown-js include -->
    <script src="{{ asset('assets/backend/assets/js/countdown.js') }}"></script>
    <!-- Bootstrap-js include -->
    <script src="{{ asset('assets/backend/assets/js/bootstrap.min.js') }}"></script>
    <!-- jQuery-validate-js include -->
    <script src="{{ asset('assets/backend/assets/js/jquery.validate.min.js') }}"></script>
    <!-- Custom-js include -->
    <script src="{{ asset('assets/backend/assets/js/script.js') }}"></script>

</body>

</html>

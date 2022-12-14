<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>

    @yield('content')

    @include('sweetalert::alert')

    <script src="{{ asset('assets/frontend/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assetsassets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script
        src="../../../../../../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>
    <script src="{{ asset('assets/frontend/assets/js/form-step.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/switch.js') }}"></script>
    <script>
        $("#customFile").change(function() {
            filename = this.files[0].name
        });
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        $('.datepicker').datepicker({
            clearBtn: true,
            format: "dd/mm/yyyy"
        });
    </script>
</body>

</html>

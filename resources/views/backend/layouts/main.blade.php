<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ config('app.name') }} </title>

    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}">

</head>

<body>
    <div id='quiz' class='quiz-container intro-hidden'>
        @yield('content')
    </div>

    @include('sweetalert::alert')

</body>

</html>

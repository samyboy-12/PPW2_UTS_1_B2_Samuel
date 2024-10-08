<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <div class="topnav">
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/news') }}">News</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/about') }}">About</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

    @include('footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

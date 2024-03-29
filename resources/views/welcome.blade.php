<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="h-screen flex justify-center items-center">

    @auth
    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="">Log in</a>
    @endauth

</body>

</html>
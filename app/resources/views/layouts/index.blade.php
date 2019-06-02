<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel course')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @yield('meta')

</head>
<body>

    @include('layouts.header')

    <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>


    @section('javascript')
    <script src="{{asset('js/app.js')}}"></script>
    @show

</body>
</html>

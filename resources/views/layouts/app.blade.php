<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title','LaraBBS')laraver 进阶教程</title>
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div id="app" class="page">
        @include('layouts._header')
        <div class='container'>
            @yield('content')
        </div>
        @include('layouts._footer')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/storage/img/pokeball.png">
    <title>Pokedex</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body class="{{Str::contains(Route::getCurrentRoute()->uri(),'create')? 'bg-dark' : null}}">
    @include('partials.header')
    @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
    
</body>
</html>
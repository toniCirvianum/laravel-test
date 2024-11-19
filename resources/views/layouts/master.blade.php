<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titol - @yield('titol')</title>
</head>
<body>
    @section('header')
        <h1>Header</h1>
        <hr>
    @show

    <div class="container">
        @yield('content')
    </div>

    @section('footer')
        <hr>
        <h1>Footer</h1> 
    @show
    
</body>
</html>
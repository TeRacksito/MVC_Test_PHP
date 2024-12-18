<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App - @yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            @include('layouts.menu')
        </ul>
    </nav>
    <h1>@yield('title')</h1>
    <main>
        @section('content')
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea libero commodi sapiente harum obcaecati nihil quasi excepturi tempore, asperiores provident fuga, est cupiditate ut illum cum molestias non vero nobis?</p>
        @show
    </main>
    
</body>
</html>
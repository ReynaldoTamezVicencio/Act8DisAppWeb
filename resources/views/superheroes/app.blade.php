<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Superhéroes')</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        nav a { margin-right: 10px; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('superheroes.index') }}">Inicio</a>
        <a href="{{ route('superheroes.create') }}">Agregar Superhéroe</a>
    </nav>
    <hr>
    <div>
        @yield('content')
    </div>
</body>
</html>
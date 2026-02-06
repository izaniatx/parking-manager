<!DOCTYPE html>
<html>
<head>
    <title>Parking Manager</title>
</head>
<body>
    <nav>
        <a href="{{ route('coches.index') }}">Inicio</a>
    </nav>

    <div class="container">
        @yield('contenido')
    </div>
</body>
</html>
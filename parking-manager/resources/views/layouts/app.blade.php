<!DOCTYPE html>
<html>
<head>
    <title>Parking Manager</title>
</head>
<body>
    <nav>
        <ul style="display: flex; gap: 15px; list-style: none;">
            <li><a href="{{ route('coches.index') }}">Lista de coches</a></li>
            <li><a href="{{ route('coches.create') }}">Nuevo coche</a></li>
            <li><a href="{{ route('coches.buscar_form') }}">Buscar</a></li>
        </ul>
    </nav>
    <hr>
    @yield('contenido')
</body>
</html>
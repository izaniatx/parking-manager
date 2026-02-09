<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('coches.index') }}">🅿️ ParkingManager</a>
            <div class="navbar-nav ms-auto"> {{-- ms-auto lo mueve a la derecha --}}
                <a class="nav-link" href="{{ route('coches.index') }}">Lista de coches</a>
                <a class="nav-link" href="{{ route('coches.create') }}">Nuevo coche</a>
                <a class="nav-link" href="{{ route('coches.buscar_form') }}">Buscar</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow-sm p-4">
            @yield('contenido')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
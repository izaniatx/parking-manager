@extends('layouts.app')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Vehículos en el Parking</h2>
        <a href="{{ route('coches.create') }}" class="btn btn-success btn-sm">+ Añadir Coche</a>
    </div>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Dueño</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @each('partials.coche', $coches, 'coche')
        </tbody>
    </table>
@endsection
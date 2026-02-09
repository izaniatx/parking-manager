@extends('layouts.app')

@section('contenido')
    <h1>Listado de Aparcamiento</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- 
               @each(VISTA, COLECCIÓN, VARIABLE_INDIVIDUAL, VISTA_VACÍA_OPCIONAL) 
            --}}
            @each('partials.coche', $coches, 'coche')
        </tbody>
    </table>
@endsection
@extends('layouts.app')
@section('contenido')
    <h1>Buscar Coche por Matrícula</h1>
    <form action="{{ route('coches.buscar') }}" method="GET">
        <input type="text" name="matricula" placeholder="Introduce matrícula...">
        <button type="submit">Buscar</button>
    </form>

    @if(isset($coches))
        <table border="1">
            @each('partials.coche', $coches, 'coche')
        </table>
    @endif
@endsection
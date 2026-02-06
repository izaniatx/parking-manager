@extends('layouts.app')

@section('contenido')
    <h1>Nuevo Coche</h1>
    <form action="{{ route('coches.store') }}" method="POST">
        @csrf <input type="text" name="matricula" placeholder="Matrícula">
        <input type="text" name="marca" placeholder="Marca">
        <input type="text" name="modelo" placeholder="Modelo">
        <button type="submit">Guardar</button>
    </form>

    <hr>

    <h1>Lista de Coches</h1>
    <table>
        @foreach($coches as $coche)
            <tr>
                <td>{{ $coche->matricula }} - {{ $coche->marca }} {{ $coche->modelo }}</td>
                <td>
                    <form action="{{ route('coches.destroy', $coche->id) }}" method="POST">
                        @csrf
                        @method('DELETE') <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
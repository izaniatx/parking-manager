@extends('layouts.app')

@section('contenido')
    <h1>Añadir un Nuevo Coche</h1>

    <form action="{{ route('coches.store') }}" method="POST">
        @csrf 

        <div>
            <label>Matrícula:</label><br>
            <input type="text" name="matricula" value="{{ old('matricula') }}">
            @error('matricula')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Marca:</label><br>
            <input type="text" name="marca" value="{{ old('marca') }}">
            @error('marca')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Modelo:</label><br>
            <input type="text" name="modelo" value="{{ old('modelo') }}">
            @error('modelo')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Registrar Coche</button>
    </form>
@endsection
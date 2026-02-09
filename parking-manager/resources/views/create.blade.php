@extends('layouts.app')

@section('contenido')
    <h2 class="mb-4">Registrar entrada de vehículo</h2>

    <form action="{{ route('coches.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Matrícula</label>
            <input type="text" name="matricula" class="form-control @error('matricula') is-invalid @enderror" value="{{ old('matricula') }}">
            @error('matricula') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control @error('marca') is-invalid @enderror" value="{{ old('marca') }}">
            @error('marca') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo') }}">
            @error('modelo') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100">Guardar Coche</button>
    </form>
@endsection
@extends('layouts.app')

@section('contenido')
    <h2 class="mb-4">Registrar entrada de vehículo</h2>

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('coches.store') }}" method="POST">
        @csrf

        <div>
            <label>
                <input type="radio" name="user_mode" value="existing" checked>
                Usuario existente
            </label>

            <label>
                <input type="radio" name="user_mode" value="new">
                Nuevo usuario
            </label>
        </div>

        <div id="existing-user">
            <label>Usuario</label>
            <select name="user_id">
                <option value="">Seleccione un usuario</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">
                        {{ $user->name }} ({{ $user->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <div id="new-user" style="display:none">

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" name="lastName" class="form-control @error('lastName') is-invalid @enderror" value="{{ old('lastName') }}">
                @error('lastName') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>


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

    <script>
        document.querySelectorAll('input[name="user_mode"]').forEach(radio => {
            radio.addEventListener('change', function () {
                document.getElementById('existing-user').style.display =
                    this.value === 'existing' ? 'block' : 'none';

                document.getElementById('new-user').style.display =
                    this.value === 'new' ? 'block' : 'none';
            });
        });
    </script>

@endsection
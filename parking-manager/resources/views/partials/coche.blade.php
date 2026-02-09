<tr>
    <td class="align-middle fw-bold">{{ $coche->matricula }}</td>
    <td class="align-middle">{{ $coche->marca }}</td>
    <td class="align-middle">{{ $coche->modelo }}</td>
    <td class="align-middle">{{ $coche->user->name }} {{ $coche->user->lastName }}</td>
    <td class="text-center">
        <form action="{{ route('coches.destroy', $coche->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres borrarlo?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger btn-sm">
                Borrar
            </button>
        </form>
    </td>
</tr>
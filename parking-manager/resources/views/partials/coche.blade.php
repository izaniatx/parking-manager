
<tr>
    <td>{{ $coche->matricula }}</td>
    <td>{{ $coche->marca }}</td>
    <td>{{ $coche->modelo }}</td>
    <td>
        <form action="{{ route('coches.destroy', $coche->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form>
    </td>
</tr>
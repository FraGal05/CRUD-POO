<h1>Lista de Estados</h1>
<a href="{{ route('estados.create') }}">Agregar Estado</a>
<table border="1">
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($estados as $estado)
        <tr>
            <td>{{ $estado->codigo }}</td>
            <td>{{ $estado->nombre }}</td>
            <td>
                <a href="{{ route('estados.edit', $estado->codigo) }}">Editar</a>
                <form action="{{ route('estados.destroy', $estado->codigo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

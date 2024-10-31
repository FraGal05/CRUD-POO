<h1>Lista de Clientes</h1>
<a href="{{ route('clientes.create') }}">Agregar Cliente</a>
<table border="1">
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de Nacimiento</th>
    </tr>
    @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->dni }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td>
            <td>{{ $cliente->fecha_nac }}</td>
            <td>
                <a href="{{ route('clientes.edit', $cliente->dni) }}">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->dni) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<h1>Lista de Ordenes</h1>
<a href="{{ route('ordenes.create') }}">Agregar Orden</a>
<table border="1">
    <tr>
        <th>Nro Orden</th>
        <th>Dirección</th>
        <th>Tarea</th>
        <th>Cliente</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    @foreach($ordenes as $orden)
        <tr>
            <td>{{ $orden->nrOrden }}</td>
            <td>{{ $orden->direccion }}</td>
            <td>{{ $orden->tarea->nombre }}</td>
            <td>{{ $orden->cliente->nombre }} {{ $orden->cliente->apellido }}</td>
            <td>{{ $orden->fecha }}</td>
            <td>{{ $orden->estado->nombre }}</td>
            <td>
                <a href="{{ route('ordenes.edit', $orden->nrOrden) }}">Editar</a>
                <form action="{{ route('ordenes.destroy', $orden->nrOrden) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

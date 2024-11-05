<h1>Lista de Tareas</h1>
<a href="{{ route('tareas.create') }}">Agregar Tarea</a>
<table border="1">
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($tareas as $tarea)
        <tr>
            <td>{{ $tarea->codigo }}</td>
            <td>{{ $tarea->nombre }}</td>
            <td>
                <a href="{{ route('tareas.edit', $tarea->codigo) }}">Editar</a>
                <form action="{{ route('tareas.destroy', $tarea->codigo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<h1>Lista de Tareas y Estados</h1>

<table border="1">
    <thead>
        <tr>
            <th>Nombre de la Tarea</th>
            <th>Descripción</th>
            <th>Estado Actual</th>
            <th>Actualizar Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tareas as $tarea)
        <tr>
            <td>{{ $tarea->nombre }}</td>
            <td>{{ $tarea->descripcion }}</td>
            <td>{{ $tarea->estado ? $tarea->estado->estado : 'Sin Estado' }}</td>
            <td>
                <form action="{{ route('tareas.update.estado', $tarea->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <select name="estado_id" required>
                        <option value="">Seleccionar Estado</option>
                        @foreach($estados as $estado)
                        <option value="{{ $estado->id }}" 
                            {{ $tarea->estado_id == $estado->id ? 'selected' : '' }}>
                            {{ $estado->estado }}
                        </option>
                        @endforeach
                    </select>
                    <button type="submit">Guardar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


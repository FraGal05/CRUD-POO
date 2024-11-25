<h1>Editar Orden</h1>
<form action="{{ route('ordenes.update', $orden->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" value="{{ $orden->direccion }}" required><br>

    <label for="cliente_id">Cliente:</label>
    <select name="cliente_id" id="cliente_id" required>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}" {{ $orden->cliente_id == $cliente->id ? 'selected' : '' }}>
                {{ $cliente->nombre }} {{ $cliente->apellido }}
            </option>
        @endforeach
    </select><br>

    <label for="tarea_id">Tarea:</label>
    <select name="tarea_id" id="tarea_id" required>
        @foreach($tareas as $tarea)
            <option value="{{ $tarea->id }}" {{ $orden->tarea_id == $tarea->id ? 'selected' : '' }}>
                {{ $tarea->nombre }}
            </option>
        @endforeach
    </select><br>

    <p><strong>Estado:</strong> {{ $orden->estado->nombre }}</p>

    <button type="submit">Actualizar</button>
</form>

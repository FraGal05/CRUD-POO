<form action="{{ route('ordenes.update', $orden->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nrOrden">Número de Orden:</label>
    <input type="text" name="nrOrden" id="nrOrden" value="{{ $orden->nrOrden }}" required>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" value="{{ $orden->direccion }}" required>

    <label for="cliente_id">Cliente:</label>
    <select name="cliente_id" id="cliente_id" required>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->dni }}" {{ $orden->cliente_id == $cliente->dni ? 'selected' : '' }}>
                {{ $cliente->nombre }} {{ $cliente->apellido }}
            </option>
        @endforeach
    </select>

    <label for="tarea_id">Tarea:</label>
    <select name="tarea_id" id="tarea_id" required>
        @foreach($tareas as $tarea)
            <option value="{{ $tarea->codigo }}" {{ $orden->tarea_id == $tarea->codigo ? 'selected' : '' }}>
                {{ $tarea->nombre }}
            </option>
        @endforeach
    </select>

    <label for="estado_id">Estado:</label>
    <select name="estado_id" id="estado_id" required>
        @foreach($estados as $estado)
            <option value="{{ $estado->codigo }}" {{ $orden->estado_id == $estado->codigo ? 'selected' : '' }}>
                {{ $estado->nombre }}
            </option>
        @endforeach
    </select>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" value="{{ $orden->fecha }}" required>

    <button type="submit">Actualizar</button>
</form>

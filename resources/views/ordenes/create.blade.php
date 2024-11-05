<form action="{{ route('ordenes.store') }}" method="POST">
    @csrf
    <label for="nrOrden">Número de Orden:</label>
    <input type="text" name="nrOrden" id="nrOrden" required>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" required>

    <label for="cliente_id">Cliente:</label>
    <select name="cliente_id" id="cliente_id" required>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->dni }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
        @endforeach
    </select>

    <label for="tarea_id">Tarea:</label>
    <select name="tarea_id" id="tarea_id" required>
        @foreach($tareas as $tarea)
            <option value="{{ $tarea->codigo }}">{{ $tarea->nombre }}</option>
        @endforeach
    </select>

    <label for="estado_id">Estado:</label>
    <select name="estado_id" id="estado_id" required>
        @foreach($estados as $estado)
            <option value="{{ $estado->codigo }}">{{ $estado->nombre }}</option>
        @endforeach
    </select>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" required>

    <button type="submit">Guardar</button>
</form>

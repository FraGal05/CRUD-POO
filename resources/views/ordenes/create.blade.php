<h1>Crear Nueva Orden</h1>
<form action="{{ route('ordenes.store') }}" method="POST">
    @csrf

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" required><br>

    <label for="cliente_id">Cliente:</label>
    <select name="cliente_id" id="cliente_id" required>
        <option value="">Seleccione un cliente</option>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
        @endforeach
    </select><br>

    <label for="tarea_id">Tarea:</label>
    <select name="tarea_id" id="tarea_id" required>
        <option value="">Seleccione una tarea</option>
        @foreach($tareas as $tarea)
            <option value="{{ $tarea->id }}">{{ $tarea->nombre }}</option>
        @endforeach
    </select><br>

    <button type="submit">Guardar</button>
</form>

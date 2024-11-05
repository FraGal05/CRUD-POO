<h1>Agregar Orden</h1>
<form action="{{ route('ordenes.store') }}" method="POST">
    @csrf
    Nro Orden: <input type="text" name="nrOrden"><br>
    Dirección: <input type="text" name="direccion"><br>
    Tarea:
    <select name="tarea">
        @foreach($tareas as $tarea)
            <option value="{{ $tarea->codigo }}">{{ $tarea->nombre }}</option>
        @endforeach
    </select><br>
    Cliente:
    <select name="cliente">
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->dni }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
        @endforeach
    </select><br>
    Fecha: <input type="date" name="fecha"><br>
    Estado:
    <select name="estado">
        @foreach($estados as $estado)
            <option value="{{ $estado->codigo }}">{{ $estado->nombre }}</option>
        @endforeach
    </select><br>
    <button type="submit">Guardar</button>
</form>

<h1>Editar Orden</h1>
<form action="{{ route('ordenes.update', $orden->nrOrden) }}" method="POST">
    @csrf
    @method('PUT')
    Nro Orden: <input type="text" name="nrOrden" value="{{ $orden->nrOrden }}" disabled><br>
    Dirección: <input type="text" name="direccion" value="{{ $orden->direccion }}"><br>
    Tarea:
    <select name="tarea">
        @foreach($tareas as $tarea)
            <option value="{{ $tarea->codigo }}" {{ $orden->tarea->codigo == $tarea->codigo ? 'selected' : '' }}>
                {{ $tarea->nombre }}
            </option>
        @endforeach
    </select><br>
    Cliente:
    <select name="cliente">
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->dni }}" {{ $orden->cliente->dni == $cliente->dni ? 'selected' : '' }}>
                {{ $cliente->nombre }} {{ $cliente->apellido }}
            </option>
        @endforeach
    </select><br>
    Fecha: <input type="date" name="fecha" value="{{ $orden->fecha }}"><br>
    Estado:
    <select name="estado">
        @foreach($estados as $estado)
            <option value="{{ $estado->codigo }}" {{ $orden->estado->codigo == $estado->codigo ? 'selected' : '' }}>
                {{ $estado->nombre }}
            </option>
        @endforeach
    </select><br>
    <button type="submit">Actualizar</button>
</form>

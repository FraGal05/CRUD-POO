<h1>Editar Cliente</h1>
<form action="{{ route('clientes.update', $cliente->DNI) }}" method="POST">
    @csrf
    @method('PUT')
    Nombre: <input type="text" name="nombre" value="{{ $cliente->nombre }}"><br>
    Apellido: <input type="text" name="apellido" value="{{ $cliente->apellido }}"><br>
    Fecha de Nacimiento: <input type="date" name="fecha_nac" value="{{ $cliente->fecha_nac }}"><br>
    <button type="submit">Actualizar</button>
</form>

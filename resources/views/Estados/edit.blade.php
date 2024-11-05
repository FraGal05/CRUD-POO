<h1>Editar Estado</h1>
<form action="{{ route('estados.update', $estado->codigo) }}" method="POST">
    @csrf
    @method('PUT')
    Código: <input type="text" name="codigo" value="{{ $estado->codigo }}" disabled><br>
    Nombre: <input type="text" name="nombre" value="{{ $estado->nombre }}"><br>
    <button type="submit">Actualizar</button>
</form>

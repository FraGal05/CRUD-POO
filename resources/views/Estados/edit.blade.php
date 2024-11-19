<h1>Editar Estado</h1>
<form action="{{ route('estados.update', $estado->codigo) }}" method="POST">
    @csrf
    @method('PUT')
    Nombre: <input type="text" name="nombre" value="{{ $estado->nombre }}"><br>
    Descripcion: <input type="text" name="descripción" value="{{$estado->descripcion}}"><br>
    <button type="submit">Actualizar</button>
</form>

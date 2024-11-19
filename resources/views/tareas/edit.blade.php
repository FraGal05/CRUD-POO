<h1>Editar Tarea</h1>
<form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nombre: <input type="text" name="nombre" value="{{ $tarea->nombre }}"><br>
    Descripción: <input type="text" name="descripción" value="{{$tarea->descripcion}}"><br>
    <button type="submit">Actualizar</button>
</form>

<h1>Editar Tarea</h1>
<form action="{{ route('tareas.update', $tarea->codigo) }}" method="POST">
    @csrf
    @method('PUT')
    Código: <input type="text" name="codigo" value="{{ $tarea->codigo }}" disabled><br>
    Nombre: <input type="text" name="nombre" value="{{ $tarea->nombre }}"><br>
    <button type="submit">Actualizar</button>
</form>

<h1>Agregar Tarea</h1>
<form action="{{ route('tareas.store') }}" method="POST">
    @csrf
    Nombre: <input type="text" name="nombre"><br>
    Descripción: <textarea name="descripcion"></textarea><br>
    <button type="submit">Guardar</button>
</form>

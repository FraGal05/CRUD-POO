<h1>Agregar Estado</h1>
<form action="{{ route('estados.store') }}" method="POST">
    @csrf
    Código: <input type="text" name="codigo"><br>
    Nombre: <input type="text" name="nombre"><br>
    <button type="submit">Guardar</button>
</form>

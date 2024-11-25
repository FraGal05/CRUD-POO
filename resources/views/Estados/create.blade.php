<h1>Agregar Estado</h1>
<form action="{{ route('estados.store') }}" method="POST">
    @csrf
    <label for="estado">Estado:</label>
    <input type="text" name="estado" id="estado" required><br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion" required></textarea><br>

    <button type="submit">Guardar</button>
</form>

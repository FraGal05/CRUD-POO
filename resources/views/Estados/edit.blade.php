<h1>Editar Estado</h1>
<form action="{{ route('estados.update', $estado->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="estado">Estado:</label>
    <input type="text" name="estado" id="estado" value="{{ $estado->estado }}" required><br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion" required>{{ $estado->descripcion }}</textarea><br>

    <button type="submit">Actualizar</button>
</form>

<h1>Agregar Cliente</h1>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    DNI: <input type="text" name="dni"><br>
    Nombre: <input type="text" name="nombre"><br>
    Apellido: <input type="text" name="apellido"><br>
    Fecha de Nacimiento: <input type="date" name="fecha_nac"><br>
    <button type="submit">Guardar</button>
</form>

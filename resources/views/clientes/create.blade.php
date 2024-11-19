<h1>Agregar Cliente</h1>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    DNI: 
    <input type="text" name="DNI" value="{{ old('DNI') }}">
    @error('DNI')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>

    Nombre: 
    <input type="text" name="nombre" value="{{ old('nombre') }}">
    @error('nombre')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>

    Apellido: 
    <input type="text" name="apellido" value="{{ old('apellido') }}">
    @error('apellido')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>

    Fecha de Nacimiento: 
    <input type="date" name="fecha_nac" value="{{ old('fecha_nac') }}">
    @error('fecha_nac')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">Guardar</button>
</form>

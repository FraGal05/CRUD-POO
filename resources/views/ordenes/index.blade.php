<h1>Listado de Órdenes</h1>


<a href="{{ route('ordenes.create') }}">Crear Nueva Orden</a>

<table border="1">
    <thead>
        <tr>
            <th>Nro de Orden</th>
            <th>Dirección</th>
            <th>Cliente</th>
            <th>Tarea</th>
            <th>Estado</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ordenes as $orden)
            <tr>
                <td>{{ $orden-> N°Orden}}</td> 
                <td>{{ $orden->direccion }}</td>
                <td>{{ $orden->cliente->nombre }} {{ $orden->cliente->apellido }}</td>
                <td>{{ $orden->tarea->nombre }}</td>
                <td>{{ $orden->estado->nombre }}</td>
                <td>{{ $orden->fecha }}</td>
                <td>
               
                    <a href="{{ route('ordenes.edit', $orden->id) }}">Editar</a>
                    <form action="{{ route('ordenes.destroy', $orden->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de eliminar esta orden?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif


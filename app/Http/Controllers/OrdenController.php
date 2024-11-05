<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Cliente;
use App\Models\Tarea;
use App\Models\Estado;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    
    public function index()
    {
        $ordenes = Orden::with(['cliente', 'tarea', 'estado'])->get();
        return view('ordenes.index', compact('ordenes'));
    }

    // Formulario para crear una nueva orden
    public function create()
    {
        $clientes = Cliente::all();
        $tareas = Tarea::all();
        $estados = Estado::all();
        return view('ordenes.create', compact('clientes', 'tareas', 'estados'));
    }

    // Guardar nueva orden
    public function store(Request $request)
    {
        $request->validate([
            'nrOrden' => 'required|string',
            'direccion' => 'required|string',
            'cliente_id' => 'required|exists:clientes,dni',
            'tarea_id' => 'required|exists:tareas,codigo',
            'estado_id' => 'required|exists:estados,codigo',
            'fecha' => 'required|date',
        ]);

        Orden::create($request->all());

        return redirect()->route('ordenes.index');
    }

    // Formulario para editar una orden
    public function edit(Orden $orden)
    {
        $clientes = Cliente::all();
        $tareas = Tarea::all();
        $estados = Estado::all();
        return view('ordenes.edit', compact('orden', 'clientes', 'tareas', 'estados'));
    }

    // Actualizar una orden existente
    public function update(Request $request, Orden $orden)
    {
        $request->validate([
            'direccion' => 'required|string',
            'cliente_id' => 'required|exists:clientes,dni',
            'tarea_id' => 'required|exists:tareas,codigo',
            'estado_id' => 'required|exists:estados,codigo',
            'fecha' => 'required|date',
        ]);

        $orden->update($request->all());

        return redirect()->route('ordenes.index');
    }

    // Eliminar una orden
    public function destroy(Orden $orden)
    {
        $orden->delete();

        return redirect()->route('ordenes.index');
    }
}

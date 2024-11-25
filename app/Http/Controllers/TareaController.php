<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function create()
    {
        return view('tareas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:tareas',
            'descripcion' => 'nullable|string|max:1000',
        ]);

        Tarea::create($request->all());
        return redirect()->route('tareas.index')->with('success', 'Tarea creada con éxito.');
    }

    public function edit(Tarea $tarea)
    {
        return view('tareas.edit', compact('tarea'));
    }

    public function update(Request $request, Tarea $tarea)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:tareas,nombre,' . $tarea->id,
            'descripcion' => 'nullable|string|max:1000',
        ]);

        $tarea->update($request->all());
        return redirect()->route('tareas.index')->with('success', 'Tarea actualizada con éxito.');
    }

    public function updateEstado(Request $request, Tarea $tarea)
{
    // Validar la entrada
    $request->validate([
        'estado_id' => 'required|exists:estados,id', // Asegúrate de que el estado exista
    ]);

    // Actualizar el estado de la tarea
    $tarea->estado_id = $request->estado_id;
    $tarea->save();

    // Redirigir o devolver respuesta
    return redirect()->route('tareas.index')->with('success', 'Estado actualizado correctamente.');
}

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas.index')->with('success', 'Tarea eliminada con éxito.');
    }
}

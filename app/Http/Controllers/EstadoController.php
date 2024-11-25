<?php
namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Tarea;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {

        $tareas = Tarea::with('estado')->get();

        $estados = Estado::all();
        return view('estados.index', compact('tareas','estados'));
    }

    public function create()
    {
        return view('estados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        Estado::create([
            'estado' => $request->estado,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('estados.index')->with('success', 'Estado creado exitosamente.');
    }

    public function edit(Estado $estado)
    {
        return view('estados.edit', compact('estado'));
    }

    public function update(Request $request, Estado $estado)
    {
        $request->validate([
            'estado' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        $estado->update($request->only(['estado', 'descripcion']));

        return redirect()->route('estados.index')->with('success', 'Estado actualizado exitosamente.');
    }

    public function updateTareaEstado(Request $request, Tarea $tarea)
    {
        $request->validate([
            'estado_id' => 'required|exists:estados,id',
        ]);

        $tarea->update(['estado_id' => $request->estado_id]);

        return redirect()->route('estados.index')->with('success', 'Estado actualizado correctamente.');
    }

    public function destroy(Estado $estado)
    {
        $estado->delete();
        return redirect()->route('estados.index')->with('success', 'Estado eliminado exitosamente.');
    }
}
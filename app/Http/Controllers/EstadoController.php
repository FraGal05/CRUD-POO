<?php
namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::all();
        return view('estados.index', compact('estados'));
    }

    public function create()
    {
        return view('estados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:estados,codigo', // Validamos 'codigo'
            'nombre' => 'required',
        ]);
    
        Estado::create($request->all());
        return redirect()->route('estados.index');
    }
    

    public function edit(Estado $estado)
    {
        return view('estados.edit', compact('estado'));
    }

    public function update(Request $request, Estado $estado)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $estado->update($request->all());
        return redirect()->route('estados.index');
    }

    public function destroy(Estado $estado)
    {
        $estado->delete();
        return redirect()->route('estados.index');
    }
}

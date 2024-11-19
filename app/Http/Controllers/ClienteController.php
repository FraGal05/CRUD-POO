<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'DNI' => 'required|unique:clientes,DNI',  // Asegúrate de que 'DNI' esté en mayúsculas si corresponde
        'nombre' => 'required',
        'apellido' => 'required',
        'fecha_nac' => 'required|date'
    ]);

    Cliente::create([
        'DNI' => $request->DNI,
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'fecha_nac' => $request->fecha_nac
    ]);

    return redirect()->route('clientes.index')->with('success', 'Cliente guardado correctamente');

}


    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nac' => 'required|date'
        ]);

        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}

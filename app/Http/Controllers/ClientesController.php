<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('Clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Correo' => 'required|email|max:255',
            'Direccion' => 'required|string|max:255',
            'contrasena' => 'required|min:6',
        ]);

        Clientes::create([
            'Nombre' => $request->Nombre,
            'Correo' => $request->Correo,
            'Direccion' => $request->Direccion,
            'contrasena' => bcrypt($request->contrasena), // ✅ Paso 5: encriptar
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente agregado.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Correo' => 'required|email|max:255',
            'Direccion' => 'required|string|max:255',
        ]);

        $cliente = Clientes::findOrFail($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Clientes::findOrFail($id)->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado.');
    }
}
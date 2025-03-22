<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_real' => 'required|string|max:255',
            'nombre_superheroe' => 'required|string|max:255',
            'foto_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'informacion_adicional' => 'nullable|string',
        ]);
    
        if ($request->hasFile('foto_url')) {
            $data['foto_url'] = $request->file('foto_url')->store('superheroes', 'public');
        }
    
        Superheroe::create($data);
    
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.show', compact('superheroe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.edit', compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Superheroe $superheroe)
    {
        $data = $request->validate([
            'nombre_real' => 'required|string|max:255',
            'nombre_superheroe' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'informacion_adicional' => 'nullable|string',
        ]);
    
        // Si el usuario subió una nueva foto
        if ($request->hasFile('foto')) {
            // Eliminar la foto anterior si existe
            if ($superheroe->foto) {
                Storage::disk('public')->delete($superheroe->foto);
            }
            // Guardar la nueva imagen
            $data['foto'] = $request->file('foto')->store('superheroes', 'public');
        }
    
        // Actualizar la información del superhéroe
        $superheroe->update($data);
    
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        $superheroe->delete(); // Solo se marca como eliminado (soft delete)
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe eliminado correctamente.');
    }
    public function deleted() {
        $superheroes = Superheroe::onlyTrashed()->get();
        return view('superheroes.deleted', compact('superheroes'));
    }
    
    public function restore($id) {
        Superheroe::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('superheroes.deleted')->with('success', 'Superhéroe restaurado');
    }
}


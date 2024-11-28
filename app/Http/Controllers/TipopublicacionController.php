<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipopublicacionRequest;
use App\Http\Requests\UpdateTipopublicacionRequest;
use App\Models\Tipopublicacion;
use Illuminate\Http\Request;

class TipopublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoPublicacion = Tipopublicacion::all();
        return view('admin.tipoPublicacion', compact('tipoPublicacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipopublicacionRequest $request)
    {
        // Crear un nuevo tipo de publicación
        TipoPublicacion::create($request->validated());
        
        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->route('tipo-publicacion.index')->with('success', 'Tipo de publicación creado exitosamente');
    }

    public function edit($tipo)
    {
        $tipo = TipoPublicacion::findOrFail($tipo);
        return view('admin.tipoPublicacionEdit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $tipoPublicacion = TipoPublicacion::findOrFail($id);
            $tipoPublicacion->update($request->all());
            return redirect()->route('tipo-publicacion.index')->with('success', 'Updated');
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eliminar el tipo de publicación
        Tipopublicacion::destroy($id);
        
        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->route('tipo-publicacion.index')->with('success', 'Tipo de publicación eliminado exitosamente');
    }
}
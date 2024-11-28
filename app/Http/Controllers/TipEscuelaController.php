<?php

namespace App\Http\Controllers;

use App\Models\Tipescuela;
use Illuminate\Http\Request;

class TipEscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = Tipescuela::all();
        return view('admin.tipEscuela', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomEscuela' => 'required|string|max:255',
        ]);

        Tipescuela::create($request->all());
        
        return redirect()->route('tipescuela.index')->with('success', 'Tipo de escuela creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipescuela $tipescuela)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($tipescuela)
    {
        $tipo = Tipescuela::findOrFail($tipescuela);
        return view('admin.tipEscuelaEdit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipescuela $tipescuela)
    {
        $request->validate([
            'nomEscuela' => 'required|string|max:255',
        ]);

        $tipescuela->update($request->all());
        return redirect()->route('tipescuela.index')->with('success', 'Tipo de escuela actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($tipescuela)
    {
        Tipescuela::destroy($tipescuela);
        return redirect()->route('tipescuela.index')->with('success', 'Tipo de escuela eliminado con éxito.');
    }
}

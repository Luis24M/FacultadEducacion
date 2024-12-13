<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AplicacionesExt;

class AplicacionesExtController extends Controller
{
    public function index()
    {
        $aplicaciones = AplicacionesExt::all();
        return view('admin.aplicacionesExt', compact('aplicaciones'));
    }

    public function store()
    {
        $data = request()->validate([
            'sineace' => 'string | nullable',
            'horario' => 'string | nullable',
            'inventario' => 'string | nullable',
            'investigacion' => 'string | nullable',
        ]);

        AplicacionesExt::create($data);

        return redirect()->route('aplicacionesExt.index')->with('status', 'Aplicación creada con éxito');
    }

    public function edit($id)
    {
        $aplicacion = AplicacionesExt::find($id);
        return view('admin.editAplicacionesExt',compact('aplicacion'));
    }

    public function update(Request $request, $id)
    {
        $aplicacion = AplicacionesExt::find($id);
        $aplicacion->update($request->all());
        return redirect()->route('aplicacionesExt.index')->with('status', 'Aplicación actualizada con éxito');
    }

    public function destroy(AplicacionesExt $aplicacion)
    {
        $aplicacion->delete();
        return redirect()->route('aplicacionesExt.index');
    }

    public function sineace() {
        $aplicaciones = AplicacionesExt::whereNotNull('sineace')->latest()->first();
        return view('unidades.unidad_calidad.repositorio', compact('aplicaciones'));
    }
}

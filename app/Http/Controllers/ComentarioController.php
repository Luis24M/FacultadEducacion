<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Usuario;
use App\Models\Tipescuela;

class ComentarioController extends Controller
{

    public function index()
    {
        $comentarios = Comentario::all();
        return view('admin.comentarios', compact('comentarios'));
    }

    public function store(Request $request)
    {
        $comentario = new Comentario();
        $comentario->nombre = $request->nombre;
        $comentario->apellido = $request->apellido;
        $comentario->correo = $request->correo;
        $comentario->asunto = $request->asunto;
        $comentario->mensaje = $request->mensaje;
        $comentario->escuela = $request->escuela;
        $comentario->save();
        return redirect()->back()->with('success', 'Comentario enviado exitosamente');
    }

    public function edit($id)
    {
        $comentario = Comentario::find($id);
        return view('admin.comentariosEdit', compact('comentario'));
    }

    public function update(Request $request, $id)
    {
        $comentario = Comentario::find($id);
        $comentario->update($request->all());
        return redirect()->route('comentario.index')->with('success', 'Comentario actualizado exitosamente');
    }

    public function destroy($id)
    {
        Comentario::destroy($id);
        return redirect()->route('comentario.index')->with('success', 'Comentario eliminado exitosamente');
    }

}

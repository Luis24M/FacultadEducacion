<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use App\Models\Tipopublicacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function dashboard()
    {
        $publicaciones = Publicacion::all();
        $tipos = Tipopublicacion::all();
        return view('dashboard', compact('publicaciones', 'tipos'));
    }
    
    public function index()
    {
        $tipos = Tipopublicacion::all();
        return view('admin.publicacion', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para realizar esta acción.');
        }
        $data = $request->validate([
            'nombrePublicacion' => 'required|string|max:255',
            'desPublicacion' => 'required|string|max:255',
            'imgPublicacion' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idTipoPublicacion' => 'required|integer|exists:tipo_publicacion,id', // Verifica que el tipo existe
        ]);

        if ($request->hasFile('imgPublicacion')) {
            $path = $request->file('imgPublicacion')->store('public'); // Esto lo guarda en storage/app/public/publicaciones
            $data['imgPublicacion'] = Storage::url($path); // Generar la URL pública del archivo
        }
        
        

        $data['fechaPublicacion'] = now();
        $data['idUsuario'] = Auth::id();

        Publicacion::create($data);

        return redirect()->route('dashboard')->with('success', 'Publicación creada con éxito.');
    }

    public function edit($id)
    {
        return view('admin.publicacionEdit', [
            'publicacion' => Publicacion::findOrFail($id),
            'tipos' => Tipopublicacion::all()
        ]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nombrePublicacion' => 'required|string|max:255',
            'desPublicacion' => 'required|string|max:255',
            'imgPublicacion' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idTipoPublicacion' => 'required|integer|exists:tipo_publicacion,id', // Verifica que el tipo existe
        ]);

        $publicacion = Publicacion::findOrFail($id);

        if ($request->hasFile('imgPublicacion')) {
            $path = $request->file('imgPublicacion')->store('public'); // Esto lo guarda en storage/app/public/publicaciones
            $data['imgPublicacion'] = Storage::url($path); // Generar la URL pública del archivo
        }

        $publicacion->update($data);

        return redirect()->route('dashboard')->with('success', 'Publicación actualizada con éxito.');
    }

    public function destroy($id)
    {
        Publicacion::destroy($id);
        return redirect()->route('dashboard')->with('success', 'Publicación eliminada con éxito.');
    }
}

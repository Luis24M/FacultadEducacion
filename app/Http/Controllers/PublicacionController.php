<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store para guardar la publicacion
        // protected $fillable = [
        //     'nombrePublicacion',
        //     'desPublicacion',
        //     'fechaPublicacion',
        //     'imgPublicacion',
        //     'idUsuario',
        //     'idTipoPublicacion'
        // ];
        $publicacion = new Publicacion();
        $publicacion->nombrePublicacion = $request->nombrePublicacion;
        $publicacion->desPublicacion = $request->desPublicacion;
        $publicacion->fechaPublicacion = $request->fechaPublicacion;
        $publicacion->imgPublicacion = $request->imgPublicacion;
        $publicacion->idUsuario = $request->idUsuario;
        $publicacion->idTipoPublicacion = $request->idTipoPublicacion;
        $publicacion->save();
        return redirect()->route('admin.publicacion');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

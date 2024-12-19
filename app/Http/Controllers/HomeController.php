<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use App\Models\Tipopublicacion;

class HomeController extends Controller
{
    public function tipoNoticia()
    {
        if (!Tipopublicacion::where('nombreTipo', 'Noticia')->exists()) {
            Tipopublicacion::create([
                'nombreTipo' => 'Noticia'
            ]);
        }
    }

    public function tipoGaleria()
    {
        if (!Tipopublicacion::where('nombreTipo', 'Galeria')->exists()) {
            Tipopublicacion::create([
                'nombreTipo' => 'Galeria'
            ]);
        }
    }

    public function tipoEvento()
    {
        if (!Tipopublicacion::where('nombreTipo', 'Evento')->exists()) {
            Tipopublicacion::create([
                'nombreTipo' => 'Evento'
            ]);
        }
    }

    public function index()
    {
        $this->tipoNoticia();
        $this->tipoEvento();
        $noticia = Tipopublicacion::where('nombreTipo', 'Noticia')->first()->id;
        $evento = Tipopublicacion::where('nombreTipo', 'Evento')->first()->id;
        $noticias = Publicacion::where('idTipoPublicacion', $noticia)->orderBy('fechaPublicacion', 'desc')->take(3)->get();
        $eventos = Publicacion::where('idTipoPublicacion', $evento)->orderBy('fechaPublicacion', 'desc')->take(2)->get();
        return view('welcome', compact('noticias', 'eventos'));
    }

    public function noticias()
    {
        $this->tipoNoticia();
        $noticia = Tipopublicacion::where('nombreTipo', 'Noticia')->first()->id;
        $noticias = Publicacion::where('idTipoPublicacion', $noticia)->orderBy('fechaPublicacion', 'desc')->get();
        return view('noticias', compact('noticias'));
    }

    public function galeria()
    {
        $this->tipoGaleria();
        $galeria = Tipopublicacion::where('nombreTipo', 'Galeria')->first()->idTipo;
        $galerias = Publicacion::where('idTipoPublicacion', $galeria)->orderBy('fechaPublicacion', 'desc')->get();
        return view('galeria', compact('galerias'));
    }


    public function showDocument($id){
        $rutasDocumentos=[
            '1'=>'../../../pdfs/unidades/practicas-preprofesionales/1.Ficha de monitoreo de tutoria.pdf',
            '2'=>'../../../pdfs/unidades/practicas-preprofesionales/2.FICHA PARA EVALUAR LA SESIÓN DE APRENDIZAJE.pdf',
            '3'=>'../../../pdfs/unidades/practicas-preprofesionales/3.REGISTRO DE ASISTENCIA filosofia.pdf',
        ];

        $ruta=['url'=>$rutasDocumentos[$id]];

        return view('unidades.practica_preprofesional.index',compact('ruta'));
    }
}

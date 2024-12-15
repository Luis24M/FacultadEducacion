<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\TipopublicacionController;
use App\Http\Controllers\TipEscuelaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\AplicacionesExtController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/noticias', [HomeController::class, 'noticias'])->name('noticias');

Route::get('/galeria', [HomeController::class, 'galeria'])->name('galeria');

Route::get('/institucional', function () {
    return view('institucional');
})->name('institucional');

Route::get('/unidades', function () {
    return view('unidades.index');
})->name('unidades');

// Rutas Pregrado
Route::get('/pregrado', function () {
    return view('pregrado.index');
})->name('pregrado');

    // Educacion Inicial
    Route::get('/pregrado/inicial', function () {
        return view('pregrado.inicial');
    })->name('pregrado.inicial');

    // Educacion Primaria
    Route::get('/pregrado/primaria', function () {
        return view('pregrado.educacion_primaria.index');
    })->name('pregrado.primaria');

    // Educacion Secundaria
    Route::get('/pregrado/secundaria', function () {
        return view('pregrado.educacion_secundaria.index');
    })->name('pregrado.secundaria');

        Route::get('/pregrado/secundaria/filosofia', function(){
            return view('pregrado.educacion_secundaria.filosofia');
        })->name('pregrado.secundaria.filosofia');

        Route::get('/pregrado/secundaria/matematicas', function () {
            return view('pregrado.educacion_secundaria.matematicas');
        })->name('pregrado.secundaria.matematicas');

        Route::get('/pregrado/secundaria/historia', function () {
            return view('pregrado.educacion_secundaria.historia');
        })->name('pregrado.secundaria.historia');

        Route::get('/pregrado/secundaria/literatura', function () {
            return view('pregrado.educacion_secundaria.literatura');
        })->name('pregrado.secundaria.literatura');

        Route::get('/pregrado/secundaria/idiomas', function () {
            return view('pregrado.educacion_secundaria.idiomas');
        })->name('pregrado.secundaria.idiomas');

    Route::get('/pregrado/cdlc', function () {
        return view('pregrado.cdlc');
    })->name('pregrado.cdlc');

// Rutas Unidades
Route::get('/unidades/unidad_calidad', function () {
    return view('unidades.unidad_calidad.index');
})->name('unidades.unidad_calidad');

Route::get('/unidades/unidad_calidad/auditoria_interna', function () {
    return view('unidades.unidad_calidad.auditoria_interna');
})->name('unidades.auditoria_interna');

Route::get('/unidades/unidad_calidad/iso_9001', function () {
    return view('unidades.unidad_calidad.iso_9001');
})->name('unidades.iso_9001');

Route::get('/unidades/unidad_calidad/acreditacion', function () {
    return view('unidades.unidad_calidad.acreditacion');
})->name('unidades.acreditacion');

Route::get('/unidades/unidad_calidad/licenciamiento', function () {
    return view('unidades.unidad_calidad.licenciamiento');
})->name('unidades.licenciamiento');

Route::get('/unidades/unidad_calidad/colaboradores', function () {
    return view('unidades.unidad_calidad.colaboradores');
})->name('unidades.colaboradores');

Route::get('/unidades/unidad_calidad/repositorio', [AplicacionesExtController::class, 'sineace'])->name('unidades.repositorio');




Route::get('/unidades/unidadInvestigacion/InformeInvestigacion', function (){
    return view('unidades.unidadInvestigacion.InformeInvestigacion.index');
})->name('unidades.unidadInvestigacion.informeInvestigacion');

Route::get('/unidades/unidadInvestigacion/ComiteInvestigacion', function (){
    return view('unidades.unidadInvestigacion.ComiteInvestigacion.index');
})->name('unidades.unidadInvestigacion.comiteInvestigacion');



//Morales - Unidad de Practicas Preprofesionales
Route::get('/unidades/practica_preprofesional/Repositorio', function (){
    return view('unidades.practica_preprofesional.RepositorioDocumental.index');
})->name('unidades.practica_preprofesional.informeInvestigacion');

Route::get('/unidades/practica_preprofesional/Comite', function (){
    return view('unidades.practica_preprofesional.Comite.index');
})->name('unidades.practica_preprofesional.comiteInvestigacion');

Route::get('/unidades/practica_preprofesional/Repositorio/{id}',[HomeController::class,'showDocument'])->name('unidades.practica_preprofesional.informeInvestigacion.showDocument');


//Sadhu

Route::get('/unidades/unidad_soporte/index', function () {
    return view('unidades.unidad_soporte.index');
})->name('unidades.soporte');

////////////////////////////////////////////////
Route::get('/unidades/rsu/documentacion', function () {
    return view('unidades.rsu.documentacion');
})->name('unidades.rsu.documentacion');


Route::get('/unidades/rsu/contacto', function () {
    return view('unidades.rsu.contacto');
})->name('unidades.rsu.contacto');


Route::get('/unidades/rsu', function () {
    return view('unidades.rsu.index');
})->name('unidades.rsu.index');

Route::post('comentario', [ComentarioController::class, 'store'])->name('comentario.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('publicacion', PublicacionController::class);
    Route::resource('tipo-publicacion', TipopublicacionController::class);
    Route::resource('comentario', ComentarioController::class)->only(['index', 'edit', 'update', 'destroy']);
    Route::resource('aplicacionesExt', AplicacionesExtController::class);

    Route::get('/dashboard', [PublicacionController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin/galeria', function () {
        return view('admin.galeria');
    })->name('admin.galeria');
});

require __DIR__.'/auth.php';

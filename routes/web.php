<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');

Route::get('/institucional', function () {
    return view('institucional.index');
})->name('institucional');

Route::get('/pregrado', function () {
    return view('pregrado.index');
})->name('pregrado');

Route::get('/posgrado', function () {
    return view('posgrado.index');
})->name('posgrado');

Route::get('/unidades', function () {
    return view('unidades.index');
})->name('unidades');

Route::get('/departamentos_academicos', function () {
    return view('departamentos_academicos.index');
})->name('departamentos_academicos');

Route::get('/segunda_especialidad', function () {
    return view('segunda_especialidad.index');
})->name('segunda_especialidad');

Route::get('/cidunt', function () {
    return view('cidunt.index');
})->name('cidunt');

Route::get('/rnc', function () {
    return view('rnc.index');
})->name('rnc');



// Rutas Institucional


// Rutas Pregrado
Route::get('/pregrado/cdlc', function () {
    return view('pregrado.cienciasDeLaComunicacion.index');
})->name('pregrado.cdlc');
    // Educacion Inicial
    Route::get('/pregrado/inicial', function () {
        return view('pregrado.educacion_inicial.index');
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
        return view('pregrado.educacion_secundaria.matematicas.index');
    })->name('pregrado.secundaria.matematicas');

    Route::get('/pregrado/secundaria/historia', function () {
        return view('pregrado.educacion_secundaria.historia.index');
    })->name('pregrado.secundaria.historia');

    Route::get('/pregrado/secundaria/idiomas', function () {
        return view('pregrado.educacion_secundaria.idiomas.index');
    })->name('pregrado.secundaria.idiomas');

// Rutas Posgrado


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

Route::get('/unidades/practica_preprofesional', function (){
    return view('unidades.practica_preprofesional.index');
})->name('unidades.practica_preprofesional');

// Rutas Departamentos Academicos


// Rutas Segunda Especialidad


// Rutas CIDUNT


// Rutas RNC
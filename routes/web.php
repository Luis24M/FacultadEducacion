<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/institucional', function () {
    return view('institucional.index');
})->name('institucional');

Route::get('/pregrado', function () {
    return view('pregrado.index');
})->name('pregrado');

Route::get('/pregrado/CDLC', function () {
    return view('pregrado.cienciasDeLaComunicacion.index');
})->name('pregrado');
   
Route::get('/posgrado', function () {
    return view('posgrado.index');
})->name('posgrado');

Route::get('/unidades', function () {
    return view('unidades.index');
})->name('unidades');

Route::get('/departamentos-academicos', function () {
    return view('departamentos-academicos.index');
})->name('departamentos-academicos');

Route::get('/segunda-especialidad', function () {
    return view('segunda-especialidad.index');
})->name('segunda-especialidad');

Route::get('/cidunt', function () {
    return view('cidunt.index');
})->name('cidunt');

Route::get('/rnc', function () {
    return view('rnc.index');
})->name('rnc');



// Rutas Institucional


// Rutas Pregrado

Route::get('/educacion_primaria', function () {
    return view('pregrado.educacion_primaria.index');
})->name('educacion_primaria');

// Rutas Posgrado


// Rutas Unidades
Route::get('/unidades/unidad_calidad', function () {
    return view('unidades.unidad_calidad.index');
})->name('unidad_calidad');

Route::get('/unidades/unidad_calidad/iso_9001', function () {
    return view('unidades.unidad_calidad.iso_9001.index');
})->name('iso_9001');

Route::get('/unidades/unidad_calidad/acreditacion', function () {
    return view('unidades.unidad_calidad.acreditacion.index');
})->name('acreditacion');

Route::get('/unidades/unidad_calidad/colaboradores', function () {
    return view('unidades.unidad_calidad.colaboradores.index');
})->name('colaboradores');
// Rutas Departamentos Academicos


// Rutas Segunda Especialidad


// Rutas CIDUNT


// Rutas RNC
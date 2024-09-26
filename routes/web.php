<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

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


// Rutas Posgrado


// Rutas Unidades


// Rutas Departamentos Academicos


// Rutas Segunda Especialidad


// Rutas CIDUNT


// Rutas RNC
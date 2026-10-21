<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Ruta principal de bienvenida o prueba
Route::get('/', function () {
    return view('welcome'); // o puedes redirigir al login o a tus reportes
});

// Ruta para tu componente de crear reporte
Volt::route('/crear-reporte', 'crear-reporte');

// Ruta para listar tus reportes
Volt::route('/mis-reportes', 'mis-reportes');
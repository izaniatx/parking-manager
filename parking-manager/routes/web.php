<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CocheController;


// Listar coches
Route::get('/', [CocheController::class, 'index'])->name('coches.index');

// añadir coches
Route::post('/coches', [CocheController::class, 'store'])->name('coches.store');

// borrar coches
Route::delete('/coches/{id}', [CocheController::class, 'destroy'])->name('coches.destroy');

// Nueva ruta para ver el formulario de creación
Route::get('/car', [CocheController::class, 'create'])->name('coches.create');

Route::get('/buscar', [CocheController::class, 'buscar'])->name('coches.buscar');
Route::get('/buscar-form', function() { return view('buscar'); })->name('coches.buscar_form');
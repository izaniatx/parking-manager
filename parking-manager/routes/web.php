<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CocheController;

Route::get('/', [CocheController::class, 'index'])->name('coches.index');

Route::get('/coches/create', [CocheController::class, 'create'])->name('coches.create');

Route::post('/coches', [CocheController::class, 'store'])->name('coches.store');

Route::delete('/coches/{id}', [CocheController::class, 'destroy'])->name('coches.destroy');

Route::get('/buscar', [CocheController::class, 'buscar'])->name('coches.buscar');
Route::get('/buscar-form', function() { return view('buscar'); })->name('coches.buscar_form');

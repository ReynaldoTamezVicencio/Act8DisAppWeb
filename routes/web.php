<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroeController;

// Ruta para la lista de superhéroes
Route::get('/superheroes', [SuperheroeController::class, 'index'])->name('superheroes.index');

// Ruta para mostrar el formulario de creación de un nuevo superhéroe
Route::get('/superheroes/create', [SuperheroeController::class, 'create'])->name('superheroes.create');

// Ruta para guardar un nuevo superhéroe (POST)
Route::post('/superheroes', [SuperheroeController::class, 'store'])->name('superheroes.store');

// Ruta para mostrar los detalles de un superhéroe
Route::get('/superheroes/{superheroe}', [SuperheroeController::class, 'show'])->name('superheroes.show');

// Ruta para mostrar el formulario de edición de un superhéroe
Route::get('/superheroes/{superheroe}/edit', [SuperheroeController::class, 'edit'])->name('superheroes.edit');

// Ruta para actualizar los datos de un superhéroe (PUT o PATCH)
Route::put('/superheroes/{superheroe}', [SuperheroeController::class, 'update'])->name('superheroes.update');

// Ruta para eliminar un superhéroe
Route::delete('/superheroes/{superheroe}', [SuperheroeController::class, 'destroy'])->name('superheroes.destroy');

Route::get('superheroes/deleted', [SuperheroeController::class, 'deleted'])->name('superheroes.deleted');
Route::post('superheroes/{id}/restore', [SuperheroeController::class, 'restore'])->name('superheroes.restore');

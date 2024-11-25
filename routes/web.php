<?php

use App\Http\Controllers\TareaController;
use App\Http\Controllers\TrabajadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tareas/index', [TareaController::class, 'index']);
Route::get('/tareas/create', [TareaController::class, 'create']);
Route::get('/tareas/edit/{id}', [TareaController::class, 'edit']);
Route::get('/trabajadores/show', [TrabajadorController::class, 'show']);
Route::post('/tareas/store', [TareaController::class, 'store']);
Route::patch('/tareas/update', [TareaController::class, 'update']);




Route::get('/trabajadores/index', [TrabajadorController::class, 'index']);
Route::get('/trabajadores/create', [TrabajadorController::class, 'create']);
Route::post('/trabajadores/store', [TrabajadorController::class, 'store']);


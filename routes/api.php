<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\AsignacionesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::apiResource('asignacion', AsignacionesController::class);

Route::apiResource('estudiante', EstudianteController::class);

Route::apiResource('materia', MateriaController::class);
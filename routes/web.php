<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\AsignacionesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/asignacion', [AsignacionesController::class, 'agregarMaterias'])->name('asignacion.agregarMaterias');

Route::resource('/materia', MateriaController::class);
Route::resource('/estudiante', EstudianteController::class);
<?php

use Illuminate\Http\Request;

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

Route::resource('representantes','Relacional\RepresentanteController');
Route::resource('estudiantes','Relacional\EstudianteController');
Route::resource('tutores','Relacional\TutorController');
Route::resource('formaciontutores','Relacional\FormacionTutorController');
Route::resource('asignaturas','Relacional\AsignaturaController');
Route::resource('asignaturatutores','Relacional\AsignaturaTutorController');

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
Route::get('estadisticaTutores/{idtutor}','Relacional\TutorController@estadisticaxtutor');
Route::get('diezMejores','Relacional\TutorController@diezMejores');
Route::get('tutoresMayoresa40','Relacional\TutorController@tutoresMayoresa40');
Route::get('tutoresMenoresa25','Relacional\TutorController@tutoresMenoresa25');
Route::get('tutores25a30','Relacional\TutorController@tutores25a30');
Route::get('tutores30a40','Relacional\TutorController@tutores30a40');
Route::get('costoPromedioPorMaterias','Relacional\AsignaturaController@costoPromedioxMateria');
Route::resource('formaciontutores','Relacional\FormacionTutorController');
Route::resource('asignaturas','Relacional\AsignaturaController');
Route::resource('asignaturatutores','Relacional\AsignaturaTutorController');
Route::resource('historicos','NoRelacional\HistoricoController');
Route::post('mail', 'mailController@contact')->name('enviar');

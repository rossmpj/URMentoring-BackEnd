<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    // CRUD resources and other admin routes
    CRUD::resource('representante', 'RepresentanteCrudController');
    CRUD::resource('metodopago', 'MetodopagoCrudController');
    CRUD::resource('tutor', 'TutorCrudController');
    CRUD::resource('asignatura', 'AsignaturaCrudController');
    CRUD::resource('formaciontutor', 'FormaciontutorCrudController');
    CRUD::resource('asignaturatutor', 'AsignaturaTutorCrudController');
    CRUD::resource('estudiante', 'EstudianteCrudController');
    CRUD::resource('calificacion', 'CalificacionCrudController');
    CRUD::resource('tutoria', 'TutoriaCrudController');
    CRUD::resource('pagotutoria', 'PagoTutoriaCrudController');
    CRUD::resource('documentosrefuerzo', 'DocumentosrefuerzoCrudController');
}); 

<?php

use Illuminate\Database\Seeder;
use App\Models\Relacional\FormacionTutor;

class FormacionTutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('formacion_tutores')->delete() ;
    	FormacionTutor::create([
        	'nivel_estudios' => 'Máster/Postgrado',
        	'experiencia'=>10,
        	'profesion'=>'Físico y filósofo',
			'id_tutor' => 'T125465709',
	    ]);
	    FormacionTutor::create([
        	'nivel_estudios' => 'Tercer nivel',
        	'experiencia'=>5,
        	'profesion'=>'Ingeniería en sistemas',
			'id_tutor' => 'T175433246',
	    ]);
	    FormacionTutor::create([
        	'nivel_estudios' => 'Máster/Postgrado',
        	'experiencia'=>3,
        	'profesion'=>'Física de partículas',
			'id_tutor' => 'T034578101',
	    ]);
	    FormacionTutor::create([
        	'nivel_estudios' => 'Máster/Postgrado',
        	'experiencia'=>7,
        	'profesion'=>'Máster en tratamiento estadístico y computacional de la información',
			'id_tutor' => 'T784563984',
	    ]);
	    FormacionTutor::create([
        	'nivel_estudios' => 'Grado en Educación Primaria',
        	'experiencia'=>5,
        	'profesion'=>'Maestro',
			'id_tutor' => 'T098784562',
	    ]);
    }
}

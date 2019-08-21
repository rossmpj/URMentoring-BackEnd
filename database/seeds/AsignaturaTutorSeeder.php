<?php

use Illuminate\Database\Seeder;
use App\AsignaturaTutor;

class AsignaturaTutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignatura_tutores')->delete() ;
    	
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG01',
        	'id_tutor' => 'T175433246'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG03',
        	'id_tutor' => 'T175433246'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG04',
        	'id_tutor' => 'T034578101'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG05',
        	'id_tutor' => 'T125465709'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG06',
        	'id_tutor' => 'T034578101'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG07',
        	'id_tutor' => 'T034578101'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG08',
        	'id_tutor' => 'T784563984'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG09',
        	'id_tutor' => 'T098784562'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG02',
        	'id_tutor' => 'T125465709'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG10',
        	'id_tutor' => 'T098784562'
	    ]);
	    AsignaturaTutor::create([
        	'id_asignatura' => 'ASIG07',
        	'id_tutor' => 'T784563984'
	    ]);
    }
}

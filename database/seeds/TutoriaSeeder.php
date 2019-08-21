<?php

use Illuminate\Database\Seeder;
use App\Tutoria;

class TutoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutorias')->delete() ;
        Tutoria::create([
            'costo' => 2.50,
            'estado' => 'Pendiente',
            'hora_inicio' => '14:00',
            'hora_fin' => '15:00',
            'tema' => 'Células',
            'detalle' => 'Funciones de las células',
            'fecha' => '2019-08-18',
            'id_asignatura_tutor' => '1',
            'id_estudiante' => 'E031548795',
        ]);
        Tutoria::create([
            'costo' => 3.50,
            'estado' => 'Pendiente',
            'hora_inicio' => '7:00',
            'hora_fin' => '8:00',
            'tema' => 'Estequiometría',
            'detalle' => 'Ejercicios de formulación',
            'fecha' => '2019-08-24',
            'id_asignatura_tutor' => '10',
            'id_estudiante' => 'E032587419',
        ]);
        Tutoria::create([
            'costo' => 5.50,
            'estado' => 'Realizada',
            'hora_inicio' => '15:00',
            'hora_fin' => '16:00',
            'tema' => 'Factorización',
            'detalle' => 'Repaso de casos 1 y 2 de Factorización',
            'fecha' => '2019-08-14',
            'id_asignatura_tutor' => '9',
            'id_estudiante' => 'E920135782',
        ]);
        Tutoria::create([
            'costo' => 5.00,
            'estado' => 'Cancelada',
            'hora_inicio' => '20:00',
            'hora_fin' => '21:00',
            'tema' => 'Present simple ',
            'detalle' => 'Ejercicios de repaso',
            'fecha' => '2019-08-14',
            'id_asignatura_tutor' => '3',
            'id_estudiante' => 'E013256984',
        ]);
        Tutoria::create([
            'costo' => 4.50,
            'estado' => 'Realizada',
            'hora_inicio' => '12:00',
            'hora_fin' => '13:00',
            'tema' => 'Bases de datos en Access',
            'detalle' => 'Explicación detallada',
            'fecha' => '2019-08-07',
            'id_asignatura_tutor' => '8',
            'id_estudiante' => 'E013256985',
        ]);
    }
}

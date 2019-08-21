<?php

use Illuminate\Database\Seeder;
use App\Calificacion;      

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calificaciones')->delete() ;
        Calificacion::create([
            'comentario' => 'Excepcional, me ha encanatado',
            'valoracion' => 5,
            'id_estudiante' => 'E031548795',
            'id_tutor' => 'T125465709',
        ]);
        Calificacion::create([
            'comentario' => 'Es fantástico llegar con dudas a clase que para tí son irresolubles y que Vicent en unos pocos minutos te deje todo los conceptos claros y con la sensación de que todo es más fácil de como viene en los libros. Es un crack. Me encanta como explica',
            'valoracion' => 5,
            'id_estudiante' => 'E032587419',
            'id_tutor' => 'T034578101',
        ]);
        Calificacion::create([
            'comentario' => 'Excelente clase! explica de forma detallada y con paciencia los conceptos fundamentales para la resolución de problemas de física.',
            'valoracion' => 5,
            'id_estudiante' => 'E17536842',
            'id_tutor' => 'T784563984',
        ]);
        Calificacion::create([
            'comentario' => 'Bien, explica muy bien.',
            'valoracion' => 5,
            'id_estudiante' => 'E920135782',
            'id_tutor' => 'T098784562',
        ]);
        Calificacion::create([
            'comentario' => 'UNA CLASE PRODUCTIVA EN TODO MOMENTO',
            'valoracion' => 5,
            'id_estudiante' => 'E013256984',
            'id_tutor' => 'T034578101',
        ]);
        Calificacion::create([
            'comentario' => 'Excelente en todos los sentidos, tanto en explicación como en comprensión de las dudas, se nota que domina de sobra el temario. Explica todo de una forma muy sencilla que ayuda a retener los conceptos. Recomiendo 100%!',
            'valoracion' => 5,
            'id_estudiante' => 'E013256985',
            'id_tutor' => 'T175433246',
        ]);
        Calificacion::create([
            'comentario' => '',
            'valoracion' => 5,
            'id_estudiante' => 'E031548795',
            'id_tutor' => 'T125465709',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Relacional\DocumentosRefuerzo;

class DocumentosRefuerzoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('documentos_refuerzos')->delete() ;
        DocumentosRefuerzo::create([
            'descripcion' => 'Álgebra baldor',
            'comentario' => '1000 ejercicios ',
            'id_tutoria' => 1,
        ]);
        DocumentosRefuerzo::create([
            'descripcion' => '',
            'comentario' => '',
            'id_tutoria' => 2,
        ]);
        DocumentosRefuerzo::create([
            'descripcion' => 'Excepcional, me ha encanatado',
            'comentario' => '',
            'id_tutoria' => 3,
        ]);
        DocumentosRefuerzo::create([
            'descripcion' => 'Excepcional, me ha encanatado',
            'comentario' => '',
            'id_tutoria' => 4,
        ]);
        DocumentosRefuerzo::create([
            'descripcion' => 'Física Semanzky',
            'comentario' => 'Libro sexta edición',
            'id_tutoria' => 5,
        ]);        
    }
}

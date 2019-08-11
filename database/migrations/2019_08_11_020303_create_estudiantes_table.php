<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('id', 10);
            $table->string('nombre');
            $table->string('apellido');
            $table->char('sexo', 1);
            $table->date('fecha_nac');
            $table->string('correo');
            $table->timestamps();
            
            $table->string('id_representante', 10);
            $table->primary('id');

            $table->foreign('id_representante')
            ->references('id')->on('representantes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}

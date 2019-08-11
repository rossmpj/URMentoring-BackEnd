<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('costo');
            $table->string('estado');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('tema');
            $table->string('detalle');
            $table->date('fecha');
            $table->timestamps();

            $table->bigInteger('id_asignatura_tutor')->unsigned();
            $table->string('id_estudiante', 10);

            $table->foreign('id_asignatura_tutor')
            ->references('id')->on('asignatura_tutores')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_estudiante')
            ->references('id')->on('estudiantes')
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
        Schema::dropIfExists('tutorias');
    }
}

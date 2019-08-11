<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comentario');
            $table->integer('valoracion');
            $table->timestamps();

            $table->string('id_estudiante', 10);
            $table->string('id_tutor', 10);

            $table->foreign('id_estudiante')
            ->references('id')->on('estudiantes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_tutor')
            ->references('id')->on('tutores')
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
        Schema::dropIfExists('calificaciones');
    }
}

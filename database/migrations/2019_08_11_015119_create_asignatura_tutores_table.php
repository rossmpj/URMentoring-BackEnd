<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturaTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_tutores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('id_asignatura');
            $table->string('id_tutor', 10);

            $table->foreign('id_asignatura')
            ->references('id')->on('asignaturas')
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
        Schema::dropIfExists('asignatura_tutores');
    }
}

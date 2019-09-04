<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosRefuerzosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_refuerzos', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('descripcion');
            $table->string('comentario');
            $table->timestamps();

            $table->bigInteger('id_tutoria')->unsigned();
            $table->foreign('id_tutoria')
            ->references('_id')->on('tutorias')
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
        Schema::dropIfExists('documentos_refuerzos');
    }
}

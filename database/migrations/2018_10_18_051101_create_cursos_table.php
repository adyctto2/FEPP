<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('imagen');
            $table->text('descripcion');
            $table->string('temario');
            $table->date('fecha');
            $table->string('duracion');
            $table->string('horarios');
            $table->string('lugar');
            $table->string('costo');
            $table->string('expositor');
            $table->string('certificacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}

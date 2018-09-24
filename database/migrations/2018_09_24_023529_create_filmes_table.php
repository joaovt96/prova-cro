<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->year('ano');
            $table->enum('genero', ['acao', 'animacao', 'aventura', 'comedia', 'documentario', 'drama', 'faroeste', 'ficcao', 'infantil', 'musical', 'romance', 'suspense', 'terror']);
            $table->string('diretor');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmes');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndFilmesUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_usuario', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('filme_id')->unsigned();
            $table->integer('usuario_id')->unsigned();

            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
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
        Schema::dropIfExists('filme_usuario');
    }
}

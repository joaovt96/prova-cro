<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('endereco_id')->unsigned();
            $table->integer('usuario_id')->unsigned();

            $table->foreign('endereco_id')->references('id')->on('enderecos');
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
        Schema::dropIfExists('endereco_usuario');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('grupo_id')->unsigned();
            $table->timestamps();

            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuarios')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('grupo_id')
                ->references('id')
                ->on('grupos')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->unique(['grupo_id', 'usuario_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos_usuarios');
    }
}

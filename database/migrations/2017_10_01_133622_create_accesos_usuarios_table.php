<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesos_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->string('ruta');
            $table->string('metodo', 10);
            $table->string('nombre', 50)->nullable();
            $table->timestamps();

            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuarios')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->unique(['usuario_id', 'ruta', 'metodo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesos_usuarios');
    }
}

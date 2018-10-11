<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesosGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesos_grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->string('ruta');
            $table->string('metodo', 10);
            $table->string('nombre', 50)->nullable();
            $table->timestamps();

            $table->foreign('grupo_id')
                ->references('id')
                ->on('grupos')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->unique(['grupo_id', 'ruta', 'metodo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesos_grupos');
    }
}

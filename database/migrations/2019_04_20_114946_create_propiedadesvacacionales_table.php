<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropiedadesvacacionalesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedadesvacacionales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente');
            $table->string('pais');
            $table->string('nombredesarrollo');
            $table->string('fechaCompra');
            $table->string('mantenimiento');
            $table->string('precio');
            $table->string('comentario');
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
        Schema::drop('propiedadesvacacionales');
    }
}

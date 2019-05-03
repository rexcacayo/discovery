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
            $table->string('pais')->nullable();
            $table->string('nombredesarrollo')->nullable();
            $table->string('fechaCompra')->nullable();
            $table->string('mantenimiento')->nullable();
            $table->string('precio')->nullable();
            $table->string('comentario')->nullable();
            $table->integer('cliente_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
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

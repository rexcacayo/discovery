<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuturasVacacionesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('futuras_vacaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lugar')->nullable();
            $table->string('ano_uso')->nullable();
            $table->string('costo_noche')->nullable();
            $table->string('numero_noche')->nullable();
            $table->string('sub_total')->nullable();
            $table->integer('cliente_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('futuras_vacaciones');
    }
}

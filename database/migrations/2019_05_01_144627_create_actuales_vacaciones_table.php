<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActualesVacacionesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuales_vacaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lugar')->nullable();
            $table->string('costo_noche')->nullable();
            $table->string('numero_noche')->nullable();
            $table->string('total')->nullable();
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
        Schema::drop('actuales_vacaciones');
    }
}

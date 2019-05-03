<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarjetacreditosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetacreditos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo')->nullable();
            $table->string('marca')->nullable();
            $table->string('numero')->nullable();
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
        Schema::drop('tarjetacreditos');
    }
}

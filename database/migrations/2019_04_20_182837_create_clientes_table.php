<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->string('hora');
            $table->string('nombreinvitado');
            $table->string('nombreconyugue');
            $table->string('edadinvitado');
            $table->string('edadconyugue');
            $table->string('ocupacioninvitado');
            $table->string('ocupacionconyugue');
            $table->string('activoinvitado');
            $table->string('direccion');
            $table->string('pais');
            $table->string('propietarioclub');
            $table->string('aceptoterm');
            $table->string('comentarios');
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
        Schema::dropIfExists('clientes');
    }
}

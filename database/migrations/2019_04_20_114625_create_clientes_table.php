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
            $table->string('fecha')->nullable();
            $table->string('hora')->nullable();
            $table->string('promotor');
            $table->string('nombreinvitado')->nullable();
            $table->string('nombreconyugue')->nullable();
            $table->string('edadinvitado')->nullable();
            $table->string('edadconyugue')->nullable();
            $table->string('ocupacioninvitado')->nullable();
            $table->string('ocupacionconyugue')->nullable();
            $table->string('activoinvitado')->nullable();
            $table->string('direccion')->nullable();
            $table->string('pais')->nullable();
            $table->string('propietarioclub')->nullable();
            $table->string('aceptoterm')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('vacacionan')->nullable();
            $table->string('importancia_vacaciones')->nullable();
            $table->string('porque')->nullable();
            $table->string('tipos_vacaciones')->nullable();
            $table->string('porque2')->nullable();
            $table->string('tiempo_reserva')->nullable();
            $table->string('reserva')->nullable();
            $table->string('cuanto_ano')->nullable();
            $table->string('cuanto_noche')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('internacional')->nullable();
            $table->string('internacional_donde')->nullable();
            $table->string('presentaciones')->nullable();
            $table->string('presentaciones_socio')->nullable();
            $table->string('presentaciones_porque')->nullable();
            $table->string('presentaciones_costo')->nullable();
            $table->string('opinion_sisvacacionales')->nullable();
            $table->string('total3vacacionespasadas')->nullable();
            $table->string('total3vacacionesfuturo')->nullable();
            $table->string('promedio_anual')->nullable();
            $table->string('proyeccion10')->nullable();
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

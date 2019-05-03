<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClubvacacionalsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubvacacionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreclub')->nullable();
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
        Schema::drop('clubvacacionals');
    }
}

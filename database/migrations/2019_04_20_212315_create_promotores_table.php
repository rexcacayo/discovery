<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotoresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('area')->nullable();
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
        Schema::drop('promotores');
    }
}

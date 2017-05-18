<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
  
            $table->integer('beachcourt_id')->unsigned();
            $table->foreign('beachcourt_id')->references('id')->on('beachcourts');
            $table->integer('k1_sandqualitaet');
            $table->integer('k2_sicherheit');
            $table->integer('k3_netzqualitaet');
            $table->integer('k4_sonnenqualitaet');
            $table->integer('k5_luftqualitaet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}

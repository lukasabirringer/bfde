<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeachcourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beachcourts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('courtName')->unique();
            $table->string('postalCode');
            $table->string('city');
            $table->string('street');
            $table->string('houseNumber');
            $table->text('latitude');
            $table->text('longitude');
            $table->string('operator');
            $table->string('operatorURL');
            $table->boolean('chargeable')->default(0);
            $table->string('notes');
            $table->integer('courtCountOutdoor');
            $table->integer('courtCountIndoor');
            $table->boolean('public')->default(0);
            $table->double('realRating');
            $table->integer('ratingCount');
            $table->timestamp('ratingDate');
            $table->string('picturePath');
            $table->rememberToken();
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
        Schema::dropIfExists('beachcourts');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmittedbeachcourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submittedbeachcourts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('postalCode');
            $table->string('city');
            $table->string('street')->nullable();
            $table->string('houseNumber')->nullable();
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();
            $table->string('operator')->nullable();
            $table->string('operatorURL')->nullable();
            $table->boolean('chargeable')->default(0)->nullable();
            $table->string('notes')->nullable();
            $table->integer('courtCountOutdoor')->nullable();
            $table->integer('courtCountIndoor')->nullable();
            $table->boolean('public')->default(0)->nullable();
            $table->string('picturePath')->nullable();
            $table->string('submitState');
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
        Schema::dropIfExists('submittedbeachcourts');
    }
}

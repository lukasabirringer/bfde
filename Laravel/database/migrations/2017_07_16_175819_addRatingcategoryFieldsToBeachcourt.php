<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRatingcategoryFieldsToBeachcourt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beachcourts', function (Blueprint $table) {
            $table->double('SandRating')->nullable();
            $table->double('NetRating')->nullable();
            $table->double('CourtRating')->nullable();
            $table->double('EnvironmentRating')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

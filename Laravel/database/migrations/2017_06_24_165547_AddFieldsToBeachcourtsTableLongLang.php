<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToBeachcourtsTableLongLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beachcourts', function($table) {
            $table->text('latitude');
            $table->text('longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('beachcourts');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

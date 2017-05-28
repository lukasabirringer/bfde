<?php

use Illuminate\Database\Seeder;

class BeachcourtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Beachcourt::class, 50)->create();
    }
}

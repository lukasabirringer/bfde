<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Beachcourt::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'courtName' => $faker->name,
        'postalCode' => $faker->postcode,
        'city' => $faker->city,
        'street' => $faker->streetName,
        'houseNumber' => $faker->buildingNumber,
        'latitude' => $faker->latitude($min = -90, $max = 90),
        'longitude' => $faker->longitude($min = -180, $max = 180),
        'operator' => $faker->name,
        'operatorURL' => $faker->url,
        'chargeable' => $faker->randomElement($array = array ('0','1')),
        'notes' => $faker->text($maxNbChars = 50),  
        'courtCountOutdoor' => $faker->randomDigitNotNull,
        'courtCountIndoor' => $faker->randomDigit,
        'public' => $faker->randomElement($array = array ('0','1')),
    ];
});

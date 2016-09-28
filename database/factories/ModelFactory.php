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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Plant::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'eng_name' => $faker->name,
        'chi_name' => $faker->name,
        'description' => $faker->name,
        'temp_min' => $faker->state,
        'temp_max' => $faker->state,
        'pH_min' => $faker->state,
        'pH_max' => $faker->state,
        'cropcycle_min' => $faker->state,
        'cropcycle_max' => $faker->state,
        'photoperiod_min' => $faker->state,
        'photoperiod_max' => $faker->state,
    ];
});

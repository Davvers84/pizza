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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Dough::class, function (Faker\Generator $faker) {
    return [
        'dough_name' =>  $faker->word
        , 'dough_base_size_inches' =>  $faker->randomNumber(2)
        , 'dough_extra_price' =>  $faker->randomFloat(2)
        , 'dough_stuffed_crust' =>  $faker->boolean
    ];
});

$factory->define(App\Models\Pizza::class, function (Faker\Generator $faker) {
    return [
        'pizza_name' =>  $faker->word
        , 'dough_id' =>  $faker->randomNumber(2)
        , 'pizza_base_price' =>  $faker->randomFloat(2)

    ];
});

$factory->define(App\Models\Menu::class, function (Faker\Generator $faker) {
    return [
        'menu_name' =>  $faker->word
    ];
});

$factory->define(App\Models\MenuPizzas::class, function (Faker\Generator $faker) {
    return [
        'menu_id' =>  $faker->randomNumber(2)
        , 'pizza_id' =>  $faker->randomNumber(2)

    ];
});
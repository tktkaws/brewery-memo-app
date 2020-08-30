<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brewery;
use App\User;
use Faker\Generator as Faker;

$factory->define(Brewery::class, function (Faker $faker) {
    return [
        'name' => $faker->text(50),
        'body' => $faker->text(500),
        'user_id' => function() {
            return factory(User::class);
        }
    ];
});
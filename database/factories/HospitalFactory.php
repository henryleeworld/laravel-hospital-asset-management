<?php

/** @var Factory $factory */

use App\Hospital;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Hospital::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

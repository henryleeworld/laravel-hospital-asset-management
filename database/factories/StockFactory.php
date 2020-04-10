<?php

/** @var Factory $factory */

use App\Asset;
use App\Stock;
use App\Hospital;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Stock::class, function (Faker $faker) {
    return [
        'current_stock' => 0,
        'asset_id'    => Asset::inRandomOrder()->first()->id,
        'hospital_id' => Hospital::inRandomOrder()->first()->id,
    ];
});

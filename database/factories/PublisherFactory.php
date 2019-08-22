<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Publisher;

$factory->define(Publisher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->sentence,
    ];
});

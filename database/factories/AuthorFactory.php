<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Author;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'story' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
    ];
});

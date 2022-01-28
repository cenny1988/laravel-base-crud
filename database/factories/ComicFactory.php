<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [
        
        'title' => $faker -> sentence(),
        'author' => $faker -> name(),
        'releade_date' => $faker -> date(),
        'pages' => $faker -> numberBetween(1, 1000),
    ];
});

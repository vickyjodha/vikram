<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vikram;
use Faker\Generator as Faker;

$factory->define(Vikram::class, function (Faker $faker) {
    return [
        'user_id'=>factory(\App\User::class),
        'name'=>$faker->name,
        'village'=>$faker->sentence,
    ];
});

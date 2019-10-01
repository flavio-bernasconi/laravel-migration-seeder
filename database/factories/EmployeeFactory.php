<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Azienda;
use Faker\Generator as Faker;

$factory->define(Azienda::class, function (Faker $faker) {
    return [
        'gender' => $faker->title($gender = 'male'|'female') ,
        'firstname' => $faker->firstName($gender = null) ,
        'lastname' => $faker->lastname,
        'birthDay' => $faker->dateTime,
        'jobTitle' => $faker->jobTitle,
        'salary' => $faker->numberBetween($min = 12000, $max = 50000),
    ];
});

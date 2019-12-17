<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

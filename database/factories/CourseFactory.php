<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
	$number = $faker->numberBetween(1,50);
	$url = url('/course/');
    return [
     'name' => $faker->catchPhrase,
     'course' => $faker->paragraph(30,true),
     'teacher_name' => $faker->name,
     'school_name' => $faker->company,
    ];
});

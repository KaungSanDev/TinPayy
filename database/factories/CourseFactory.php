<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
	$number = $faker->numberBetween(1,50);
	$url = url('/course/');
    return [
     'name' => $faker->catchPhrase,
     'teacher_name' => $faker->name,
     'school_name' => $faker->company,
     'photo_path' => 'https://source.unsplash.com/random',
     'pdf_path' => url('/pdf/download'),
     'link' => 	$url.'/'.$number,
    ];
});

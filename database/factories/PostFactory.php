<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\{Post,User,Category};
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(5),
        'image' => $faker->imageUrl($width = 223, $height = 149 ,'cats'),
        'user_id' =>User::inRandomOrder()->first()->id,
        'category_id' => Category::inRandomOrder()->first()->id,
    ];
});

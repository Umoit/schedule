<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(App\Admin::class, function (Faker $faker) {
//     static $password;

//     return [
//         'name' => "11",
//         'email' => rand()."22",
//         'phone' => "22",
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(1000),
//     ];
// });

$factory->define(App\News::class, function (Faker $faker) {

    return [
        'tag' => rand(0,100)."tag",
        'title' => str_random(10)."BioIsland佰澳朗德婴幼儿补锌咀嚼片120粒",
        'type' => "text",
        'data'=>'{"text": "asdasdasd"}',
        'rate'=>rand(0,1000),
        'user_id'=>rand(0,10),
        'category_id'=>rand(0,10),
        'upvotes'=>200,
        'downvotes'=>1,
        'comments_number'=>12,
        'approved_at'=>"2017-08-18 06:14:54",
    ];
});
// $factory->define(App\Brand::class, function (Faker $faker) {

//     return [
//         'name' => "牛栏牌".rand(),
//         'url_name' => "abc".rand(),
        
//     ];
// });
// $factory->define(App\Category::class, function (Faker $faker) {

//     return [
//         'name' => "保健品".rand(),
//         'url_name' => "abc".rand(),
//         'parent_id' => rand(0,5),
        
//     ];
// });
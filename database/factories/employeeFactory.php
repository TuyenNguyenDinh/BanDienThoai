<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Employee::class, function (Faker $faker) {
    return [
        'ten' => $faker->name,
        'tai_khoan' =>$faker->text(),
        'mat_khau' =>$faker->password(),    
    ];
});

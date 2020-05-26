<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Employee::class, function (Faker $faker) {
    return [
        'ten' => $faker->name,
        'ngay_sinh' => $faker->date(),
        'dia_chi' => $faker->address,
        'sdt' => $faker->phoneNumber,
        'tai_khoan' =>$faker->text(),
        'mat_khau' =>$faker->password(),    
    ];
});

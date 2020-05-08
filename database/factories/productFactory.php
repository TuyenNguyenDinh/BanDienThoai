<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\product;
use Faker\Generator as Faker;

$factory->define(App\Models\product::class, function (Faker $faker) {
    return [
        'categories_id' => 1,
        'ten' => $faker->name,
        'anh' => 'img.jpg',
        'gia_sp'=> $faker->numberBetween(1000, 10000000),
        'so_luong'=>$faker->numberBetween(1,100),
        'kich_thuoc'=> '123x123x123',
        'trong_luong'=> $faker->numberBetween(10,50),
        'mau_sac'=> $faker->colorName,
        'am_thanh'=> 'digital',
        'bo_nho' => '128',
        'OS' =>'Android',
        'camera' => '16MPx',
        'pin' =>$faker->numberBetween(4000, 5000),
        'ket_noi'=>'bluetooth, usb, 3.5',
    ];
});
<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('login');
});


Route::get('/pendaftaran',function(){
        return view('pendaftaran');
});

Route::get('/kontak', function () {
    $kontaks = [];
    $faker = Faker::create();
    for ($i = 0; $i < 15; $i++) {
        $kontaks[] = [
            "nama" => $faker->name,
            "email" => $faker->unique()->safeEmail,
            "no" => $faker->phoneNumber
        ];
    }

    return view('kontak', ['kontaks' => $kontaks]);
});

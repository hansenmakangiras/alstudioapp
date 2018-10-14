<?php

use Faker\Generator as Faker;

$factory->define(App\Models\JenisCetakan::class, function (Faker $faker) {
    return [
        'kode_jenis' => '',
        'jenis_cetak' => '',
        'ukuran' => '',
        'deskripsi' => '',
        'status_cetak' =>''
    ];
});

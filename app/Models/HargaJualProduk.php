<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HargaJualProduk extends Model
{
    protected $table = "harga_jual_produk";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'produk_id', 'bahan_id', 'mesin_id','finishing_id','potong_id','display_id','harga_jual','min_qty'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];
}

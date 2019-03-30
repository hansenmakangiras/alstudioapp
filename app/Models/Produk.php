<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kategori','produk'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public function hargaJualProduk(){
        return $this->hasMany(HJP::class,'produk_id','id');
    }

    public static function getProdukName($id){
        $name = Produk::find($id);
        return $name->kategori;

    }
}

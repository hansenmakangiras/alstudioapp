<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "kategori_cetak";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kategori'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public function jenisCetak()
    {
        return $this->belongsTo(JenisCetakan::class,'produk_id','id');
    }

    public static function getJenisCetakName($id){
//        dd($id);
        $name = JenisCetakan::find($id);
        return $name->jenis_cetak;

    }
}

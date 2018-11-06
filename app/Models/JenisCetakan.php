<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisCetakan extends Model
{
    protected $table = 'jenis_cetak';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_jenis', 'produk_id', 'jenis_cetak','status_cetak'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public function order()
    {
        return $this->belongsTo(JenisCetakan::class,'jeniscetakid','id');
    }

    public function jenispaket()
    {
        return $this->belongsTo(JenisPaket::class,'id','id_jenis_cetak');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class,'id','produk_id');
    }

    public static function getJenisCetakName($id){
//        dd($id);
        $name = JenisCetakan::find($id);
        return $name->jenis_cetak;

    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisCetakan extends Model
{
    protected $table = 'jenis_cetak';

    public function order()
    {
        return $this->belongsTo(JenisCetakan::class,'jeniscetakid','id');
    }

    public function jenispaket()
    {
        return $this->belongsTo(JenisPaket::class,'id','id_jenis_cetak');
    }

    public static function getJenisCetakName($id){
//        dd($id);
        $name = JenisCetakan::find($id);
        return $name->jenis_cetak;

    }
}

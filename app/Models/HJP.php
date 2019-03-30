<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HJP extends Model
{
    protected $table = "hjp";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'produk_id', 'bahan_id', 'mesin_id','potong_id','display_id',
        'bingkai_id','ukuran','harga_jual','min_qty','tipe_pelanggan_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public function Produk(){
        return $this->belongsTo(Produk::class,'produk_id','produkid');
    }

    public function WorkOrder(){
        return $this->belongsTo(WorkOrder::class,'produk_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cetakid',
        'orderid',
        'pelangganid',
        'jenispaketid',
        'bahanid',
        'mesinid',
        'finishingid',
        'status_bayar',
        'status_order',
        'total_harga',
        'total_order',
        'pajak',
        'diskon',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public function orderDetail(){
        return $this->hasMany(OrderDetail::class,'orderid','orderid');
    }


    public function pelanggan(){
        return $this->hasMany(Pelanggan::class,'pelangganid','id');
    }

    public function jeniscetak()
    {
        return $this->hasMany(JenisCetakan::class,'jeniscetakid','id');
    }

    public function finishing()
    {
        return $this->hasMany(Finishing::class,'finishingid','id');
    }

    public function mesin()
    {
        return $this->hasMany(Mesin::class,',mesinid','id');
    }

    public function bahan()
    {
        return $this->hasMany(Bahan::class,'bahanid','id');
    }

}

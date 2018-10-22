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
        'cetakid', 'orderid', 'pelangganid','jenispaketid','promoid','total_harga',
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

}

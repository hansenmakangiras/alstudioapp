<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_detail";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'orderid', 'qty','harga_jual','panjang','lebar','promo','satuan','status_bayar','status_order','tgl_ambil','keterangan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public function order(){
        return $this->belongsTo(OrderDetail::class,'orderid','orderid');
    }

    public function pelanggan(){
        return $this->hasMany(Pelanggan::class,'pelangganid','id');
    }

    public function jeniscetak()
    {
        return $this->hasMany(JenisCetakan::class,'jeniscetakid','id');
    }

}

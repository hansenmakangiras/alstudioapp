<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use NotificationChannels\WebPush\HasPushSubscriptions;


class WorkOrder extends Model
{
    use HasPushSubscriptions;

    protected $table = "work_orders";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hjp_id',
        'orderid',
        'pelangganid',
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

    public function hargaJualProduk(){
        return $this->hasOne(HJP::class,'hjp_id','id');
    }


    public function pelanggan(){
        return $this->hasMany(Pelanggan::class,'pelangganid','id');
    }

    public function satuan()
    {
        return $this->hasMany(JenisSatuan::class,'satuanid','id');
    }
}

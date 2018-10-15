<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jeniscetakid', 'orderid', 'idpelanggan','jenispaket','keterangan', 'status_order','status_aktif'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public function pelanggan(){
        return $this->hasMany(Pelanggan::class,'pelangganid','id');
    }

    public function jeniscetak()
    {
        return $this->hasMany(JenisCetakan::class,'jeniscetakid','id');
    }

}

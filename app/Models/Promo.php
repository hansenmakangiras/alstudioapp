<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = "promo";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode', 'namapromo', 'deskripsi','expire_date','tipe_pelanggan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getKodePromo($id){
        $promo = Promo::find($id);
        return $promo->kode;
    }

    public static function getKodePromoWithTipe($id, $tipe){
//        dd($tipe);
        $promo = Promo::where('id',$id)->where('tipe_pelanggan',$tipe)->first();
        if($promo != null){
            return $promo->kode;
        }

        return "";

    }
}

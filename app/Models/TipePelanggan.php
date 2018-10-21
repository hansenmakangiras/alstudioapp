<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipePelanggan extends Model
{
    protected $table = "tipe_pelanggan";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipe'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getTipePelanggan($id){
        $tipe = TipePelanggan::find($id);
        return $tipe->tipe;
    }

    public static function getArrayPelanggan(){
       return TipePelanggan::pluck('tipe','id');

    }
}

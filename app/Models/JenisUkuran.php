<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisUkuran extends Model
{
    protected $table = 'jenis_ukuran';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'produk_id','ukuran','harga','satuan_id','deskripsi','panjang','lebar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getJenisUkuranName($id){
//        dd($id);
        $name = JenisUkuran::find($id);
        return $name->ukuran;

    }

}

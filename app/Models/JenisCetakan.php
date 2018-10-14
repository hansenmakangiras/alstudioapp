<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisCetakan extends Model
{
    protected $table = 'jenis_cetak';
    public $timestamps = false;

    protected $guard = ['admin','web'];

    public static function getStatusCetakName($status)
    {
        switch ($status){
            case 0;
                return "<span class='label bg-red'>Belum Tercetak</span>";
            case 1;
                return "<span class='label bg-green'>Sudah Tercetak</span>";
            case 2;
                return "<span class='label bg-yellow'>Proses Cetak</span>";
            default : 0;
        }
//        if(is_integer($status) == 0){
//            return "Belum Tercetak";
//        }
//
//        return "Sudah Tercetak";
    }
}

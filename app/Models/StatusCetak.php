<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class StatusCetak extends Model
{
    protected $table ='status_cetak';
    protected $guard_name = 'web';

    public static function getStatusCetakName($id)
    {
        if ((int) $id){
            $statusName = StatusCetak::find($id);
            return $statusName->statuscetak;
        }
        return "";
//        switch ($status){
//            case 0;
//                return "<span class='label bg-red'>Belum Tercetak</span>";
//            case 1;
//                return "<span class='label bg-green'>Sudah Tercetak</span>";
//            case 2;
//                return "<span class='label bg-yellow'>Proses Cetak</span>";
//            default : 0;
//        }
    }
}

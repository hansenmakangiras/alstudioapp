<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class StatusCetak extends Model
{
    protected $table = 'status_cetak';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'statuscetak'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getStatusCetakName($id)
    {
        $statusName = StatusCetak::find((int) $id);
//        dd($statusName);
        return $statusName->statuscetak;
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

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->format('l, d F Y');
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])
            ->diffForHumans();
    }
}

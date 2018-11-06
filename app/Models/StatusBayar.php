<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class StatusBayar extends Model
{
    protected $table ='status_bayar';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'statusbyr'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getSelectStatus()
    {
        return StatusBayar::pluck('statusbyr','id')->all();
    }

    public static function getStatusName($id){
        if($id){
            $name = StatusBayar::find($id);
            return $name->statusbyr;
        }
        return "";
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

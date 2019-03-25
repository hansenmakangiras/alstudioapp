<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisBingkai extends Model
{
    protected $table = 'jenis_bingkai';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jenis_bingkai','hpp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getJenisBingkaiName($id){
//        dd($id);
        $name = JenisBingkai::find($id);
        return (!empty($name)) ? $name->jenis_bingkai : "-";
    }

}

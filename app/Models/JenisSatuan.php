<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisSatuan extends Model
{
    protected $table = 'satuan';
    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'satuan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];


    public static function getSatuanName($id)
    {
        return JenisSatuan::find($id)->satuan;

    }
}

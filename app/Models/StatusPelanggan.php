<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusPelanggan extends Model
{
    protected $table = 'status_pelanggan';
    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status_pelanggan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getStatusPelangganName($id)
    {
        $name = StatusPelanggan::find($id);
        return $name->status_pelanggan;

    }
}

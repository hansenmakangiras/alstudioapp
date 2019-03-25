<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisDisplay extends Model
{
    protected $table = 'jenis_display';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jenis_display','hpp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getJenisDisplayName($id){
//        dd($id);
        $name = JenisDisplay::find($id);
        return (!empty($name) ? $name->jenis_display : "-");

    }

}

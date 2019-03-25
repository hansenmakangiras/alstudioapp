<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPotong extends Model
{
    protected $table = 'jenis_potong';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_potong', 'jenis_potong', 'id_satuan','hpp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getJenisPotongName($id){
//        dd($id);
        $name = JenisPotong::find($id);
        return (!empty($name)) ? $name->jenis_potong : "-";

    }

}

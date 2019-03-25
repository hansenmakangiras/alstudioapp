<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finishing extends Model
{
    protected $table = "finishing";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jenis_finishing', 'id_satuan', 'hpp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public static function getFinishingName($id){
//        dd($id);
        $name = Finishing::find($id);
        return (!empty($name)) ? $name->jenis_finishing : "-";

    }
}

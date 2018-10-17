<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = "pelanggan";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'namapel', 'alamat', 'notelp','tgl_ambil','status_bayar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class,'id','pelangganid');
    }

    public static function getPelangganName($id)
    {
        $name = Pelanggan::find($id);
        return $name->namapel;
    }

    public static function getJenisPelanggan($id)
    {
        switch ($id){
            case 1;
                return "<span class='label bg-red'>Umum</span>";
            case 2;
                return "<span class='label bg-green'>Private</span>";
            case 3;
                return "<span class='label bg-yellow'>VIP</span>";
            default : 0;
        }

    }

    public static function getStatusPelanggan($id)
    {
        switch ($id){
            case 0;
                return 'Inactive';
            case 1;
                return 'Active';
            case 2;
                return 'Banned';
            default: 0;
        }
    }

    public static function getArrJenisPelanggan(){
        return [
            1 => 'Umum',
            2 => 'Private',
            3 => 'VIP'
        ];
    }

    public static function getArrStatusPelanggan(){
        return [
            1 => 'Active',
            2 => 'Inactive',
            3 => 'Banned'
        ];
    }
}

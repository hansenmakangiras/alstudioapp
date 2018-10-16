<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPaket extends Model
{
    protected $table = 'jenis_paket';
    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_jenis_cetak', 'nama_paket', 'deskripsi','harga_jual','status','ukuran'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '_token',
    ];

    public function jeniscetak()
    {
        return $this->hasMany(JenisCetakan::class,'id','id_jenis_cetak');
    }

    public static function getJenisPaket($id)
    {
        return JenisPaket::where('id_jenis_cetak', $id)->get();

    }
    public static function getDataPaket($id)
    {
        return JenisPaket::find($id);

    }
}

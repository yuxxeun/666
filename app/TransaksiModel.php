<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    protected $table = 'usk_transaksi';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = false;

    public function getBarang()
    {
        return $this->hasOne('App\ProdukModel', 'id_barang', 'id_barang');
    }

    public function getPengguna()
    {
        return $this->hasOne('App\PenggunaModel', 'id_pengguna', 'id_pengguna');
    }
}

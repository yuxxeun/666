<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransaksiModel extends Model
{
    public function allData()
    {
        return DB::table('usk_transaksi')
        ->leftJoin('usk_pengguna', 'usk_pengguna.id_pengguna', '=', 'usk_pengguna.id_pengguna')
        ->get();
    }

    // protected $fillable = ['kategori', 'nama_barang', 'harga_barang', 'quantity', 'jumlah_harga'];
    protected $table = 'usk_transaksi';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = FALSE;
}

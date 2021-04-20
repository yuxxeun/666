<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'usk_barang';
    protected $primaryKey = 'id_barang';
    public $timestamps = false;
}

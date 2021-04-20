<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table = 'usk_kategoribarang';
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;
}

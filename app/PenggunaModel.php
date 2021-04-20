<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenggunaModel extends Model
{
    protected $table = 'usk_pengguna';
    protected $primaryKey = 'id_pengguna';
    public $timestamps = false;
}

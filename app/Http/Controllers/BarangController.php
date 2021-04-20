<?php

namespace App\Http\Controllers;
use App\BarangModel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = BarangModel::all();
        return view('barang', compact('barang'));
    }
}

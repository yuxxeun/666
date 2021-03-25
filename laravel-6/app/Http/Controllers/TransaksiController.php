<?php

namespace App\Http\Controllers;

// use Validator;
use App\Models\TransaksiModel;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function create()
    {
        return view('tambah_transaksi');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'kategori' => 'required',
            // 'nama_barang' => 'required',
            // 'harga_barang' => 'required',
            'quantity' => 'required',
            'id_barang' => 'required',
            'tgl_transaksi' => 'required',
            'id_pengguna' => 'required',
            // 'diskon' => 'required',
            'total_bayar'=> 'required'
        ]);
        
        $data = new TransaksiModel();
        // $data->kategori = $request->input('kategori');
        // $data->nama_barang = $request->input('nama_barang');
        // $data->harga_barang = $request->input('harga_barang');
        $data->id_barang = $request->input('id_barang');
        $data->tgl_transaksi = $request->input('tgl_transaksi');
        $data->id_pengguna = $request->input('id_pengguna');
        $data->qty = $request->input('quantity');
        // $data->diskon = $request->input('diskon');
        $data->total_bayar = $request->input('total_bayar');
        $data->save();

        return redirect()->to('transaksi');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

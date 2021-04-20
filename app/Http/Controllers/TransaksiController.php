<?php

namespace App\Http\Controllers;

use App\KategoriModel;
use App\ProdukModel;
use App\TransaksiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = TransaksiModel::select('*')->orderBy('tgl_transaksi', 'asc')->get();
        $params = [
            'data' => $transaksi,
            'title' => 'Transaksi'
        ];
        return view('transaksi', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriModel::pluck('nama_kategori', 'id_kategori');
        $params = [
            'kategori' => $kategori,
            'title' => 'Tambah Transaksi'
        ];

        return view('transaksiTambah', $params);
    }

    public function getBarang($id)
    {
        $data = ProdukModel::where('id_kategori',$id)->pluck('nama_barang', 'id_barang');

        return response()->json($data);
    }

    public function fillBarang($id)
    {
        $data = ProdukModel::where('id_barang', $id)->pluck('harga_barang');

        return response()->json($data);
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'qty' => 'required'
        ]);

        $jumlah = $request->input('harga') * $request->input('qty');
        if ($jumlah >= 150000) {
            $diskon = ($jumlah*5)/100;
            $total = $jumlah-$diskon;
        }else{
            $diskon = 0;
            $total = $jumlah-$diskon;
        }

        $data = [
            'jumlah_harga' => $jumlah,
            'diskon' => $diskon,
            'total_bayar' => $total
        ];

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang' => 'required',
            'qty' => 'required',
            'bayar' => 'required'
        ]);

        $data = new TransaksiModel();
        $data->id_barang = $request->input('barang');
        $data->qty = $request->input('qty');
        $data->total_bayar = $request->input('bayar');
        $data->tgl_transaksi = Carbon::now();
        $data->id_pengguna = Session::has('user');
        $data->save();

        return redirect('/transaksi')->with('success', 'Transaksi Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

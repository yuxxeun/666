@extends('layouts.master', ['title' => 'Transaksi'])
@section('content')
    <div class="container">
        <h5 class="text-center">Data Transaksi</h5>
          <a href="tambah_transaksi" class="btn btn-primary pr-3 mb-3">Tambah Transaksi</a>

        <table class="table table-bordered mb-3 text-center">
            <thead>
              
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Transaksi</th>
                <th scope="col">Tanggal Transaksi</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Qty</th>
                <th scope="col">Total Bayar</th>
                <th scope="col">Nama Kasir</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>1004</td>
                <td>5 Maret 2021 - 15:20:21</td>
                <td>Pantene Anti Ketombe & Borok 130 ml</td>
                <td>5</td>
                <td>Rp. 115..000</td>
                <td>Silvia</td>
              </tr>
            </tbody>
          </table>
          <div class="mt-2">
              {{-- blank page --}}
          </div>
    </div>
@endsection
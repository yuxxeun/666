@extends('layouts.master', ['title' => 'Transaksi'])
@section('content')
    <div class="container">
        <h5 class="text-center">Data Transaksi</h5>
          <a href="{{ url('transaksi/tambah') }}" class="btn btn-primary pr-3 mb-3">Tambah Transaksi</a>

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
              @php
                $no = 1
              @endphp
              @foreach($data as $tr)
              <tr>
                <th>{{ $no++ }}</th>
                <th>{{ $tr->id_transaksi }}</th>
                <th>{{ date('d F Y H.i', strtotime($tr->tgl_transaksi)) }}</th>
                <th>{{ $tr->getBarang->nama_barang }}</th>
                <th>{{ $tr->qty }}</th>
                <th>{{ $tr->total_bayar }}</th>
                <th>{{ $tr->getPengguna->username }}</th>
              </tr>
          @endforeach
          </table>
          <div class="mt-2">
              {{-- blank page --}}
          </div>
    </div>
@endsection
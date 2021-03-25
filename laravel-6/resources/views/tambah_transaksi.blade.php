@extends('layouts.master', ['title' => 'Tambah Transaksi'])
@section('content')
    <div class="container">
        <h5 class="text-center mb-5">Input Data Transaksi</h5>

        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
 

        <form action="{{ url('/store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
          @csrf
          @method('POST')

           {{-- Input nama kategori --}}
           <div class="row g-3">
            <div class="col-md-4">
                {{-- blank page --}}
            </div>
            <div class="col-md-2">
              <label for="kategori" class="mt-2"><h5>Kategori</h5></label>
            </div>
            <div class="col-md-3">
                <select name="kategori" id="kategori" class="form-control">
                    <option selected>-- Pilih Kategori -- </option>
                    <option value="sabun">Sabun</option>
                </select>
            </div>
            <div class="col-md-3">
                {{-- blank page --}}
            </div>
          </div>

          {{-- Input nama barang --}}
          <div class="row g-3 mt-1">
            <div class="col-md-4">
                {{-- blank page --}}
            </div>
            <div class="col-md-2">
              <label for="nama_barang" class="mt-2"><h5>Nama Barang</h5></label>
            </div>
            <div class="col-md-3">
                <select name="nama_barang" id="nama_barang" class="form-control">
                    <option selected>-- Pilih Barang -- </option>
                    <option value="sabun">Sabun</option>
                </select>
            </div>
            <div class="col-md-3">
                {{-- blank page --}}
            </div>
          </div>

          {{-- Input harga barang --}}
          <div class="row g-3 mt-1">
            <div class="col-md-4">
                {{-- blank page --}}
            </div>
            <div class="col-md-2">
              <label for="harga_barang" class="mt-2"><h5>Harga Barang</h5></label>
            </div>
            <div class="col-md-3">
                <input type="text" name="harga_barang" id="harga_barang" placeholder="Rp. xxx" class="form-control">
            </div>
            <div class="col-md-3">
                {{-- blank page --}}
            </div>
          </div>

          {{-- Input Quantity --}}
          <div class="row g-3 mt-1">
            <div class="col-md-4">
                {{-- blank page --}}
            </div>
            <div class="col-md-2">
              <label for="quantity" class="mt-2"><h5>Quantity</h5></label>
            </div>
            <div class="col-md-3">
                <input type="number" id="quantity" name="quantity" class="form-control" placeholder="Masukan Quantity" min="1">
                <button type="button" class="btn btn-primary btn-sm mt-1" style="width: 100px">Hitung</button>
            </div>
            <div class="col-md-3">
                {{-- blank page --}}
            </div>
          </div>

          {{-- Input Jumlah harga --}}
          <div class="row g-3 mt-1">
            <div class="col-md-4">
                {{-- blank page --}}
            </div>
            <div class="col-md-2">
              <label for="jumlah_harga" class="mt-2"><h5>Jumlah Harga</h5></label>
            </div>
            <div class="col-md-3">
              <input type="text" name="jumlah_harga" id="jumlha_harga" placeholder="Rp. xxx" class="form-control">
            </div>
            <div class="col-md-3">
                {{-- blank page --}}
            </div>
          </div>

          {{-- Input Diskon --}}
          <div class="row g-3 mt-1">
            <div class="col-md-4">
                {{-- blank page --}}
            </div>
            <div class="col-md-2">
              <label for="diskon" class="mt-2"><h5>Diskon</h5></label>
            </div>
            <div class="col-md-3">
              <input type="text" name="diskon" id="diskon" placeholder="Rp. xxx" class="form-control">
            </div>
            <div class="col-md-3">
                {{-- blank page --}}
            </div>
          </div>

          {{-- Input Total Bayar --}}
          <div class="row g-3 mt-1">
            <div class="col-md-4">
                {{-- blank page --}}
            </div>
            <div class="col-md-2">
              <label for="total_bayar" class="mt-2"><h5>Total Bayar</h5></label>
            </div>
            <div class="col-md-3">
              <input type="text" name="total_bayar" id="total_bayar" placeholder="Rp. xxx" class="form-control">
            </div>
            <div class="col-md-3">
                {{-- blank page --}}
            </div>
          </div>

          {{-- Tombol --}}
          <div class="row g-3 mt-1">
            <div class="col-md-6">
                {{-- blank page --}}
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary btn-sm" style="width: 100px;">
                Simpan
              </button>
            </div>
            <div class="col-md-1">
              <button type="button" class="btn btn-secondary btn-sm" style="width: 70px;">
                Batal
              </button>
            </div>
            <div class="col-md-2">
                {{-- blank page --}}
            </div>
          </div>


          {{-- Some stuff for testing which is to insert into ur fucking database --}}

           {{-- <div class="row g-3 mt-1">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-2">
              <label for="id_transaksi" class="mt-2"><h5>id transaksi</h5></label>
            </div>
            <div class="col-md-3">
              <input type="text" name="id_transaksi" id="id_transaksi" placeholder="Rp. xxx" class="form-control">
            </div>
            <div class="col-md-3">
                
            </div>
          </div>

             <div class="row g-3 mt-1">
              <div class="col-md-4">
                  
              </div>
              <div class="col-md-2">
                <label for="id_barang" class="mt-2"><h5>id Barang</h5></label>
              </div>
              <div class="col-md-3">
                <input type="text" name="id_barang" id="id_barang" placeholder="Rp. xxx" class="form-control">
              </div>
              <div class="col-md-3">
                  
              </div>
            </div>

               <div class="row g-3 mt-1">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-2">
                  <label for="tgl_transaksi" class="mt-2"><h5>tgl transaksi</h5></label>
                </div>
                <div class="col-md-3">
                  <input type="date" name="tgl_transaksi" id="tgl_transaksi" placeholder="Rp. xxx" class="form-control">
                </div>
                <div class="col-md-3">
                  
                </div>
              </div>

               <div class="row g-3 mt-1">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-2">
                  <label for="id_pengguna" class="mt-2"><h5>id Pengguna</h5></label>
                </div>
                <div class="col-md-3">
                  <input type="text" name="id_pengguna" id="id_pengguna" placeholder="Rp. xxx" class="form-control">
                </div>
                <div class="col-md-3">
                    
                </div>
              </div> --}}

        </form>
    </div>
@endsection
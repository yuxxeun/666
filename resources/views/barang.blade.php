@extends('layouts.master', ['title' => 'Barang'])
@section('content')
    <div class="container">
        <table class="table table-bordered mb-3 text-center">
            <thead> 
              <tr>    
                <th scope="col">ID Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">ID Kategori</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($barang as $p)
              <tr>
                <th scope="row">{{ $p->id_barang }}</th>
                <td>{{ $p->nama_barang }}</td>
                <td>{{ $p->harga_barang }}</td>
                <td>{{ $p->id_kategori }}</td>
              </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <h5 class="text-center">I Dont Know but, <br> LGTM Bro..</h5>
        <img src="/image/fuck.jpg" class="mx-auto rounded image-fluid mx-auto d-block" alt="FUCK YOU BITCH!" width="full">
    </div>
@endsection
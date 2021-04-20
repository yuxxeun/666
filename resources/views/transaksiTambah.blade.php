@extends('layouts.master', ['title' => 'Tambah Transaksi']);
@section('content')
    <div class="container-fluid mt-2">
        <h1 class="text-center">Input Data Transaksi</h1>
        <form action="{{url('/transaksi/input')}}" method="post">
            {{csrf_field()}}
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-3">
                    <label for="">Kategori</label>
                </div>
                <div class="col-3">
                    <select class="form-control form-control-sm" name="kategori" id="kategori">
                        <option value="" selected>---Pilih Kategori---</option>
                        @foreach($kategori as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-3">
                    <label for="">Barang</label>
                </div>
                <div class="col-3">
                    <select class="form-control form-control-sm" name="barang" id="barang">
                        <option value="" selected>---Pilih Barang---</option>
                    </select>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-3">
                    <label for="">Harga Barang</label>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control form-control-sm" name="harga" id="harga" readonly>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-3">
                    <label for="">Quantity</label>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control form-control-sm" name="qty" >
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-3">
                    <button type="button" class="btn btn-primary btn-sm" id="hitung">Hitung</button>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-3">
                    <label for="">Jumlah Harga</label>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control form-control-sm" name="jumlah" id="jumlah" readonly>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-3">
                    <label for="">Diskon</label>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control form-control-sm" name="diskon" id="diskon" readonly>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-3">
                    <label for="">Total Bayar</label>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control form-control-sm" name="bayar" id="bayar" readonly>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-3">
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    <a href="{{url('/transaksi')}}" class="btn btn-danger btn-sm">Batal</a>
                    <button type="reset" class="btn btn-warning btn-sm">Reset</button>
                </div>
                <div class="col-3"></div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function (){
            $('#kategori').on('change',function(){
                var kategoriID = jQuery(this).val();
                if(kategoriID)
                {
                    jQuery.ajax({
                        url : '/transaksi/item/'+kategoriID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery.each(data, function(key,value){
                            $($('#barang')).append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $($('#barang')).empty();
                }
            });

            $('#barang').on('change',function(){
                var hargaId = $('#barang').val();
                jQuery.ajax({
                    url : '/transaksi/fill/'+hargaId,
                    type : "GET",
                    dataType : "json",
                    success:function(data)
                    {
                        console.log(data);
                        $('#harga').val(data);
                    }
                });
            });

            $('#hitung').on('click', function(){
                let harga = $('input[name=harga]').val();
                let qty = $('input[name=qty]').val();
                $.ajax({
                    url : '/transaksi/hitung',
                    data : {
                        harga:harga,
                        qty: qty,
                        _token: "{{csrf_token()}}",
                    },
                    type : "POST",
                    success:function(data)
                    {
                        console.log(data);
                        $('#jumlah').val(data.jumlah_harga);
                        $('#diskon').val(data.diskon);
                        $('#bayar').val(data.total_bayar);
                    }
                });
            });
        });
    </script>
@endsection
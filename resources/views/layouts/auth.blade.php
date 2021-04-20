<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <title>{{ $title ?? 'K-seer' }}</title>
</head>
<body class="mb-5">

    <div class="container mt-5 px-5">
        <div class="row master-row">
            <div class="col-md-12">
                {{-- navbar --}}
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{'/'}}"><h5><b>MELU LINK.STORE</b></h5></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                      <ul class="navbar-nav">
                        @if(Auth::guest())
                        <li class="nav-item border-kanan">
                          <a class="nav-link{{ request()->is('beranda') ? ' active' : '' }}" href="beranda">Beranda</a>
                        </li>
                        <li class="nav-item border-kanan">
                          <a class="nav-link{{ request()->is('barang') ? ' active' : '' }}" href="barang">Barang</a>
                        </li>
                        <li class="nav-item border-kanan">
                          <a class="nav-link{{ request()->is('transaksi') ? ' active' : '' }}" href="transaksi">Transaksi</a>
                        </li>
                        <li class="nav-item border-kanan">
                          <a class="nav-link{{ request()->is('laporan') ? ' active' : '' }}" href="laporan">Laporan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link{{ request()->is('logout') ? ' active' : '' }}" href="/logout">Keluar</a>
                        </li>
                        @endif
                      </ul>
                    </div> --}}
                  </nav>    

                  {{-- content box --}}
                  <div class="mt-2 mb-2 border border-dark">
                    <div class="mx-auto pt-5 pb-5 master-box">
                        {{-- content --}}
                        @yield('content')
                    </div>
                  </div>

                  {{-- footer --}}
                  <div class="text-center">
                    <footer>
                        <h6>USK 2021 - Krido Pambudi</h6>
                    </footer>
                  </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @yield('script')
    
</body>
<script src="/js/bootstrap.min.js"></script>
</html>
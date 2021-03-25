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
                    <a class="navbar-brand" href="{{'beranda'}}"><h5><b>MELU LINK.STORE</b></h5></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item{{ request()->is('beranda') ? ' active' : '' }} border-kanan">
                          <a class="nav-link" href="beranda">Beranda</a>
                        </li>
                        <li class="nav-item border-kanan">
                          <a class="nav-link" href="barang">Barang</a>
                        </li>
                        <li class="nav-item border-kanan">
                          <a class="nav-link" href="transaksi">Transaksi</a>
                        </li>
                        <li class="nav-item border-kanan">
                          <a class="nav-link" href="#">Laporan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('logout') }}">Keluar</a>
                        </li>
                      </ul>
                    </div>
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

</body>
<script src="/js/bootstrap.min.js"></script>
</html>
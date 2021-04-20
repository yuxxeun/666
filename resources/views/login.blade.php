@extends('layouts.auth', ['title' => 'Login'])
@section('content')
    <div class="container kotak-login">
        <h5 class="text-center mt-5">
            LOGIN Melu.Link
        </h5>

        <form action="/postLogin" method="post" class="mt-4 mb-4">
            {{ csrf_field() }}
            {{-- Username --}}
            <div class="row g-3">
                <div class="col-md-3">
                    {{-- blank page --}}
                </div>
                <div class="col-md-3">
                  <label for="username" class="mt-2"><h5>Username</h5></label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan username">
                </div>
                <div class="col-md-2">
                    {{-- blank page --}}
                </div>
              </div>

              {{-- Password --}}
              <div class="row g-3">
                <div class="col-md-3">
                    {{-- blank page --}}
                </div>
                <div class="col-md-3">
                  <label for="password" class="mt-2"><h5>Password</h5></label>
                </div>
                <div class="col-md-5">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukan password">
                </div>
                <div class="col-md-2">
                    {{-- blank page --}}
                </div>
              </div>

            {{-- Tombol login --}}
              <div class="row g-3" style="margin-top: -20px">
                <div class="col-md-8">
                    {{-- blank page --}}
                </div>
                <div class="col-md-1">
                  <label for="kategori" class="mt-2"></label>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary btn-sm" style="width: 65px">Masuk</button>
                </div>
              </div>
        </form>
    </div>   
@endsection
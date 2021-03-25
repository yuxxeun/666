<?php

namespace App\Http\Controllers;

use App\PenggunaModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function formLogin()
    {
        return view('login');
    }
    public function cek(Request $request)
    {
        $pengguna = PenggunaModel::where('username', $request->input('username'))->first();
        //Pengecekan apakah $request->input('username') ada di database
        if (!empty($pengguna)) {
            //pengecekan apakah username dan password sama dengan yang ada di database
            if ($pengguna['username'] == $request->input('username') && $pengguna['password'] == $request->input('password')) {
                $request->session()->put('username', $request->input('username'));
                return redirect('/beranda');
            }else{
                //Diganti return redirect('/login')->with('error', 'Username/Password anda salah')
                echo "Username/password anda salah";
            }
        }else{
            //Diganti return redirect('/login')->with('error', 'Username/Password anda salah')
            echo "Username/password anda salah";
        }
    }

    public function logout(Request $request)
    {
        $request->session()->remove('username');
        return redirect('/login');
    }
}


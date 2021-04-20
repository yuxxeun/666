<?php

namespace App\Http\Controllers;

use App\PenggunaModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login');
    }

    public function cekLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = PenggunaModel::where('username', $request->input('username'))->first();

        if (!empty($data)) {
            if ($data['username'] == $request->input('username') && $data['password'] == $request->input('password')) {
                $request->session()->put('user', $request->input('username'));
                return redirect('/beranda');
            }else{
                return redirect('/login')->with('error', 'Username/Password anda salah');
            }
        }else{
            return redirect('/login')->with('error', 'Username/Password anda salah');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('/');
    }
}

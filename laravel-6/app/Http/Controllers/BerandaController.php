<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    
    public function index(Request $request)
    {
        $data = $request->session()->get('username');
        return view('beranda', ['data' => $data]);
    }
}

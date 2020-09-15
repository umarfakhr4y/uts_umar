<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerucutController extends Controller
{
    public function index()
    {
        return view('v_kerucut');
    }

    public function hitung()
    {
        $angka1 = request()->input('angka1');
        $angka2 = request()->input('angka2');
        
        
        $hasil = 1/3*(22/7*(($angka1*$angka1)*$angka2));
            return view ("h_kerucut", ['hasil' => $hasil]);
    }
}

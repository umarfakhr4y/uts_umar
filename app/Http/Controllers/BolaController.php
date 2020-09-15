<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BolaController extends Controller
{
    public function index()
    {
        return view('v_bola');
    }

    public function hitung()
    {
        $angka1 = request()->input('angka1');
        
        $hasil = 4/3*(22/7*($angka1*$angka1*$angka1));
            return view ("h_bola", ['hasil' => $hasil]);
    }
}

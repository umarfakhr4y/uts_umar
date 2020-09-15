<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tabungController extends Controller
{

    public function index()
    {
        return view('v_tabung');
    }


    public function hitung()
    {
        $angka1 = request()->input('angka1');
        $angka2 = request()->input('angka2');
        
        $hasil = (22/7*($angka1*$angka1))*$angka2;
            return view ("h_tabung", ['hasil' => $hasil]);
    }
}

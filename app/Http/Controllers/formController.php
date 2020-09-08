<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    
    public function index()
    {
        
        return view('form');
    }
    // public function proses(Request $request)
    // {
    //     $name = $request->nama;
    //     $umur = $request->umur;
    //     return view('proses', [
    //         'name' => $name,
    //         'umur' => $umur
    //     ]);
    // }
    public function kalkulator()
    {
        $angka1 = request()->input('angka1');
        $angka2 = request()->input('angka2');
        $operasi = request()->input('operasi');
        
        if ($operasi == '+') {
            $hasil = $angka1+$angka2;
            return view ("proses", ['hasil' => $hasil]);
        }else if($operasi  == '-'){
            $hasil = $angka1-$angka2;
            return view ("proses", ['hasil' => $hasil]);
        }else if($operasi  == 'X'){
            $hasil = $angka1*$angka2;
            return view ("proses", ['hasil' => $hasil]);
        }else if($operasi  == ':'){
            $hasil = $angka1/$angka2;
            return view ("proses", ['hasil' => $hasil]);
        }
    }

}
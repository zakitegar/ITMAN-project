<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index($nama){
        return $nama;
    }

    public function formulir($formulir){
        return view ('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $formulir = $request->input('alamat');

        return "Nama : ".$nama.",Alamat : ".$alamat;
    }
}
